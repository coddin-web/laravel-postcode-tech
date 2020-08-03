<?php

namespace Coddin\Zipcode;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class Zipcode
{
    /**
     * @param string $zipcode
     * @param string $number
     * @param bool $full
     * @return \Illuminate\Support\MessageBag|mixed
     * @throws \Exception
     */
    public static function get(string $zipcode, string $number, bool $full = false)
    {
        $validator = Validator::make([
            'zipcode' => $zipcode,
            'number' => $number,
        ], [
            'zipcode' => [
                'required',
                'string',
                'regex: /^[1-9][0-9]{3} ?(?!sa|sd|ss)[a-z]{2}$/i',
                'max:7',
            ],
            'number' => [
                'required',
                'string',
                'max:12',
            ],
        ]);

        if (! $validator->passes()) {
            return $validator->errors();
        }

        if (! $apiKey = config('zipcode.api_key')) {
            throw new \Exception('Postcode.tech API KEY not set', 404);
        }

        $cacheName = sprintf('zipcode-%s-%s%s', $zipcode, $number, $full ? '-full' : '');

        if (Cache::has($cacheName)) {
            return Cache::get($cacheName);
        }

        $call = Http::withToken($apiKey)
            ->get('https://postcode.tech/api/v1/postcode' . ($full ? '/full' : ''), [
                'postcode' => $zipcode,
                'number' => $number,
            ]);

        $body = (object)$call->json();

        if (isset($body->street)) {
            Cache::put($cacheName, $body);
        }

        return $body;
    }
}
