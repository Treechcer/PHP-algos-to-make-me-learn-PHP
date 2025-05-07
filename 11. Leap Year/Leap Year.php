<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST">
        <input type="text" name="year">
        <input type="submit" name="sub">
    </form>

    <?php

    if (isset($_POST["sub"]) && isset($_POST["year"])){
        $message = $_POST["year"] . " is not a leap year";

        if(($_POST["year"] % 4 == 0 && $_POST["year"] % 100 != 0) || $_POST["year"] % 400 == 0){
            $message = $_POST["year"] . " is a leap year";
        }

        echo $message;
    }

    ?>
</body>
</html>