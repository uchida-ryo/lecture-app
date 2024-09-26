<?php

namespace App;

class FizzBuzz
{
    public function convert($n)
    {
        if ($n % 3 == 0 && $n % 5 == 0) {
            return "FizzBuzz";
        } elseif ($n % 3 == 0) {
            return "Fizz";
        } elseif ($n % 5 == 0) {
            return "Buzz";
        } else {
            return (string)$n;
        }
    }
}
