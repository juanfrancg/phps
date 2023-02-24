<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="color.css">
</head>
<body>
    
<?php

print("<h1>Color color</h1>");

print("<hr></hr>");

print("<h2>Escriu el color en valencià");

$aleatorio=rand(1, 5);

if($aleatorio == 1)
{
    print("<p class='red'>Quin color sóc?</p>");
    //print("<input type='hidden' name='roig' value='1'>");
}
elseif ($aleatorio == 2) {
    print("<p class='groc'>Quin color sóc?</p>");
    //print("<input type='hidden' name='groc' value='2'>");
}
elseif ($aleatorio == 3) {
    print("<p class='blau'>Quin color sóc?</p>");
    //print("<input type='hidden' name='blau' value='3'>");
}
elseif ($aleatorio == 4) {
    print("<p class='taronja'>Quin color sóc?</p>");
    //print("<input type='hidden' name='taronja' value='4'>");
}
elseif($aleatorio == 5){
    print("<p class='verd'>Quin color sóc?</p>");
    //print("<input type='hidden' name='verd' value='5'>");
}
else{
    print("<p>Error 404</p>");
}


print("<form action='accion.php' method='post'>");
print("<p>Color:");
print("<input type='text' name='respuesta'>");
print("<input type='hidden' name='oculto' value='$aleatorio'>");
print("</p>");
print("<p>");
print("<input type='submit' value='Corregir'>");
print("<input class='res' type='reset' value='Reset'>");
print("</p>");
print("</form>");



?>





</body>
</html>
