<?php

require_once(__DIR__ . '/../vendor/autoload.php');

$file = '../day03/input.txt';

$input = \App\Utils::contentRaw($file);
$main  = new \App\Day3();
$main->step1($file);
$symbols = $main->findAllSymbols();

$main->getVoisins($symbols[0]);
