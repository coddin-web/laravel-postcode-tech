<?php

namespace Coddin\Zipcode\Tests;

class ZipcodeTest extends TestCase
{
    /** @test */
    public function test_full_postcode_api()
    {
        $zipcode = '7315JA';
        $number = '1';
        $zip = \Zipcode::get($zipcode, $number, true);

        $this->assertEquals($zip->postcode, $zipcode);
        $this->assertEquals($zip->number, $number);
        $this->assertEquals($zip->street, 'Koninklijk Park');
        $this->assertEquals($zip->city, 'Apeldoorn');
        $this->assertEquals($zip->province, 'Gelderland');
        $this->assertObjectHasAttribute('geo', $zip);
    }
}
