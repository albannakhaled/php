<?php
include_once ('metier.php');
session_start();

if (!isset($_SESSION['coronaCity']))
    $_SESSION['coronaCity'] = new CityCorona();
$cityCorona = $_SESSION['coronaCity'];
?>