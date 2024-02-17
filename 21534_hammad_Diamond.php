<?php
$limit = 10;
echo "<p>Star Diamond Shape </p>";
for($i=1; $i<=$limit; $i++)
{
for($spaces =$limit; $spaces >$i; $spaces-- )
{
	echo "&nbsp&nbsp";
}
for($star=1; $star<=2*$i-1; $star++)
{
	echo "*";
}

echo "<br>";

}
for($i=$limit-1; $i>=1; $i--)
{
for($spaces =$limit; $spaces >$i; $spaces-- )
{
	echo "&nbsp&nbsp";
}
for($star=1; $star<=2*$i-1; $star++)
{
	echo "*";
}

echo "<br>";

}




?>