// Question:
//
// 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
//
// What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
//
// Answer:

function smallestMultiple(val1, val2) {
  var min = val1;
  var max = val2;
  var divisible = 0;
  var number = val2;

  while (divisible < max) {
    for (var i = max; i >= min; i--) {
      if (number % i == 0) {
        divisible += 1;
      } else {
        divisible = 0;
        number += 1;
      }
    }
  }

  return number;
};

smallestMultiple(1, 20);
