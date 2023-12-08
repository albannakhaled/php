<!DOCTYPE html>
<html>
<body>
<?php
// Test if the file was sent successfully and  if there is no error
if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == 0)
{
	//collect the name of the file
	$target_file = $_FILES["fileToUpload"]["name"];
	echo $target_file."<br>";
	//specify the type of the file
	$target_type = $_FILES["fileToUpload"]["type"];
	echo $target_type."<br>";
	//collect the extension of the file
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	echo $imageFileType."<br>";
// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	$check = $_FILES["fileToUpload"]["tmp_name"];
	echo $check."<br>";
	echo basename($target_file)."<br>";
//	move_uploaded_file(string $from, string $to): bool function to move file to a new location 
	if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],  'files/'.basename($target_file))){
	echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
  echo "<br><br><br>";
  $img = count($_FILES["img"]["name"]);
  echo $img."<br>" ;
 for($i=0; $i<$img; $i++){
	echo $_FILES["img"]["name"][$i]."<br>";
	echo $_FILES["img"]["type"][$i]."<br>";
	echo $_FILES["img"]["size"][$i]."<br>";
  }
	  
  
  }
}




?>
</body>
</html>