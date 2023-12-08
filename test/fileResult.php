<?php

    if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == 0){


        // collect name of the file

        $file_name = $_FILES['fileToUpload']['name'];
        echo "name of file = " . $file_name . "<br>"; 

        // collect type of the file

        $file_type = $_FILES['fileToUpload']['type'];

        echo "type of file = ". $file_type . "<br>";

        //collect the extension of the file
	        $imageFileType = pathinfo($file_name,PATHINFO_EXTENSION);
	        echo $imageFileType."<br>";

        // show the path of the file

            $file_path = $_FILES['fileToUpload']['tmp_name'];
            echo "path of the file = " . $file_path . "<br>";

    }else{
        echo "something error ! ";
    }

?>