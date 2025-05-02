<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="guessNum">
        <input type="submit" name="start">
    </form>

    <?php
    
    $constNum = mt_rand(1,10);

    if (isset($_POST["start"])){
        if ($_POST["guessNum"] == $constNum){
            echo "you have won";
        }
        else {
            echo "you have lost the number was " . $constNum;
        }
    }
    ?>
</body>
</html>