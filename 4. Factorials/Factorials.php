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
        <input type="submit" name="sub">
    </form> 

    <?php
    if (isset($_POST["sub"])){
        $num = 1;

        for ($i = 2; $i <= $_POST["num"]; $i++){
            $num = $num * $i;
        }
        
        echo $num;
    }

    ?>
</body>
</html>