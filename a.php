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

print("<form action='b.php' method='post'>");

    print_r($_REQUEST);

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
    
    //sql to select data
    $sql = "SELECT nom,nota,edat FROM registro WHERE id='$_REQUEST[re]'";
    $result = $conn->query($sql);
    
    

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
              $nom=$row["nom"];
              $nota=$row["nota"];
              $edat=$row["edat"];
          
                    
          }// end while while
  
      } //end if
     else {
      echo "0 results";
    }

print("<p>Nom: <input type='text' name='newnom' placeholder='$nom'></p>");
print("<p>Nota: <input type='text' name='newnota' placeholder='$nota'></p>");
print("<p>Edat: <input type='text' name='newedat' placeholder='$edat'></p>");
print("<input type='hidden' name='oldnom' value='$nom'>");
print("<input type='hidden' name='oldnota' value='$nota'>");
print("<input type='hidden' name='oldedat' value='$edat'>");

print("<input type='submit' value='Cambiar'>");

    $conn->close();

    
    ?>


</body>
</html>