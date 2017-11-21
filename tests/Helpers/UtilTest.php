<?php

namespace Resque\Tests\Heplers\Utils;

use Resque\Helpers\Util;
use PHPUnit\Framework\TestCase;

class SluggerTest extends TestCase
{
    /**
     * @param $expected
     * @param $bytes
     * @param null $force_unit
     * @param null $format
     * @param bool $si
     *
     * @dataProvider getBytes
     */
    public function testBytes($expected, $bytes, $force_unit = null, $format = null, $si = true)
    {
        $this->assertSame($expected, Util::bytes($bytes, $force_unit, $format, $si));
    }

    public function getBytes()
    {
        yield ['1.00 B', 1];
        yield ['10.00 B', 10];
        yield ['100.00 B', 100];
        yield ['1.00 kB', 1000];
        yield ['10.00 kB', 10000];
        yield ['100.00 kB', 100000];
        yield ['10.00 MB', 10000000];
        yield ['100.00 MB', 100000000];
        yield ['1.00 GB', 1000000000];
        yield ['10.00 GB', 10000000000];
        yield ['100.00 GB', 100000000000];
        yield ['1.00 TB', 1000000000000];
        yield ['10.00 TB', 10000000000000];
        yield ['100.00 TB', 100000000000000];
        yield ['1.00 PB', 1000000000000000];
        yield ['10.00 PB', 10000000000000000];
        yield ['100.00 PB', 100000000000000000];
    }
}