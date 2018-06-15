<!DOCTYPE html>
<html>

<head>

</head>


<body>
<h1> History of computing</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "phpcalc";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT vala,valb from history";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {
        echo "a: " . $row["vala"]. "  b: " . $row["valb"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>

</html>