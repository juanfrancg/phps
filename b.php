<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

print_r($_REQUEST);

$newnom=$_REQUEST["newnom"];
$oldnom=$_REQUEST["oldnom"];
$newnota=$_REQUEST["newnota"];
$oldnota=$_REQUEST["oldnota"];
$newedat=$_REQUEST["newedat"];
$oldedat=$_REQUEST["oldedat"];

if($_REQUEST["newnom"]){

$servername = "localhost";
$username = "david";
$password = "1234";
$dbname = "federico";

// Create connection withc dbname
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: <br>" . $conn->connect_error);
}
echo "Connected successfully <br>";

$sql = "UPDATE registro SET nom='$newnom' WHERE nom='$oldnom'";

if ($conn->query($sql) === TRUE) {
  echo "Registre modificat correctament";
} else {
  echo "Error modificant registre: " . $conn->error;
}

$conn->close();
}


if($_REQUEST["newnota"]){
$servername = "localhost";
$username = "david";
$password = "1234";
$dbname = "federico";

// Create connection withc dbname
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: <br>" . $conn->connect_error);
}
echo "Connected successfully <br>";

$sql = "UPDATE registro SET nota='$newnota' WHERE nota='$oldnota'";

if ($conn->query($sql) === TRUE) {
  echo "Registre modificat correctament";
} else {
  echo "Error modificant registre: " . $conn->error;
}

$conn->close();
}

if($_REQUEST["newedat"]){

$servername = "localhost";
$username = "david";
$password = "1234";
$dbname = "federico";

// Create connection withc dbname
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: <br>" . $conn->connect_error);
}
echo "Connected successfully <br>";

$sql = "UPDATE registro SET edat='$newedat' WHERE edat='$oldedat'";

if ($conn->query($sql) === TRUE) {
  echo "Registre modificat correctament";
} else {
  echo "Error modificant registre: " . $conn->error;
}

$conn->close();

}

?>


</body>
</html>