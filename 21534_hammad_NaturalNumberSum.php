<?php
//sum of 10 natural numbers 
$sum = 0; 
for($i =1; $i<=10; $i++)
{
$sum = $sum + $i;
if($i !== 10){
echo "$i +";
}
else{
echo "$i = ";
}

}
echo $sum;



?>