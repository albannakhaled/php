<?php
    include('initsession.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php">
        <label >Enter you're ID</label>
        <input type="text" name="id">
        <label >Enter you're name</label>
        <input type="text" name="name">
        <label >password</label>
        <input type="text" name="password">
        <label >email</label>
        <input type="text" name="email">
        <input type="submit" name="submit">
    </form>
</body>
</html>