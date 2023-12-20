<?php
    include_once ('initSession.php');
    $jour = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
    if(isset($_GET['nameCity'])){
        echo "<h1>Infection in ".$_GET['nameCity']."</h1>"; 
        echo "<table border ='1'>";
        for($i=0 ; $i<2;$i++){
            echo "<tr>";
            if($i == 0){
            for($j=0;$j<7;$j++){
                echo "<td>".$jour[$j]."</td>";
            }}else{
                $daysInfact = $cityCorona->getCoronaByCity($_GET['nameCity']);
                for($k=0;$k<7;$k++){
                    echo "<td>".$daysInfact[$k]."</td>";
                }
            }
            echo "<tr>";
        }   
        echo "</table>";
    }
    
?>