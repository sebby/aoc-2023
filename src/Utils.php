<?php

namespace App;

use Symfony\Component\String\Exception\InvalidArgumentException;

class Utils
{
    public static function readFile(string $input): array
    {
        $lines = [];
        if (file_exists($input)) {
            $file = fopen($input, 'r');
            while (!feof($file)) {
                $line    = fgets($file);
                $lines[] = trim(preg_replace('/\s\s+/', ' ', $line));
            }
            fclose($file);
            return $lines;
        } else {
            throw new InvalidArgumentException('Pas de fichier');
        }
    }
    public static function contentRaw(string $input): string
    {
        return join('', self::readFile($input));
    }
}
