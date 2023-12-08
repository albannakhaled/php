<?php
    if(
        !isset($_GET['email']) 
        || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL) 
        || !isset($_GET['message']) || empty($_GET['message'])
    ){
        echo "please enter your email! ";
    }
?>