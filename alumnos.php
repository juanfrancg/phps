<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="alumnos.css">
</head>
<body>

<?php
print("<h1>Introdueix les dades de l'alumne</h1>");
print("<form action='accion.php' method='post'>");
print("<p> Nom: <input type='text' name='nom' placeholder='nom'> </p>");
print("<p> Cognom 1: <input type='text' name='cog1' placeholder='cognom1'> Cognom 2: <input type='text' name='cog2' placeholder='cognom2'></p>");
print("<p> e-mail: <input type='email' name='email' placeholder='email'>");
print("<p><input type='submit' value='Guardar'> <input type='reset' value='Borrar'></p>");
print("</form>");



?>


 <!--   <h1>Introdueix les dades de l'alumne</h1>
    <form action="accion.php" method="post">
      <p> Nom: <input type="text" name="nom" placeholder="nom"> </p>
      <p> Cognom 1: <input type="text" name="cog1" placeholder="cognom1"> Cognom 2: <input type="text" name="cog2" placeholder="cognom2">  </p>
      <p> e-mail: <input type="email" name="email" placeholder="email">
    <p><input type="submit" value="Guardar"></p>
    </form> -->


</body>
</html>
