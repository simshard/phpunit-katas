<?php
namespace App;

 /**
  * print numbers from 1 to 100.
  * But for multiples of three print “Fizz” instead of the number
  * and for the multiples of five print “Buzz”.
  * For numbers which are multiples of both three and five print “FizzBuzz
  */

  class FizzBuzz
  {
      public static function convert(int $number)
      {
          $result='';
         
          if ($number%3===0) {
              $result.= 'fizz';
          }
          if ($number%5===0) {
              $result.= 'buzz';
          }
         

          return $result?:$number;
      }
  }
