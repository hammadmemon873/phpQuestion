<?php
echo "<p> Star pyramid </p>";
for($i=1; $i<=5; $i++)
{
for($space = 5; $space>=$i-1; $space--)
{
	echo "&nbsp&nbsp";
}
for($star = 1; $star<= 2*$i-1; $star++){
	echo "*";
}	
echo "<br>";

}


?>