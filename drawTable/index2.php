<html>
    <?php
    $data = [
        ["name"=>"khalid","age"=>32,"major"=>"cs"],
        ["name"=>"sami","age"=>22,"major"=>"re"],
        ["name"=>"ali","age"=>21,"major"=>"ws"],
        ["name"=>"hassan","age"=>21,"major"=>"se"]
    ];
    ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>age</th>
            <th>major</th>
        </tr>
        <?php foreach($data as $key=>$value){?>
            <!-- html code -->

            <tr>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['age'] ?></td>
                <td><?php echo $value['major'] ?></td>
            </tr>
            
        <?php } ?>
    </table>
</html>