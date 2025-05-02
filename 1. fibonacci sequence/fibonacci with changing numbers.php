<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post">
        <input type="text" name="number">
        <input type="submit" value="submit" name="t">
    </form>

    <?php
    if (isset($_POST["t"])){
        $fib = [0,1];
    
        if ($_POST["number"] <= 2){
            echo "the number must be at least 2 bro";
        }
        else{
            for ($i = 2; $i < $_POST["number"]; $i++){
                $fib[] = $fib[$i-1] + $fib[$i-2];
            }
        
            for ($i = 0; $i < count($fib); $i++){
                echo $fib[$i] . " ";
            }
        }
    }
    ?>
</body>
</html>