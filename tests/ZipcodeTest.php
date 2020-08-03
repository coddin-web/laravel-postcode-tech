<?php

namespace Coddin\Zipcode\Tests;

use Coddin\Zipcode\Zipcode;

class ZipcodeTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $zipcode = '7315JA';
        $number = '1';
        $zip = Zipcode::get($zipcode, $number, true);

        $this->assertEquals($zip->postcode, $zipcode);
        $this->assertEquals($zip->number, $number);
        $this->assertEquals($zip->street, 'Koninklijk Park');
        $this->assertEquals($zip->city, 'Apeldoorn');
        $this->assertEquals($zip->province, 'Gelderland');
        $this->assertObjectHasAttribute('geo', $zip);
    }
}
