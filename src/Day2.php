<?php

namespace App;

class Day2 implements TemplateDayInterface
{
    public function lyLineOld(string $input): string
    {
        $line = new Line();
        preg_match_all('/\d{1,3} green/', $input, $green);
        preg_match_all('/\d{1,3} red/', $input, $red);
        preg_match_all('/\d{1,3} blue/', $input, $blue);


        $blue = join('_', $blue[0]);
        $green = join('_', $green[0]);
        $red = join('_', $red[0]);

        $digits  = [];
        preg_match_all('/\d{1,3}/', $blue, $digits);
        $line->blue = $line->reduce($digits);

        preg_match_all('/\d{1,3}/', $green, $digits);
        $line->green = $line->reduce($digits);

        preg_match_all('/\d{1,3}/', $red, $digits);
        $line->red = $line->reduce($digits);



        if ($line->red > 12 || $line->blue > 14 || $line->green > 13) {
            return '0';
        }

        $re = '/\d{1,3}/';
        $str = $input;


        preg_match($re, $str, $matches, PREG_OFFSET_CAPTURE, 0);

        return $matches[0][0];
    }

    public function step1(string $input): int
    {
        $lines =  Utils::readFile($input);
        $sum = 0;
        foreach ($lines as $line) {
            print_r([(int) $this->byLine($line), $line]);
            $sum += (int) $this->byLine($line);
        }
        return $sum;
    }

    public function byLine(string $input): string
    {

        // '3 blue, 4 red; 1 red, 2 green, 6 blue; 2 green'
        $line  = new Line($input);
        if ($line->red > 12 || $line->green > 13 || $line->blue > 14) {
            print_r([$input,'---wrong', $line]);
            return '0';
        }
        $re = '/\d{1,3}/';
        $str = $input;

        preg_match($re, $str, $matches, PREG_OFFSET_CAPTURE, 0);
        print_r([$input, '***right', $line]);

        return $matches[0][0];
    }
}


class Line
{
    public int $green = 0;
    public int $blue = 0;
    public int $red = 0 ;

    public function __construct($input)
    {
        $sprites = explode(';', $input);
        foreach ($sprites as $sprite) {
            $explode = explode(',', $sprite);
            foreach ($explode as $item) {
                if (str_contains($item, 'green')) {
                    $this->green += (int) $item;
                }
                if (str_contains($item, 'red')) {
                    $this->red += (int) $item;
                }
                if (str_contains($item, 'blue')) {
                    $this->blue += (int) $item;
                }
            }
        }
    }

    public function reduce($data)
    {

        if (empty($data)) {
            return 0;
        }
        $output = 0;

        foreach ($data[0] as $item) {
            $output += (int) $item;
        };
        return $output;
    }
}
