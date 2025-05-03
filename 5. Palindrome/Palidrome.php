<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <input type="text" name="text">
    </form>

    <?php
    if (isset($_POST["text"])){
        $temp = "";

        for ($i = strlen($_POST["text"]) - 1; $i >= 0; $i--){
            $temp = $temp . $_POST["text"][$i];
        }

        if ($temp == $_POST["text"]){
            echo "this " . $_POST["text"] . " is a palindrome";
        }
        else{
            echo "this " . $_POST["text"] . " is not a palindrome";
        }
    }

    ?>
</body>
</html>