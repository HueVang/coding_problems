Question:

A palindromic number reads the same both ways.
The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.

Find the largest palindrome made from the product of two 3-digit numbers.

Answer:
<?php
function largestPalindrome() {
  $palindrome = 0;

  for ($i = 100; $i <= 999; $i++) {
    for ($j = 100; $j <= 999; $j++) {
      $product = $i * $j;
      if ($product > $palindrome && $product == strrev($product)) {
        $palindrome = $product;
      }
    }
  }

  return $palindrome;
}

echo largestPalindrome();
