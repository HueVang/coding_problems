<!-- Question:

2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?

Answer: -->

<?php

function smallestMultiple($val1, $val2) {
  $min = $val1;
  $max = $val2;
  $divisible = 0;
  $number = $val2;

  while ($divisible < $max) {
    for ($i = $max; $i >= $min; $i--) {
      if ($number % $i == 0) {
        $divisible += 1;
      } else {
        $divisible = 0;
        $number += 1;
      }
    }
  }

  return $number;
};

echo smallestMultiple(1, 20);
