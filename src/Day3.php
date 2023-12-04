<?php

namespace App;

class Day3 implements TemplateDayInterface
{
    private array $points;

    private int $y = 0;

    public function __construct()
    {
    }

    public function byLine(string $input): string
    {
        // on a 10 lignes par ligne.
        $line = str_split($input);
        $this->points = [];
        $this->y++;
        foreach ($line as $x => $l) {
            $this->points[] = new Point($x, $this->y, $l);
        }
        return '';
    }

    public function step1(string $input): int
    {
        return 0;
    }
    public function findOneSymbol():string {
        // @todo chercher les synbols dans la ligne
        // @todo et avoir leur position.
        return $this->points[0]->val;

        return new Point(0,0,1);
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
