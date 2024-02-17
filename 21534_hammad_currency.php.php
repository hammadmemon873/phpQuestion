<?php
//currency note 

$cash = 13510;
echo "<h2>Note Convert after value $cash : </h2>";

$fiveThousand = $cash / 5000; 
$cash = $cash %  5000; 
$thousand = $cash / 1000; 
$cash = $cash %  1000; 
$fiveHundred = $cash / 500; 
$cash = $cash %  500; 
$hundred = $cash / 100; 
$cash = $cash %  100; 
$fifty = $cash / 50; 
$cash =$cash% 50;
$twenty = $cash /  20; 
$cash = $cash % 20;
$ten = $cash / 10; 
$cash = $cash % 10 ;
$five = $cash / 5; 
$cash = $cash % 5 ;
$two = $cash / 2; 
$two = $cash % 2 ;
$one = $cash / 1; 
$cash = $cash % 1 ;
echo   "Five thousand:" .(int)$fiveThousand. "<br> Thousand:" .(int)$thousand . "<br> Five Hundred:" .(int)$fiveHundred. "<br>Hundred: " .(int)$hundred. "<br>Fifty:". (int)$fifty ." <br>Twenty " .(int)$twenty. "<br>Ten" .(int)$ten. "<br>Five" .(int)$five. "<br>Two" .(int)$two. "<br>One" .(int)$one ; 














?>