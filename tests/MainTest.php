<?php

declare(strict_types=1);

namespace Test;

use App\Day1;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    /**
     * @var \App\Day1
     */
    private Day1 $d;

    public function setUp(): void
    {
        $this->d = new Day1();
    }
    /**
     * @dataProvider dataProviderDay1Step2
     * @return       void
     */
    public function testPuzzle1($input, $expected)
    {
        $this->assertEquals(
            $expected,
            $this->d->byLine($input)
        );
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

    public static function dataProviderDay1Step2(): array
    {
        return [
          [
            'two1nine',
            '29',
          ],
          [
            'eightwothree',
            '83',
          ],
          [
            'abcone2threexyz',
            '13',
          ],
          [
            'xtwone3four',
            '24',
          ],[
            '4nineeightseven2',
            '42',
          ],
          [
            'zoneight234',
            '14',
          ],
          [
            '7pqrstsixteen',
            '76',
          ],
        ];
    }



    public function testFindDigits()
    {
        $this->assertSame('219', $this->d->replace('two1nine'));
        $this->assertSame('823', $this->d->replace('eightwothree'));
        $this->assertSame('219', $this->d->replace('two1nine'));
        $this->assertSame('912', $this->d->replace('nine1two'));
    }
}
