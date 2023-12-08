<?php
    foreach($_GET as $key=>$value){
        echo $key .'  ' .$value. "<br>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q1.php" method="get">
        <input type="text" name="text-field">
    </form>
</body>
</html>
