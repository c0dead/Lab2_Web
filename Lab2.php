<?php
/* Ex. 1 */
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " and french fries";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

/* Ex. 2 */
$number_int = 8;
echo "\n$number_int";
echo "\n";

$number_float = 8.8;
echo $number_float;

echo "\n".($number_int + 4);

$last_month = 1187.23;
$this_month = 1089.98;

echo "\n".($last_month - $this_month);

/* Ex. 11 */
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;

echo "\n".$days_per_language;

/* Ex. 12 */
echo "\n".(8**2);

/* Ex. 13 */
$my_num = 10;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;

echo "\n$answer";

/* Ex. 14 */
$a = 10;
$b = 3;

echo "\n$a % $b = ".($a % $b);

if ($a % $b == 0)
    echo "\nДелится: $a % $b = ".($a % $b);
else
    echo "\nДелится с остатком: $a % $b = ".($a % $b);

$st = pow(2, 10);
echo "\n".$st;
$root = sqrt(245);
echo "\n".$root;
$array = array(4, 2, 5, 19, 13, 0, 10);
$sum = 0;
foreach ($array as &$value) {
    $sum += ($value**2);
}
echo "\n".$sum;
$root379 = sqrt(379);
echo "\n".round($root379, 0);
echo "\n".round($root379, 1);
echo "\n".round($root379, 2);
$root587 = sqrt(587);
echo "\n".ceil($root587);
echo "\n".floor($root587);
echo "\n";
$associative_array = array('floor'=>floor($root587) , 'ceil'=>ceil($root587));
print_r($associative_array);
echo "\n".max(array(4, -2, 5, 19, -130, 0, 10));
echo "\n".min(array(4, -2, 5, 19, -130, 0, 10));
echo "\n".rand(1, 100);
echo "\n";
$rand_array = array();
for ($i = 0; $i < 10; $i++) {
    $rand_array[$i] = rand();
}
print_r($rand_array);
$rand_array2 = array();
$index = 0;
while ($index < 10) {
    $rand_array2[$index] = rand();
    $index++;
}
print_r($rand_array2);
echo "\n".abs($a - $b);
$a = 5;
$b = 8;
echo "\n".abs($a - $b);
echo "\n";
$my_array = array(1, 2, -1, -2, 3, -3);
$my_new_array = array();
for ($i = 0; $i < count($my_array); $i++) {
    $my_new_array[$i] = abs($my_array[$i]);
}
print_r($my_new_array);
echo "\n";
$number = 6;
$number_divisors = array();
for ($i = 1; $i <= 6; $i++) {
    if ($number % $i == 0)
    $number_divisors[$i] = $i;
}
print_r($number_divisors);
echo "\n";
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$count = 0;
$numbers_sum = 0;
for ($i = 0; $i < count($numbers); $i++) {
    $numbers_sum += $numbers[$i];
    $count++;
    if ($numbers_sum > 10) {
        echo $count;
        break;
    }
}