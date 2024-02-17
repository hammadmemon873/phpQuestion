<?php
//Calculator

echo "<h2> Simple Calculator  </h2>";
$value1 = 23;
$value2 = 45;
echo "first value is $value1 and second value = $value2 <br>";

$operator = "+";
switch  ($operator)
{
case "+":
	echo "sum of these two value is ".$value1 + $value2;
	break;
case "-":
	echo "substraction of these two value is ".$value1 - $value2;
	break;
case "*":
	echo "multiplication of these two value is ".$value1 * $value2;
	break;
case "/":
	echo "division of these two value is ".$value1 / $value2;
	break;

case "%":
	echo "division of these two value is ".$value1 % $value2;
	break;
}
?>