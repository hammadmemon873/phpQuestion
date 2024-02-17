<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $input = $_POST['input'];
        echo $input;
        for ($i = 1; $i <= $input; $i++) {
    ?>
            <br>
            <form action="page3.php" method="php">
             <table border=1 cellpadding = "10">
                <tr>
                    <th>
                        <label for="name <?php echo $i ?>">Name <?php echo $i  ?></label>
                        <input type="text" name="name <?php echo $i  ?>" id="name <?php echo $i  ?>">
                    </th>
                </tr>
                <tr>
                    <th>
                        <p>Gender</p>
                        <label for="male <?php echo $i  ?>">male </label>
                        <input type="radio" name="gender <?php echo $i  ?>" id="male <?php echo $i  ?>">
                        <label for="female<?php echo $i  ?>">female</label>
                        <input type="radio" name="gender <?php echo $i  ?>" id="female <?php echo $i  ?>">
                    </th>
                </tr>
                <tr>
                    <th>
                        <p></p>
                        <label for="country <?php echo $i  ?>">Select Your Country </label>
                        <select id="country <?php echo $i  ?>" name = "country <?php echo $i  ?>">
                            <option selected>Select_Country</option>
                            <option value="pakistan">pakistan</option>
                            <option value="india">india</option>
                            <option value="australia">australia</option>
                            <option value="england">england</option>

                        </select>

                    </th>
                </tr>
                <tr>
                    <th>
                       <input type="submit" value= "submit" name = "submit <?php  echo $i ?>">
                    </th>
                </tr>
            </table>
            </form>


    <?php

        }
    }
    ?>
</body>

</html>