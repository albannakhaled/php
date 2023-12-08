<?php
    $full_name = htmlspecialchars($_POST['full-name']);
    $email = htmlspecialchars($_POST['email']);
    $gender = htmlspecialchars($_POST['gender']);
    if(isset($full_name) && !empty($full_name)){
        echo "full name = "." ".$full_name.'<br>';
    }else{
        echo "error in name field<br>";
    }
    if(isset($email) && !empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "EMAIL = ".' '.$email.'<br>';
    }else{
        echo "error in email<br>";
    }
    if(isset($gender) && !empty($gender)){
        echo "gender = ".' '.$gender.'<br>';
    }else{
        echo "error in gender<br>";
    }

?>