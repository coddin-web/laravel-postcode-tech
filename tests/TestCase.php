<?php

namespace Coddin\Zipcode\Tests;

use Coddin\Zipcode\ZipcodeFacade;
use Coddin\Zipcode\ZipcodeServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            ZipcodeServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Zipcode' => ZipcodeFacade::class,
        ];
    }
}
