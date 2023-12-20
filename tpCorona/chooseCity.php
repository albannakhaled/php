<?php
include_once ('initSession.php');

echo "<h1>Choose a city</h1>";
foreach ($cityCorona->listCity as $i => $city) {
            echo  '<a href="showCoronaByCity.php?nameCity=' . $city->name . '">' . $city->name . '</a> <br>';
        }
?>