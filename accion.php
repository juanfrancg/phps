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

    $servername = "localhost";
    $username = "david";
    $password = "1234";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

$sql = "CREATE DATABASE if not exists pp";
if ($conn->query($sql) === TRUE) {
  echo "Database";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
    
$servername = "localhost";
$username = "david";
$password = "1234";
$dbname = "pp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "CREATE TABLE IF NOT EXISTS info (
    nombre VARCHAR(255) PRIMARY KEY,
    cog1 VARCHAR(255),
    cog2 VARCHAR(255),
    email VARCHAR(255)
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "   Tabla creada";
      } else {
        echo "Error creating database: " . $conn->error;
      }
      
      $conn->close();
      
      $servername = "localhost";
      $username = "david";
      $password = "1234";
      $dbname = "pp";
      // Create connection
      $conn = new mysqli($servername, $username, $password,$dbname);
      
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";


      $nom = $_REQUEST["nom"];
      $cog1 = $_REQUEST["cog1"];
      $cog2 = $_REQUEST["cog2"];
      $email = $_REQUEST["email"];

      $sql = "INSERT INTO info (nombre,cog1,cog2,email) VALUES ('$nom','$cog1','$cog2','$email')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Insercion creada";
          } else {
            echo "Error creating database: " . $conn->error;
          }

    
    ?>

</body>
</html>