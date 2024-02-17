

<?php
echo "<h2>Swapping Of Two varaibles </h2>";

$a = 50;
$b = 10;
echo "<h3>value of a = $a and b  =$b  </h3>";
echo "<h3>after swapping ! <h3>";
$a = $a+$b;
$b = $a-$b;
$a = $a-$b;
echo "<h3>value of a = $a and value of b = $b </h3>";


?>