<?php

echo "<p>Prime Numbers Are : </p>";
for($i=2; $i<=15; $i++)
{
	$primeNumber = TRUE;
	for($j=2; $j<$i; $j++)
	{
		if($i%$j == 0)
		{
		$primeNumber = FALSE;
		break;
		}
	
	}
	if($primeNumber){
	echo $i." ";
	}
}



?>