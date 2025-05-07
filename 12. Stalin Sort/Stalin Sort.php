<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nums">
    </form>

    <?php
    if (isset($_POST["nums"])){
        $nums = [];
        $lastComma = 0;

        $temp = "";

        for ($i = 0; $i <= strlen($_POST["nums"]); $i++){
            if ($i == strlen($_POST["nums"])){
                for ($j = $lastComma; $j < $i; $j++){
                    $temp = $temp . $_POST["nums"][$j];
                }

                $nums[] = $temp;
                $temp = "";
                $lastComma = $i+1;
            }
            else if ($_POST["nums"][$i] == ","){
                for ($j = $lastComma; $j < $i; $j++){
                    $temp = $temp . $_POST["nums"][$j];
                }

                $nums[] = $temp;
                $temp = "";
                $lastComma = $i+1;
            }
        }

        $sortedArr = [];

        for ($i = 0; $i < count($nums)-1; $i++){
            if ($nums[$i] < $nums[$i+1]){
                $sortedArr[] = $nums[$i];
            }
        }

        if ($nums[count($nums)-1] > $nums[count($nums)-2]){
            $sortedArr[] = $nums[count($nums)-1];
        }

        for ($i = 0; $i < count($sortedArr); $i++){
            echo $sortedArr[$i] . " ";
        }
    }

    ?>
</body>
</html>