<!DOCTYPE html>
<html>

<head>

</head>


<body>
<h1> Násobilka</h1>
<?php 
 echo "<table border=\"1\" width=\"500\">";
 
 echo "<tr><th></th>";
 
 for($i=0;$i<10;$i++)
 { echo "<th>".$i."</th>";
 
 
 }
 echo "</tr>";
 
 for ($i=0;$i<10;$i++)
{
	echo "<tr><th>".$i."</th>";
	
for ($j=0;$j<10;$j++)


echo "<td>".$i*$j."</td>";




}
echo "</tr>";
echo "</table>";
?>

</body>

</html>