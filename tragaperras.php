<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="traga.css">
    <title>Tragaperras</title>
</head>
<body>
    
<?php

$ordinador="<img src='img/pc.png' alt='pc' width='200px' height='200px'>";

$pera="<img src='img/pera.png' alt='pera' width='200px' height='200px'>";

$naranja="<img src='img/naranja.png' alt='naranja' width='200px' height='200px'>";

$siete="<img src='img/siete.png' alt='siete' width='200px' height='200px'>";

print("<h1>Escurabutxaques</h1>");

$aleatorio1=rand(1, 4);
$aleatorio2=rand(1, 4);
$aleatorio3=rand(1, 4);
$aleatorio4=rand(1, 4);


print "<table border='1' class='blue'>";
print "<tr>";
print "<th>";
if($aleatorio1 == 1)
{
    print($ordinador);
}

elseif($aleatorio1 == 2)
{
    print($naranja);
}
elseif($aleatorio1 == 3)
{
    print($pera);
}
elseif($aleatorio1 == 4)
{
    print($siete);
}
print "</th>";
print "<th>";

if($aleatorio2 == 1)
{
    print($ordinador);
}
elseif($aleatorio2 == 2)
{
    print($naranja);
}
elseif($aleatorio2 == 3)
{
    print($pera);
}
elseif($aleatorio2 == 4)
{
    print($siete);
}
print "</th>";
print "<th>";
if($aleatorio3 == 1)
{
    print($ordinador);
}
elseif($aleatorio3 == 2)
{
    print($naranja);
}
elseif($aleatorio3 == 3)
{
    print($pera);
}
elseif($aleatorio3 == 4)
{
    print($siete);
}
print "</th>";
print "<th>";
if($aleatorio4 == 1)
{
    print($ordinador);
}
elseif($aleatorio4 == 2)
{
    print($naranja);
}
elseif($aleatorio4 == 3)
{
    print($pera);
}
elseif($aleatorio4 == 4)
{
    print($siete);
}
print "</th>";
print "</tr>";
print "</table>";

print "<br>";

if($aleatorio1 == 1 && $aleatorio2 == 3 && $aleatorio3 == 3 && $aleatorio4 == 3){
    print("Premio peres"); 
}
elseif($aleatorio1 == 1 && $aleatorio2 == 2 && $aleatorio3 == 2 && $aleatorio4 == 2){
    print("Premi taronges");
}
elseif($aleatorio1 == 1 && $aleatorio2 == 4 && $aleatorio3 == 4 && $aleatorio4 == 4){
    print("Premi banca");
}
elseif($aleatorio1 == 1 && $aleatorio2 == 1 && $aleatorio3 == 1 && $aleatorio4 == 1){
    print("Premi php");
}
else{
    print("No premiado");
}



?>



</body>
</html>