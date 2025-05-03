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
        $devisors = [1];

        for ($i = 2; $i < ceil(sqrt($_POST["num"])); $i++){
            if ($_POST["num"] % $i == 0){
                $devisors[] = $i;
            }
        }

        for($i = 0; $i < count($devisors); $i++){
            echo $devisors[$i] . " ";
        }
    }

    ?>

</body>
</html>