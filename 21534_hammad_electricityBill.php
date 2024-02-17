<?php
//ELECTRICITY BILL
echo "<h3> Your Electricity Bill <h3>";
$unit = 203;
echo "You Used $unit  Of Electricity Lets Calculate Bill ! <br>";
if($unit >=1 && $unit <=100){
 $bill = unit * 5;
echo $bill;

}
else if ($unit >=101 && $unit <= 200 ){
$bill = $unit * 10;
echo "Electricity Bill is : ".$bill;

}
else if ($unit >=201 && $unit <= 300 ){
$bill = $unit * 15;
echo "Electricity Bill is : ".$bill;

}
else if ($unit >=301 ){
$bill = $unit * 25;
echo "Electricity Bill is : ".$bill;

}

?>