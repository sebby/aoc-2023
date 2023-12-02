<?php

namespace App;

class Main
{
    /**
   @var string
     */
    private string $hello;



    /**
     * @param string $string
     *
     * @return string
     */
    public static function fromString(string $string)
    {
        return $string;
    }//end fromString()


    /**
     * @param string   $input
     * @param int|NULL $search
     *
     * @return int
     */
    public static function puzzle1(
        string $input,
        int $search = null
    ): int {
        $ar  = str_split($input);
        $index = 0;
        foreach ($ar as $key => $item) {
            if ($item === ')') {
                $index--;
            } else if ($item === '(') {
                $index++;
            }

            if ($search !== null && $index <= $search) {
                return $key;
            }
        }

        return $index;
    }//end puzzle1()
}//end class
