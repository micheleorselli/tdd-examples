<?php

require_once __DIR__ . '/RomanNumeral.php';

use PHPUnit\Framework\TestCase;

class RomanNumeralTest extends TestCase
{
    public function testVIIIs8()
    {
        $r = new RomanNumeral();

        $this->assertEquals(8, $r->toInt('VIII'));
    }

    public function testIXs10()
    {
        $r = new RomanNumeral();

        $this->assertEquals(10, $r->toInt('IX'));
    }
}
