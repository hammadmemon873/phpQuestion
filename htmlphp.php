<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hellow World</h1>
     <h3>add my rupees</h3>
     <?php
     $sum =0;
     for($i=1; $i<=5; $i++){
         $sum = $sum+ $i;
     }
        ?>
        <h2>i got total rupees <?php echo  $sum ?> of <?php echo $i-1 ?> loops  </h2>



</body>
</html>