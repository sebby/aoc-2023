<?php

namespace App;

class Day3 implements TemplateDayInterface
{
    private array $points;

    private int $y = 0;

    public function __construct()
    {
        $this->points = [];
    }

    public function byLine(string $input): string
    {
        // on a 10 lignes par ligne.
        $line = str_split($input);

        $this->y++;
        foreach ($line as $x => $l) {
            $this->points[] = new Point($x, $this->y, $l);
        }
        return '';
    }

    public function step1(string $input): int
    {
        $lines =  Utils::readFile($input);
        foreach ($lines as $line) {
            $this->byLine($line);
        }
        return 0;
    }
    public function findAllSymbols(): array
    {
        $symbols = [];
        foreach ($this->points as $point) {
            if ($point->type == Point::IS_SYMBOL) {
                $symbols[] = $point;
            }
        }
        return $symbols;
    }
    function getVoisins(Point $pt): array
    {
        print_r($pt);
        return [];
    }
}

class Point
{
    public const  IS_POINT = 'IS_POINT';
    public const IS_NUMBER = 'IS_NUMBER';
    public const IS_SYMBOL =  'IS_SYMBOL';
    public string $x;
    public string $y;

    public string $val;

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
