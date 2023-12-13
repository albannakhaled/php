<?
include_once ('initSession.php');

$jour = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

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
<head>
<title></title>
</html>
<body>
<form action ='corona.php' method='post'>
<table border=1>
<?

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
?>
</table>
<input type='submit' name ='add' value='Add'>
</form>
</body>