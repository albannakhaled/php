<?php
    include('saveUserInfo.php');
    // if(isset($_POST['connect'])){
    //     if($_POST['Email'] == $userl->list_user)
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label >sign in</label>
        <label >Email</label>
        <input type="text" name="Email"><br>
        <label >Password</label>
        <input type="password" name="Password"><br>
        <input type="submit" name="connect"><br><br><br>
        <p>
            <a href="userF.php">Create account</a>
        </p>
    </form>
</body>
</html>