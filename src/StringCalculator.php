<?php

namespace App;

use Exception;

class StringCalculator
{
     

    public function add(string $numbers)
    {
        $delimiter=",|\n";
        if (!$numbers) {
            return 0;
        }
        if (preg_match("/\/\/(.) \n/", $numbers, $matches)) {
            $delimiter=$matches[1];
            $numbers=str_replace($matches[0], '', $numbers);
        }
        $numbers=preg_split("/$delimiter/", $numbers);
        foreach ($numbers as $number) {
            if ($number < 0) {
                throw new Exception('Negative numbers are disallowed.');
            }
        }
        $numbers=array_filter(
            $numbers,
            function ($number) {
                return  $number <1000;
            }
        );
        return array_sum($numbers);
    }

     

}
