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
        $arr = array_fill(0, $_POST["num"], true);

        $arr[0] = false;
        $arr[1] = false;

        for ($i = 2; $i < ceil(sqrt(count($arr))); $i++){
            for ($n = 2; $n * $i < count($arr); $n++){
                $arr[$n * $i] = false;
            }
        }

        for ($i = 0; $i < count($arr); $i++){
            if ($arr[$i]){
                echo $i . " "; 
            }
        }
    }
    ?>

</body>
</html>