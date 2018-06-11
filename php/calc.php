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
echo $v;




if(empty($_GET["val1"])          || empty($_GET["val2"])  )
{
echo "empty values";

}

else{
	
	if($ch==1){

$a=$_GET ["val1"];
$b=$_GET["val2"];
$c=$a+$b;

echo $c;
$c=$a-$b;
echo $c;
	}
if($ch==2){
	$a=$_GET ["val1"];
$b=$_GET["val2"];
$c=$a+$b;
	$c=$a-$b;
$c=$a*$b;
echo $c;
if($b==0) echo "nulou sa nedelí";
else {
	
 $c=$a/$b;
 echo $c;
	
}
}
}


?>

</body>

</html>