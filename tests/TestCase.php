<?php

namespace Coddin\Zipcode\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Coddin\Zipcode\ZipcodeServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            ZipcodeServiceProvider::class,
        ];
    }
}
