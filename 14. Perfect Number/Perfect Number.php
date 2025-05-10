<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <input type="text" name="num">
    </form>

    <?php

    if (isset($_POST["num"])){
        $save = 1;

        for ($i = 2; $i < $_POST["num"]; $i++){
            if ($_POST["num"] % $i == 0){
                $save += $i;
            }
        }

        if ($save == $_POST["num"]){
            echo $_POST["num"] . " is perfect number";
        }
        else{
            echo $_POST["num"] . " isn't perfet number";
        }
    }

    ?>
</body>
</html>