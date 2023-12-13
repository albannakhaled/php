<?php
include_once ('CityClass.php');
session_start();

if (!isset($_SESSION['coronaCity']))
    $_SESSION['coronaCity'] = new CoronaCity();
$cityCorona = $_SESSION['coronaCity'];
?>