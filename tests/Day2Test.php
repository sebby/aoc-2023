<?php

use App\Day2;
use PHPUnit\Framework\TestCase;

class Day2Test extends TestCase
{
    /**
     * @var \App\Day2
     */
    private Day2 $puzzle;

    public static function dataProviderList1()
    {
        return [
          ['3 blue, 4 red; 1 red, 2 green, 6 blue; 2 green', 'possible'],
          ['1 blue, 2 green; 3 green, 4 blue, 1 red; 1 green, 1 blue', 'possible'],
          ['8 green, 6 blue, 20 red; 5 blue, 4 red, 13 green; 5 green, 1 red', 'impossible'],
        ];
    }

    public static function dataProviderList2()
    {
        return [
          ['Game 1: 3 blue, 4 red; 1 red, 2 green, 6 blue; 2 green', '1'],
          ['Game 2: 1 blue, 2 green; 3 green, 4 blue, 1 red; 1 green, 1 blue', '2'],
          ['Game 3: 8 green, 6 blue, 20 red; 5 blue, 4 red, 13 green; 5 green, 1 red', '0' ],
          ['Game 4: 1 green, 3 red, 6 blue; 3 green, 6 red; 3 green, 15 blue, 14 red', '0' ],
          ['Game 5: 6 red, 1 blue, 3 green; 2 blue, 1 red, 2 green', '5'],
          ['Game 10: 6 red, 1 blue, 3 green; 2 blue, 1 red, 2 green', '10'],
          ['Game 85: 1 red, 10 green, 15 blue; 9 green, 1 red; 1 red, 2 green, 12 blue', '0'],
        ];
    }

    /**
     * @dataProvider dataProviderList2
     */
    public function testLine($input, $expected)
    {
        $this->assertSame($expected, $this->puzzle->byLine($input));
    }

    /**
     * @inheritDoc
     */
    protected function setUp(): void
    {
        $this->puzzle = new Day2();
    }
}
