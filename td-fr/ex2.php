<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for($i=0 ; $i<10 ; $i++){?>
            <table border="1">
                <tr>
                    <th><?php
                        if($i%2==0){
                            echo "i = ".$i;}
                            else{
                                echo "I = ".$i;
                            }
                    ?></th>
                </tr>
            </table>
        <?php
    }
    ?>
    
</body>
</html>