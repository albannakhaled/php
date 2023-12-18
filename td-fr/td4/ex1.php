<?php
    if(!isset($_COOKIE['counter'])){
        setcookie('counter',1,time()+3600);
    }else{
        $ctr = $_COOKIE['counter'];
        $ctr ++ ;
        setcookie('counter',$ctr,time()+60);
    }
?>
<html>
    <body>
        <h1>welcome you're visit this website <?php echo $ctr; ?></h1>
    </body>
</html>