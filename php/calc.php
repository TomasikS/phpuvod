<!DOCTYPE html>
<html>

<head>

</head>


<body>
<h1> text</h1>
<?php 

$a=$_GET ["val1"];
$b=$_GET["val2"];
$v=$_GET["check"];
$ch=$_GET["stav"];
 




if(empty($_GET["val1"]) ||($v!="on")         || empty($_GET["val2"])   )
{
echo "empty values or you dont agree";

}

else{
	
	if($ch==1){

$a=$_GET ["val1"];
$b=$_GET["val2"];
$c=$a+$b;

echo $c;
echo "<br>";


$c=$a-$b;
echo $c;

echo "<br>";


	}
if($ch==2){
	$a=$_GET ["val1"];
$b=$_GET["val2"];
$c=$a+$b;
echo $c;
echo "<br>";
	$c=$a-$b;
	echo $c;
echo "<br>";
$c=$a*$b;
echo $c;
echo "<br>";
echo $c;
if($b==0) echo "nulou sa nedelí";
else {
	
 $c=$a/$b;
 echo $c;
echo "<br>";
	
}
}
}


?>

</body>

</html>