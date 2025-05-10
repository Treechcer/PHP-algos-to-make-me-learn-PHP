<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <input type="submit" name="sub">
    </form>

    <?php

    if (isset($_POST["sub"])){
        $save = 1;
        $perfectNums = [];

        for ($o = 1; $o <= 10000; $o++){
            for ($i = 2; $i < $o; $i++){
                if ($o % $i == 0){
                    $save += $i;
                }
            }

            if ($save == $o){
                $perfectNums[] = $o;
                $o = 10 ** strlen((string)$o);
            }
            $save = 1;
        }

        for($i = 0; $i < count($perfectNums); $i++){
            echo $perfectNums[$i] . " ";
        }

    }

    ?>
</body>
</html>