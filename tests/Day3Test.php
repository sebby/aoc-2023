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
        $this->assertSame($excepted, $d->byLine($input));
        $this->fail('sdsdsd');

        }


    public static function dataProvider1()
    {
        return [
        ['467..114..', '6digits'],
        ['...*.......', '1symbols'],
        ['467..114..', '6digits'],
        ['467..114..', '6digits'],
        ];
    }
}
