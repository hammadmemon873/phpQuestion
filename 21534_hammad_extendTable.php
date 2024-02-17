<?php
$limit = 10;
$startfrom =3;
for($i=$startfrom; $i<=$limit ; $i++)
{
	for($j=1; $j<=10; $j++)
	{
  	echo $i ."X". $j . "=" .($i * $j);
	echo "<br/>"; 
	}
    echo "<br>";
	
}


?>