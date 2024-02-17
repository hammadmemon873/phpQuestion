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
            for ($loop = 2; $loop <= 6; $loop++) {
            ?>
                <th colspan="10">
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                        $tableNo = $loop;
                        echo   $tableNo . " x" . $i . "=" . $tableNo * $i;
                        echo "<br>";
                    }

                    ?>
                <?php
            }
                ?>
        </tr>
        <tr>
            <?php
            for ($loop = 6; $loop <= 10; $loop++) {
            ?>
                <th colspan="10">
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                        $tableNo = $loop;
                        echo   $tableNo . " x" . $i . "=" . $tableNo * $i;
                        echo "<br>";
                    }

                    ?>
                <?php
            }
                ?>
        </tr>

    </table>

</body>

</html>