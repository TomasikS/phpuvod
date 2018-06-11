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
 




if(empty($_GET["val1"])          || empty($_GET["val2"])  )
{
echo "empty values";

}

else{
	
	if($ch==1){

$a=$_GET ["val1"];
$b=$_GET["val2"];

echo "+";
$c=$a+$b;
echo "<br>";
echo $c;
$c=$a-$b;
echo "-";
echo $c;
	}
if($ch==2){
	$a=$_GET ["val1"];
$b=$_GET["val2"];
$c=$a+$b;
echo "+";
echo "<br>";
echo $c;
echo "<br>";

	$c=$a-$b;
	echo "-";
	echo "<br>";
echo $c;
	
	echo "<br>";
	
$c=$a*$b;
	echo "*";
	echo "<br>";
echo $c;
echo "<br>";

if($b==0) echo "nulou sa nedelí";
else {
	
 $c=$a/$b;
 echo "<br>";
 echo "/";
 echo "<br>";
 echo $c;
 echo "<br>";
	
}
}
}


?>

</body>

</html>