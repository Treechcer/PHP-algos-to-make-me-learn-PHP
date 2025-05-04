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

    function smallestElement($array){
        $min = $array[0];
        $index = 0;

        for ($i = 0; $i < count($array); $i++){
            if ($min > $array[$i]){
                $min = $array[$i];
                $index = $i;
            }
        }

        return [$min, $index];
    }

    function constructArr($array, $skipIndex){
        $constructedArr = [];
        for($i = 0; $i < count($array); $i++){
            if ($i == $skipIndex){
                continue;
            }
            $constructedArr[] = $array[$i];
        }

        return $constructedArr;
    }

    if (isset($_POST["sub"])){
        $arr = [];
        for ($i = 1; $i <= 9; $i++){
            $str = "in" . $i;
            $arr[] = $_POST[$str];
        }

        $sortedArr = [];
        $tempArr = $arr;

        for ($n = 0; $n < count($tempArr); $n++){
            $temp = smallestElement($tempArr);
            $sortedArr[] = $temp[0];
            $index = $temp[1];

            $tempArr = constructArr($tempArr, $index);
        }

        for($i = 0; $i < count($sortedArr); $i++){
            echo $sortedArr[$i] . " ";
        }
    
    }

    ?>
</body>
</html>