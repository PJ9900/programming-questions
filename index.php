<?php

## 1. Print "Hello, World!"

// echo "Hello, World!";

## 2. Print a given number's multiplication table (1 to 10).

// $number = 2;

// for($i = 1;$i <= 10; $i++){
// 	echo $number.' x '.$i.'  =  '.$number * $i.'<br>';
// }

## 3. Check if a number is even or odd.

// $number = 9; 

// echo ($number%2 == 0) ? "even" : "odd";

## 4. Find the largest of three numbers.

// $number = [1313,3464645,657354764];
// $max = PHP_INT_MIN;

// foreach ($number as $e) {
// 	if($max < $e){
// 		$max = $e;
// 	}
// }
// echo $max;

## 5. Check if a number is prime or not. (ex:- 2, 3, 5, 7, 11, 13, 17, 19, 23, 29)

// $number = 29;
// $flag = 0;

// for ($i = 2; $i <= $number / 2; $i++) {
// 	if ($number % $i == 0) {
// 		$flag = 1;
// 		break;
// 	}
// }

// echo ($flag == 0) ? "Prime" : "Not Prime";

## 6. Check how many prime numbers in a given range.

// $start = 1;
// $end = 100;
// $count = 0;

// for ($i = $start; $i <= $end; $i++) {
// 	$flag = 0;
// 	for ($j = 2; $j <= $i / 2; $j++) {
// 		if ($i % $j == 0) {
// 			$flag = 1;
// 			break;
// 		}
// 	}
// 	if ($flag == 0) {
// 		$count++;
// 	}
// }

// echo $count;

## 6. Count the number of vowels in a string.

// $string = "Hello, World!";

// $vowels = ['a', 'e', 'i', 'o', 'u'];	
// $count = 0;

// for ($i = 0; $i < strlen($string); $i++) {
// 	if (in_array(strtolower($string[$i]), $vowels)) {
// 		$count++;
// 	}
// }

// echo $count;

// foreach (str_split($string) as $s) {
// 	if (in_array(strtolower($s), ['a', 'e', 'i', 'o', 'u'])) {
// 		$count++;
// 	}
// }

// echo $count;

## 7. Find the sum of digits of a number.

// $number = 12345;
// $sum = 0;

// while ($number > 0) {
// 	$sum += $number % 10;
// 	$number = (int)($number / 10);
// }

// echo $sum;

## 8. Find the factorial of a number.

// $number = 5;
// $fact = 1;

// for ($i = 1; $i <= $number; $i++) {
// 	$fact *= $i;
// }

// echo $fact;

// $jaldsfja = factorial(5);
// echo $jaldsfja;

// function factorial($number)
// {
// 	if ($number == 0) {
// 		return 1;
// 	}
// 	return $number * factorial($number - 1);
// }

## 9. Check if a string is palindrome or not.

// $string = "madam";
// $reverse = strrev($string);

// echo ($string == $reverse) ? "Palindrome" : "Not Palindrome";

// function checkpalindrome($string)
// {
// 	$check = true;
// 	$length = strlen($string);
// 	for ($i = 0; $i < $length / 2; $i++) {
// 		if ($string[$i] != $string[$length - $i - 1]) {
// 			$check = false;
// 			break;
// 		}
// 	}
// }

## 10. Find the sum of the first n natural numbers.

// $n = 5;
// $sum = 0;

// for ($i = 1; $i <= $n; $i++) {

// 	$sum += $i;
// }

// echo $sum;

// function sum($n)
// {
// 	if ($n == 0) {
// 		return 0;
// 	}
// 	return $n + sum($n - 1);
// }

// echo sum(5);

## 11. Find the sum of the first n even numbers.

// $n = 5;
// $sum = 0;

// for ($i = 1; $i <= $n; $i++) {
// 	$sum += $i * 2;
// }

// echo $sum;

// function sum($n)
// {
// 	if ($n == 0) {
// 		return 0;
// 	}
// 	return $n * 2 + sum($n - 1);
// }

// echo sum(5);

## 12. Find the sum of the first n odd numbers.

// $n = 5;
// $sum = 0;

// for ($i = 1; $i <= $n; $i++) {
// 	$sum += $i * 2 - 1;
// }

// echo $sum;

// function sum($n)
// {
// 	if ($n == 0) {
// 		return 0;
// 	}
// 	return $n * 2 - 1 + sum($n - 1);
// }

// echo sum(5);