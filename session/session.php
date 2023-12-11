<?php
    session_start(); //start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $_SESSION['name'] = 'khaled';
        if(isset($_SESSION['page count'])){
            $_SESSION['page_count']=+1; 
        }else{
            $_SESSION['page_count']= 1 ;
        }
        echo $_SESSION['name']. 'you have visited this page '. $_SESSION['page_count'],' time(s)';
    ?>
</body>
</html>