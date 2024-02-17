<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        
        <tr>
            <?php
            $counter =1;
            $start = 1;
            $end = 20;
            for ($loop = $start; $loop <= $end; $loop++) {
            ?>
                <th colspan="10">
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                        $tableNo = $loop;
                        echo   $tableNo . " x" . $i . "=" . $tableNo * $i;
                        echo "<br>";
                    }
                    ++$counter ;

                    if($counter == 6 || $counter == 11 || $counter == 16 || $counter == 21)
                    {
                        echo "<tr></tr>";
                    }


                    ?>
                </th>
                <?php
            }
                ?>
        </tr>
        
       
    </table>

</body>

</html>