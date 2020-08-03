<?php

namespace Coddin\Zipcode;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Coddin\Zipcode\Zipcode
 */
class ZipcodeFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zipcode';
    }
}
