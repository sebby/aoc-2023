<?php

namespace App;

class Main
{
    public function __construct()
    {
        print_r(Utils::readFile('../day01/input.txt'));
        print_r(Utils::contentRaw('../day01/input.txt'));

    }
}
