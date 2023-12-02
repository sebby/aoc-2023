<?php

declare(strict_types=1);

namespace Test;

use App\Day1;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    /**
     * @dataProvider dataProviderDay1
     * @return       void
     */
    public function testPuzzle1($input, $expected)
    {
        $d = new Day1();
        $this->assertEquals($expected, $d->byLine($input));
    }


    public static function dataProviderDay1(): array
    {
        return [
          [
            'sdsdd',
            '',
          ],
            [
                '1abc2',
                '12',
            ],
            [
                'pqr3stu8vwx',
                '38',
            ],
            [
                'a1b2c3d4e5f',
                '15',
            ],[
                'treb7uchet',
                '77',
            ],
        ];
    }
}
