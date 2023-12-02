<?php

namespace App;

class Day1 implements TemplateDayInterface
{
    public function step1(string $input): int
    {
        $lines =  Utils::readFile($input);
        $sum = 0;
        foreach ($lines as $line) {
            $sum += (int) $this->byLine($line);
        }
        return $sum;
    }


    public function byLine(string $input): string
    {
        $chars = str_split($input);
        $digits = [];

        foreach ($chars as $char) {
            if (is_numeric($char)) {
                $digits[] = $char;
            }
        }
        if (empty($digits)) {
            return '';
        }
        $first = $digits[0];
        $last = end($digits);
        return (string) $first . (string) $last;
    }


    public function
}
