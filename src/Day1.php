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
        $input = $this->replace($input);
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

    public function replace($input): string
    {
        $digits_large = [
          'one' => 'oonee',
          'two' => 'twoo',
          'three' => 'tthree',
          'four' => 'four',
          'five' => 'fivee',
          'six' => 'six',
          'seven' => 'seven',
          'eight' => 'eeightt',
          'nine' => 'nninee',
        ];
        $digits = [
          'one' => 1,
          'two' => 2,
          'three' => 3,
          'four' => 4,
          'five' => 5,
          'six' => 6,
          'seven' => 7,
          'eight' => 8,
          'nine' => 9,
        ];

        // eightwo => eight two
        foreach ($digits_large as $key => $digit) {
            $input = str_replace($key, $digit, $input);
        }
        var_dump($input);

        $patterns = array();
        $replacements = array();
        foreach ($digits as $key => $digit) {
            $patterns[] = '/' . $key . '/';
            $replacements[] = (string) $digit;
        }
        ksort($patterns);
        ksort($replacements);

//        var_dump($patterns);
//        var_dump($replacements);



        return preg_replace($patterns, $replacements, $input);

        return $input;
    }
}
