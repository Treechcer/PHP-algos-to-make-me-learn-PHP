<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="num1">
        <input type="text" name="num2">

        <select name="op">
            <option value="+"> + </option>
            <option value="-"> - </option>
            <option value="*"> * </option>
            <option value="/"> / </option>
        </select>

        <input type="submit" value="sub" name="sub">
    </form>


    <?php
    $subCount = 0;
    
    if (isset($_POST["sub"])){
        if ($_POST["op"] == "+"){
            $subCount = $_POST["num1"] + $_POST["num2"];
        }
        else if ($_POST["op"] == "-"){
            $subCount = $_POST["num1"] - $_POST["num2"];
        }
        else if ($_POST["op"] == "*"){
            $subCount = $_POST["num1"] * $_POST["num2"];
        }
        else if ($_POST["op"] == "/"){
            if ($_POST["num2"] != 0){
                $subCount = $_POST["num1"] / $_POST["num2"];
            }
            else{
                $subCount = "can't use 0 as devisor";
            }
        }

        echo $subCount;
    }

    ?>
</body>
</html>