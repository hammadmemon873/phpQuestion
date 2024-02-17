<?php

echo "<h2> Marksheet </h2>";
echo "NAME :" .($name = "Hammad"). "<br>" ;
echo "MATH : ". ($math =50) ."<br>" ;
echo "ENGLISH :".( $eng=60 )."<br>" ;
echo "PHP : ".($php=70) ."<br>";
echo "DATABASE : ". ($database=65) ."<br>";
$totalMarks =400;
$obtainedMarks = $math + $eng + $php + $database;
$percentage =($obtainedMarks/$totalMarks)*100;

switch($percentage){

case ($percentage >= 80 && $percentage <=100):
    echo "YOU GOT GRADE A ! ";
break;

case ($percentage >= 60 && $percentage <80):
    echo "YOU GOT GRADE B ! ";
break;
case ($percentage >= 50 && $percentage <60):
    
    echo "YOU GOT GRADE C ! ";
break;

case ($percentage >= 40 && $percentage <50):
   
    echo "YOU GOT GRADE D! ";
default :
echo "you are fail!";
}
?>
