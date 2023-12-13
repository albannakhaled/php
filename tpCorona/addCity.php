<?php
include_once ("formcity.php");  
include_once ('initSession.php');

$errormessage = "";
if (isset($_POST['submit'])){
	
	if (!empty($_POST['city'])){
		
		$city = new City($_POST['city']);
		$cityCorona->listCity[] = $city;
	}
	else 
		$errormessage = "should be enter a city !";
			
}

if (isset($_POST['back'])) 
{
	header("location:mainPage.php");
}
?> 