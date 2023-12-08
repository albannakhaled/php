<?php
    include('initsession.php');
    if(isset($_POST['submit'])){
        if(!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['password']) && !empty($_POST['email'])   ){
            $user = new User($_POST['id'],$_POST['name'],$_POST['password'],$_POST['email']);
            $userl->list_user[] = $user ;
        }
    }
?>  