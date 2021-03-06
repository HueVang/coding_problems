Question:
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

Find the sum of all the multiples of 3 or 5 below 1000.


Answer:
<?php
function sumOfMultiples($val1, $val2, $range) {
  $sum = 0;
  $currentNumber = 1;

  while ($currentNumber < $range) {
    if ($currentNumber % 3 == 0 || $currentNumber % 5 == 0) {
      $sum += $currentNumber;
    }
    $currentNumber += 1;
  }

  return $sum;
}

echo sumOfMultiples(3, 5, 1000);
