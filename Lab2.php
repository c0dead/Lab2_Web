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