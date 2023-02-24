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

$totalj1=0;
$totalj2=0;

print("<h1>Cartas impar</h1>");

print("<h1>Jugador 1</h1>");

if($_REQUEST["res1"] == 0){
    print("El jugador 1 no ha seleccionat ninguna carta");
}
else{
    for($i=0; $i<$_REQUEST["res1"]; $i++){
        $cartaj1=rand(1,10);
        print("<img src='cartas/$cartaj1.svg' alt='cartas' weight='200px' height='200px'>");
        $totalj1 += $cartaj1;
    }
}
print("<p>$totalj1</p>");

print("<h1>Jugador 2</h1>");

if($_REQUEST["res2"] == 0){
    print("El jugador 2 no ha seleccionat ninguna carta");
}
else{
    for($i=0; $i<$_REQUEST["res2"]; $i++){
        $cartaj2=rand(1,10);
        print("<img src='cartas/$cartaj2.svg' alt='cartas' weight='200px' height='200px'>");
        $totalj2 += $cartaj2;
    }
}
print("<p>$totalj2</p>");

print("<hr>");

print("<h1>Resultats</h1>");

if($totalj1 < 22 && $totalj2 > 22 ){
    print("Gana el jugador 1");
}
elseif($totalj1 > 22 && $totalj2 < 22 ){
    print("Gana el jugador 2");
}
elseif($totalj1 < 22 && $totalj2 < 22 && $totalj1 > $totalj2){
    print("Gana el jugador 1");
}
elseif($totalj1 < 22 && $totalj2 < 22 && $totalj1 < $totalj2){
    print("Gana el jugador 2");
}
elseif($totalj1 > 21 && $totalj2 > 21){
    print("Ambos jugadores se pasaron de 21");

}
else{
    print("Empate");
}

?>




</body>
</html>