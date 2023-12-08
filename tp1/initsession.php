<?php
    include_once('userC.php');
    session_start();

    if(!isset($_SESSION['list_user'])){
        $_SESSION['list_user'] = new ListUser();
    }
    $userl = $_SESSION['list_user'];
?>