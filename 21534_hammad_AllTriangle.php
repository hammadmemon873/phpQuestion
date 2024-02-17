<?php
echo "<p>a) Star Triangle Shape </p>";
for($i=1; $i<=5; $i++){
	for($j=1; $j<=$i; $j++){

	echo "*";	
	}
echo "<br>";

}

echo "<p>b) ALPHABETICAL TRIANGLE SHAPE </p>";
for($i=1; $i<=5; $i++){
$char = 'a';

	for($j=1; $j<=$i; $j++){

	echo "$char";
	$char++;
}
echo "<br>";

}

echo "<p>c) Numeric Triangle </p>";
for($i=1; $i<=5; $i++){
for($j=1; $j<=$i; $j++){
echo $j;

}
echo "<br>";
}

echo "<p>d) NUMERIC TRIANGLE SHAPE AND ITS MULTIPLICATION <p>";
for($i=1; $i<=5; $i++)
{
$sum =1;

	for($j=1; $j<=$i; $j++)
	{
	echo $j;
	$sum = $sum * $j;
	}
	for($k=5; $k>=$i; $k--)
	{
	echo "&nbsp";
	}
	echo " = ".$sum;
echo "<br>";

}

?>