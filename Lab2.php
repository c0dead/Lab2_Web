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
$number_int = 9;
echo "\n$number_int";
echo "\n";

$number_float = 9.8;
echo $number_float;

echo "\n".($number_int + 3);

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
$my_num = 15;
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
$a = 6;
$b = 7;
echo "\n".abs($a - $b);
echo "\n";
$my_array = array(1, 2, -1, -2, 3, -3);
$my_new_array = array();
for ($i = 0; $i < count($my_array); $i++) {
    $my_new_array[$i] = abs($my_array[$i]);
}
print_r($my_new_array);
echo "\n";
$number = 8;
$number_divisors = array();
for ($i = 1; $i <= $number; $i++) {
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
echo "\n";

/* Ex. 15 */
function printStringReturnNumber($name, $age) {
    echo $name;
    return $age;
}

$my_num = printStringReturnNumber('Emma', 23);
echo "\n".$my_num;

/* Ex. 16 */
echo "\n\n";
function increaseEnthusiasm($text) {
    return $text.'!';
}
echo increaseEnthusiasm('ok');
echo "\n";
function repeatThreeTimes($text) {
    return $text.$text.$text;
}
echo repeatThreeTimes('hello');
echo "\n";
echo increaseEnthusiasm(repeatThreeTimes('hello'));
echo "\n";
function cut($text, $chars_count = 10) {
    return substr($text, 0, $chars_count);
}
echo cut('Hello, friend!', 6);
echo "\n\n";

$my_array2 = array(4, 5, 1, 8, 6, 7);
function printArrayUsingRecursionNoLoop($array, $index, $size) {
    if ($index >= $size)
        return;
    echo $array[$index]."\n";
    printArrayUsingRecursionNoLoop($array, $index + 1, $size);
}
printArrayUsingRecursionNoLoop($my_array2, 0, count($my_array2));
echo "\n";

$number = 38;
function sumDigitsUnlessSumIsLess10($n) {
    $array = str_split($n);
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) {
        $sum += $array[$i];
    }
    if ($sum <= 9)
        echo $sum;
    else
        sumDigitsUnlessSumIsLess10($sum);
}
sumDigitsUnlessSumIsLess10($number);
echo "\n\n";

/* Ex. 17 */
function arrayFill($symbol, $size)
{
    $array = array();
    for ($i = 0; $i < $size; $i++) {
        $array[$i] = $symbol;
    }
    return $array;
}
$x_array = arrayFill('x', 5);
print_r($x_array);
echo "\n";

$array_2D = array([[1, 2, 3], [4, 5], [6]]);
$sum = 0;
for ($row = 0; $row < sizeof($array_2D); $row++)
    for ($subarr = 0; $subarr < sizeof($array_2D[$row]); $subarr++) // iterating subarrays
        for ($i = 0; $i < sizeof($array_2D[$row][$subarr]); $i++)
            $sum += $array_2D[$row][$subarr][$i];
echo $sum;
echo "\n";

$my_array_2D = array();
for ($subarr = 0; $subarr < 3; $subarr++) // iterating subarrays
    for ($i = 0; $i < 3; $i++) {
        if ($subarr == 0)
            $my_array_2D[$subarr][$i] = $subarr + $i + 1;
        if ($subarr == 1)
            $my_array_2D[$subarr][$i] = $subarr + $i + 3;
        if ($subarr == 2)
            $my_array_2D[$subarr][$i] = $subarr + $i + 5;
    }
print_r($my_array_2D);
echo "\n";

$my_array3 = array(2, 5, 3, 9);
$result = $my_array3[0]*$my_array3[1] + $my_array3[2]*$my_array3[3];
echo $result;
echo "\n\n";

$user = array(
    'name' => 'Pavel',
    'surname' => 'Sokolov',
    'patronymic' => "Nikolaevich",
);
echo $user['name']." ".$user['surname']." ".$user['patronymic'];
echo "\n\n";

$date = array(
    'year' => 2022,
    'month' => 'October',
    'day' => 14,
);
echo $date['year']."-".$date['month']."-".$date['day'];
echo "\n\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr)."\n";
echo $arr[sizeof($arr) - 1]."\n";
echo $arr[sizeof($arr) - 2]."\n";

/* Ex. 18 */
echo "\n";
function isMoreThan10($a, $b) {
    if ($a + $b > 10)
        return "true";
    else
        return "false";
}
echo isMoreThan10(2, 7);
echo "\n";

function isEqual($a, $b) {
    if ($a == $b)
        return "true";
    else
        return "false";
}
echo isEqual(2, 2);
echo "\n";

$test = 0;
echo $test == 0 ? 'верно' : '';
echo "\n\n";

$age = 23;
function sumDigits($n) {
    $array = str_split($n);
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) {
        $sum += $array[$i];
    }
    return $sum;
}
if ($age < 10 || $age > 99)
    echo "the age is either less than 10 or more than 99\n";
if ($age >= 10 && $age <= 99)
    echo sumDigits($age)."\n";
if (sumDigits($age) <= 9)
    echo "сумма цифр однозначна\n";
else if (sumDigits($age) > 9)
    echo "сумма цифр двузначна\n";
echo "\n";

$arr = array(1, 5, 7);
if (count($arr) == 3)
    echo array_sum($arr);
echo "\n";

/* Ex. 19 */
echo "\n";
function pyramid() {
    for ($i = 1; $i <= 20; $i++)
        echo str_repeat('x', $i)."\n";
}
pyramid();
echo "\n";