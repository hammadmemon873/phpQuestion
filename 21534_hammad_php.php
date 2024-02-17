<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


$type ="disc";
echo "<ul type =$type >";
if($type == "square"){
    echo "<h3>Even Number</h3>";
    for($i=1; $i<15; $i++){
        if($i%2==0)
        {
            
          echo " <li> $i </li> ";
          
        }
    }

}
else if($type == "disc"){
    echo "<h3>Odd Number</h3>";
    for($i=1; $i<15; $i++){
        if($i%2!==0)
        {
          echo " <li> $i </li>   ";

        }
    }

}
else if($type == "circle"){
    echo "<h3>Square Number</h3>";
    for($i=1; $i<10; $i++)
    {
        $square = $i*$i;
          echo " <li> $square </li> ";

    }

}
else{
    echo "<h2>NOT A VALID TYPE !!<h2>";
}
echo "</ul>";



?>
    
</body>
</html>