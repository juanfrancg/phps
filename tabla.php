<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & MySQL</title>
</head>
<body>

<h1>Modificar Alumnos</h1>


<?php
$servername = "localhost";
$username = "david";
$password = "1234";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";


// Create database
$sql = "CREATE DATABASE IF NOT EXISTS federico";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();

$servername = "localhost";
$username = "david";
$password = "1234";
$dbname = "federico";

// Create connection withc dbname
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";


// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS registro (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    cognoms VARCHAR(255),
    email VARCHAR(255),
    modul VARCHAR(255),
    nota VARCHAR(255) NOT NULL,
    edat INT(3) NOT NULL
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error creant taula" . $conn->error;
    }
    
    $conn->close();

    $servername = "localhost";
    $username = "david";
    $password = "1234";
    $dbname = "federico";
    
    // Create connection withc dbname
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "";
    
    
    //sql to insert data
    //fixat al ; final per tal d'afegir noves instruccions a continuació
    $sql = "INSERT INTO registro (nom, cognoms,email,modul,nota,edat)
    VALUES ('Juanfran', 'Joan Pérez','juanfran@gmail.com','iaw','3','18');";
    
    //utilitze operador .= .Concatena i assigna
    $sql .= "INSERT INTO registro (nom, cognoms,email,modul,nota,edat)
    VALUES ('Jose','Lujan Torres','jose@gmail.com','iaw','3','20');";
    
    $sql .= "INSERT INTO registro (nom, cognoms,email,modul,nota,edat)
    VALUES ('Emi', 'Juan Gómez','emi@gmail.com','iaw','3','19')";
    
    
    //utilitze funció multi_query
    if ($conn->multi_query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();

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
    echo " <br>";
    
    //sql to select data
    $sql = "SELECT id,nom,cognoms,email,modul,nota,edat FROM registro ";
    $result = $conn->query($sql);
    
    print("<form action='a.php' method='post'>");

    print "<select name ='re'>";
      print "<option value=\"selecc alumno\" selected=\"selected\">";
      print "Seleccionar Alumno";
      print "</option>";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
              $id=$row["id"];
              $nom_alumno=$row["nom"];
              print "<option value=\"$id\">";
              print  $nom_alumno;
              print "</option>";
                    
          }// end while while
       print "</select>";
      } //end if
     else {
      echo "0 results";
    }
    
    $conn->close();

    print("<input type='submit' value='Enviar'>");

    print("</form>");
?>
    


</body>
</html>