<?php
//sum of 10 natural numbers 
$fact = 1; 
for($i =1; $i<=10; $i++)
{
$fact = $fact * $i;
if($i !== 10){
echo "$i +";
}
else{
echo "$i = ";
}

}
echo $fact;



?>