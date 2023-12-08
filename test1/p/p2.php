<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1><?php
            // echo $_GET['fname'];
            if(isset($_POST['fname'])&&isset($_GET['submit'])&& !empty($_POST['fname'])){
                echo $_POST['fname'];
            }else{
                echo "no first name entered";
            }
        ?></h1>
         <h1><?php
            // echo $_GET['lname'];
            if(isset($_POST['lname'])&&isset($_GET['submit'])&& !empty($_POST['lname'])){
                echo $_POST['lname'];
            }else{
                echo "no last name entered";
            }
        ?></h1>
    </div>
    <div>
        <h1>collect data from the url from p1</h1>
        <br>
        <h2>
            <?php
                if(isset($_GET['language'])&&isset($_GET['code'])){
                    echo 'name of language = '.$_GET['language'].'<br>'.'code of language = '.$_GET['code'] ;
                }else{
                    echo "link not clicked";
                }
            ?>
        </h2>
    </div>
</body>
</html>