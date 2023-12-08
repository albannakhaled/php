<?php
    if(empty($_POST['full-name'])|| !isset($_POST['full-name'])){
        echo "full name should be enter !";
    }elseif(empty($_POST['email'])|| !isset($_POST['email']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        echo "non valid email !";
    }else{
        echo $_POST['full-name'].'<br>'.$_POST['email'].'<br>'. $_POST['gender'];
    }
?>