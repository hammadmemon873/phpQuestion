<?php
$a = 0;
$b = 1; 
$i =1;
$c =0;
echo "<h3> Fibonacci Series </h3>";
while($i<=10)
{
echo $c. " ";
 $c=$a+$b;
 $b=$a;
 $a=$c;
$i++;
}




?>