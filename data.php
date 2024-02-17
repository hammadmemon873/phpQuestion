<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Check your result</h2>
    <?php
    if(isset($_POST['submit']))
    {
        $count=count($_POST)-1;
       
        echo "<br>";
    }
    if($count > 3 &&  isset($_POST['agree']))
    {
        echo "<h3> You are Selected ! </h3>";
    }
    else if($count >=3 && !isset($_POST['agree']) )
    {
        echo "<h3> Fail You are not agreed to our conditions </h3>";
    }
    else if($count <3)
    {
        echo "<h3> Failed you select less than 3 checkboxes </h3>";
    }

?>
</body>
</html>