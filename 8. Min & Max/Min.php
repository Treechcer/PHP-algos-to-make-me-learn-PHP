<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="in1">
        <input type="text" name="in2">
        <input type="text" name="in3">
        <input type="text" name="in4">
        <input type="text" name="in5">
        <input type="text" name="in6">
        <input type="text" name="in7">
        <input type="text" name="in8">
        <input type="text" name="in9">
        <input type="submit" name="sub"> 
    </form>

    <?php

    if (isset($_POST["sub"])){
        $arr = [];
        for ($i = 1; $i <= 9; $i++){
            $str = "in" . $i;
            $arr[] = $_POST[$str];
        }

        $min = $arr[0];

        for ($i = 0; $i < count($arr); $i++){
            if ($min > $arr[$i]){
                $min = $arr[$i];
            }
        }

        echo $min;

    }

    ?>
</body>
</html>