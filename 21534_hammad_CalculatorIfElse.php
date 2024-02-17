<?php
$number1 = 5;
$number2 = 10;

echo "Number :  $number1  <br> Number two: $number2 <br>";
$operator = "+";
if ($operator == "+") {
    $result = $number1 + $number2;
    echo $result;
} else if ($operator == "-") {
    $result = $number1 - $number2;
    echo $result;
} else if ($operator == "*") {
    $result = $number1 * $number2;
    echo $result;
} else if ($operator == "/") {
    $result = $number1 / $number2;
    echo $result;
}
