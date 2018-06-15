<!DOCTYPE html>
<html>

<head>

</head>


<body>
<h1> Computing</h1>
<?php 

$a=$_GET ["val1"];
$b=$_GET["val2"];
$v=$_GET["check"];
$ch=$_GET["stav"];
 
if ($v=="on") {


if(empty($_GET["val1"])        || empty($_GET["val2"])   )
{
echo "empty values";

}

else{
	
	if($ch==1){

$a=$_GET ["val1"];
$b=$_GET["val2"];
$c=$a+$b;
echo $a. "+".$b. "=";
echo $c;
echo "<br>";
echo "<br>";
$c=$a-$b;
echo $a. "-".$b. "=";
echo $c;
echo "<br>";
echo "<br>";
	}
if($ch==2){
	$a=$_GET ["val1"];
$b=$_GET["val2"];
$c=$a+$b;
echo $a. "+".$b. "=";
echo $c;
echo "<br>";
echo "<br>";

	$c=$a-$b;
echo $a. "-".$b. "=";
echo $c;
echo "<br>";
echo "<br>";

$c=$a*$b;
echo $a. "*".$b. "=";
echo $c;
echo "<br>";
echo "<br>";



if($b==0) echo "nulou sa nedelí";
else {
	
 $c=$a/$b;
 echo $a. "/".$b. "=";
 
 echo $c;
	echo "<br>";
echo "<br>";
}
}
}
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "phpcalc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO history (vala, valb) 
                VALUES ($a, $b)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

else{echo "You dont agree with GDPR";}
?>

</body>

</html>