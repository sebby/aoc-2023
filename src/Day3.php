<?php

namespace App;

class Day3 implements TemplateDayInterface
{
    public function __construct()
    {
    }

    public function byLine(string $input): string
    {
        // on a 10 lignes par ligne.
        $line = str_split($input);
        $points = [];
        $y = 0;
        foreach ($line as $x => $l) {
            $points[] = new Point($x, $y, $l);
        }
        print_r($points);
        return (string) count_chars($input);
        return '';
    }

    public function step1(string $input): int
    {
        return 0;
    }
}

class Point
{
    public const  IS_POINT = 'IS_POINT';
    public const IS_NUMBER = 'IS_NUMBER';
    public const IS_SYMBOL =  'IS_SYMBOL';
    readonly public string $x;
    readonly public string $y;

    readonly public string $val;
    public string $type;

    public function __construct($x, $y, $val)
    {
        $this->x = $x;
        $this->y = $y;
        $this->val = $val;
        $this->type  = self::IS_SYMBOL;
        if (is_numeric($val)) {
            $this->type = self::IS_NUMBER;
        }
        if ($val == '.') {
            $this->type  = self::IS_POINT;
        }
    }
}
