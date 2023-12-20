<html>
    <?php
        $data = [
            ["name"=>"khaled","age"=>32,"major"=>"cs"],
            ["name"=>"sami","age"=>22,"major"=>"re"],
            ["name"=>"khaled","age"=>21,"major"=>"ws"],
            ["name"=>"khaled","age"=>21,"major"=>"se"]
        ];
        foreach($data as $key=>$value){?>
            <p>
                hello <?php echo $value['name']?>
                you have <?php echo $value['age']?> years old
                and you're a good <?php echo $value['major']?>
            </p>
        <?php }
    ?>
</html>