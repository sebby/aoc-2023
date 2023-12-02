<?php

declare(strict_types=1);

namespace Test;

use App\Main;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    /**
     * @dataProvider dataProviderPuzzle1
     * @return       void
     */
    public function testPuzzle1($input, $expected)
    {
        $this->assertEquals($expected, Main::puzzle1($input));
    }


    /**
     * @return array[]
     */
    public static function dataProviderPuzzle1(): array
    {
        return [
            [
                '(())',
                0,
            ],
            [
                '(((',
                3,
            ],
            [
                '))(((((',
                3,
            ],
            [
                '())',
                -1,
            ],
            [
                ')))',
                -3,
            ],
        ];
    }


    /**
     * @dataProvider dataProviderPuzzle2
     * @return       void
     */
    public function testPuzzle2($input, $expected)
    {
        $this->assertEquals($expected, Main::puzzle1($input, -1));
    }


    public static function dataProviderPuzzle2(): array
    {
        return [
            [
                '(',
                1,
            ],
            [
                '))))))))(',
                8,
            ],
            [
                '()())',
                5,
            ],
        ];
    }
}
