<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    $fib = [0,1];
    
    for ($i = 2; $i < 15; $i++){
        $fib[] = $fib[$i-1] + $fib[$i-2];
    }

    for ($i = 0; $i < count($fib); $i++){
        echo $fib[$i] . " ";
    }

    ?>
</body>
</html>