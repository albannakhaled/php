<?php
include_once ('initSession.php');

echo "<table border=1>";
for ($i=0; $i<2; $i++)
{
	echo "<tr>";
		if ($i==0){
			echo "<td> une semaine </td>";
			foreach($cityCorona->listCity as $value)
				echo "<td>".$value->name."</td>";
		}
		else {
			echo "<td> Total </td>";
			foreach($cityCorona->listCity as $i=>$value){
				$res = $cityCorona->getTotalCoronaByCity($i);
				echo "<td>".$res."</td>";
			}
		}
		echo "</tr>";
}
		
echo "</table>";

?>