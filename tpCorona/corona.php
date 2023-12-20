<?php
include_once ('initSession.php');

$jour = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");

if( isset($_POST['add'] ))
{	
	foreach($_POST['check_list'] as $key=>$check){
		foreach ($check as $key1=>$val1){
			if (!empty($val1)){
				$cityCorona->coronaNB[$key][$key1]=$val1;
			}
			else {
				$cityCorona->coronaNB[$key][$key1]=0;
			}
		}
	}
}

?>
<html>

<body>
<form action ='corona.php' method='post'>
<table border=1>
<?php

for($i=-1; $i<count($cityCorona->listCity); $i++)
{
	echo "<tr>";
	for ($j=-1; $j<7; $j++)
	{
		if ($i==-1 && $j==-1)
			echo "<td>Infections NB</td>";
		else if ($i==-1 && $j!=-1)
			echo "<td>".$jour[$j]."</td>";
		else if($i!=-1 && $j == -1)
			echo "<td>".$cityCorona->listCity[$i]->name."</td>";
		else
		{
			echo "<td> <input type ='text'  name='check_list[$i][$j]'></td>";
		}
	}	
		echo "</tr>";
	
}
if (isset($_POST['backk'])) 
{
	header("location:menu.php ");
}
?>
</table>
<input type='submit' name ='add' value='Add'>
<input type='submit' name ='backk' value='back'>

</form>
</body>
</html>