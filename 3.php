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

    print("<h1>Eliminar proveïdor</h1>");

    print("<form action='index.php' method='post'>");

$servername = "localhost";
$username = "juan";
$password = "juan";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS mercadona";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();

$servername = "localhost";
$username = "juan";
$password = "juan";
$dbname = "mercadona";

// Create connection withc dbname
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";


// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS proveidors(
    cif VARCHAR(255) PRIMARY KEY,
    nom VARCHAR(255),
    cognom1 VARCHAR(255),
    cognom2 VARCHAR(255),
    adreca VARCHAR(255),
    telf VARCHAR(255)
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error creant taula " . $conn->error;
    }
    
    $conn->close();

$servername = "localhost";
$username = "juan";
$password = "juan";
$dbname = "mercadona";

// Create connection withc dbname
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";


// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS productes(
    product VARCHAR(255) PRIMARY KEY,
    marca VARCHAR(255),
    producte VARCHAR(255),
    descripcio VARCHAR(255),
    preu VARCHAR(255),
    proveidor VARCHAR(255),
    FOREIGN KEY (proveidor) REFERENCES proveidors(cif)
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error creant taula " . $conn->error;
    }
    
    $conn->close();

    $servername = "localhost";
    $username = "juan";
    $password = "juan";
    $dbname = "mercadona";
    
    // Create connection withc dbname
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "";

// sql to delete a record
$sql = "DELETE FROM proveidors WHERE cif = \"$_REQUEST[re1]\";";
$result=$conn->query($sql);

if ($result === TRUE) {
  echo "Registre borrat correctament";
} else {
  echo "Error borrant registre " . $conn->error;
}

print("<br></br>");
print("<input type='submit' value='Darere'>");
print("</form>");

$conn->close();
    
    
    ?>
</body>
</html>