<?php

require_once(__DIR__ . '/../vendor/autoload.php');

$file = '../day01/input_step2.txt';

$input = \App\Utils::contentRaw($file);
$tot = new \App\Day1();
print_r($tot->step1($file));
