<?php
echo "1) ";
for($i=1; $i<=5; $i++){
$square = $i * $i;
echo $square . " ";
}
echo "<br> 2) ";
$series =1;
for($i=2; $i<=7; $i++){
echo $series ." ";

$series = $series + $i;

}
echo "<br> 3) ";
for($i=50; $i>=10; $i= $i-10){
echo $i . " ";

}

echo "<br> 4) ";
$result =6;
for($i=6; $i<=15; $i=$i+2){
echo $result ." ";

$result = $result + $i;


}


?>