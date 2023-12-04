<?php

declare(strict_types=1);

namespace Test;

use App\Day3;
use PHPUnit\Framework\TestCase;

class Day3Test extends TestCase
{
    /**
     * @dataProvider dataProvider1
     */
    public function testMethod($input, $excepted)
    {
        $d  = new Day3();
        $d->byLine($input);
        $this->assertSame($excepted, $d->findOneSymbol());

        }


    public static function dataProvider1()
    {
        return [
        ['467..114..', ''],
        ['...*.......', '*'],
        ['467..114..', ''],
        ['467..114..', ''],
        ];
    }
}
