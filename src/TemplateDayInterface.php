<?php

namespace App;

interface TemplateDayInterface
{
    public function byLine(string $input): string;
    public function step1(string $input): int;
}
