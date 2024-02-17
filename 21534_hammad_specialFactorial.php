<?php
$limit =4;
$sum =$limit;
echo "<h3> Factorial Of Number $limit is </h3>";
for($i=$limit; $i>1; $i--)
{	
		$set = $sum;

	for($j=1; $j<$i; $j++)	
	{
	
	
	if($j== ($i-1))
	{
	continue;	
		}
	$sum = $sum + $set;

	}

}
	for($k= $limit; $k>=1; $k--)
	{
	echo $k;
	if($k!==1)
	{
	echo " X ";
	}
	else{
	echo " = ". $sum;
	}
	
	}

?>