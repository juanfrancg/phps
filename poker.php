<?php
/**
 * examen - cartas-ordenadas.php
 *
 * @author Escriba aquí su nombre
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Cartas ordenadas.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Poker</h1>

  <p>Se muestra una cantidad de cartas al azar, entre 6 y 10. Las cartas se ordenan por su valor numérico.</p>

<?php

$aleatorio1 = rand(1,40);
$aleatorio2 = rand(1,40);
$aleatorio3 = rand(1,40);
$aleatorio4 = rand(1,40);
$aleatorio5 = rand(1,40);

print("<p>");
if ($aleatorio1 == 1){
  print("<img src='cartas/c1.svg' alt='c1' height='200px' weight='200px'>");
}
elseif($aleatorio1 == 2){
  print("<img src='cartas/c2.svg' alt='c2' height='200px' weight='200px'>");
}
elseif($aleatorio1 == 3){
  print("<img src='cartas/c3.svg' alt='c3' height='200px' weight='200px'>");
}elseif($aleatorio1 == 4){
  print("<img src='cartas/c4.svg' alt='c4' height='200px' weight='200px'>");
}elseif($aleatorio1 == 5){
  print("<img src='cartas/c5.svg' alt='c5' height='200px' weight='200px'>");
}elseif($aleatorio1 == 6){
  print("<img src='cartas/c6.svg' alt='c6' height='200px' weight='200px'>");
}elseif($aleatorio1 == 7){
  print("<img src='cartas/c7.svg' alt='c7' height='200px' weight='200px'>");
}elseif($aleatorio1 == 8){
  print("<img src='cartas/c8.svg' alt='c8' height='200px' weight='200px'>");
}elseif($aleatorio1 == 9){
  print("<img src='cartas/c9.svg' alt='c9' height='200px' weight='200px'>");
}elseif($aleatorio1 == 10){
  print("<img src='cartas/c10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 11){
  print("<img src='cartas/d1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 12){
  print("<img src='cartas/d2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 13){
  print("<img src='cartas/d3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 14){
  print("<img src='cartas/d4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 15){
  print("<img src='cartas/d5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 16){
  print("<img src='cartas/d6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 17){
  print("<img src='cartas/d7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 18){
  print("<img src='cartas/d8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 19){
  print("<img src='cartas/d9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 20){
  print("<img src='cartas/d10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 21){
  print("<img src='cartas/p1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 22){
  print("<img src='cartas/p2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 23){
  print("<img src='cartas/p3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 24){
  print("<img src='cartas/p4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 25){
  print("<img src='cartas/p5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 26){
  print("<img src='cartas/p6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 27){
  print("<img src='cartas/p7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 28){
  print("<img src='cartas/p8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 29){
  print("<img src='cartas/p9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 30){
  print("<img src='cartas/p10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 31){
  print("<img src='cartas/t1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 32){
  print("<img src='cartas/t2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 33){
  print("<img src='cartas/t3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 34){
  print("<img src='cartas/t4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 35){
  print("<img src='cartas/t5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 36){
  print("<img src='cartas/t6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 37){
  print("<img src='cartas/t7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 38){
  print("<img src='cartas/t8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 39){
  print("<img src='cartas/t9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 40){
  print("<img src='cartas/t10.svg' alt='c1' height='200px' weight='200px'>");
}
else{
  print("error");
}

if ($aleatorio2 == 1){
  print("<img src='cartas/c1.svg' alt='c1' height='200px' weight='200px'>");
}
elseif($aleatorio2 == 2){
  print("<img src='cartas/c2.svg' alt='c2' height='200px' weight='200px'>");
}
elseif($aleatorio2 == 3){
  print("<img src='cartas/c3.svg' alt='c3' height='200px' weight='200px'>");
}elseif($aleatorio2 == 4){
  print("<img src='cartas/c4.svg' alt='c4' height='200px' weight='200px'>");
}elseif($aleatorio2 == 5){
  print("<img src='cartas/c5.svg' alt='c5' height='200px' weight='200px'>");
}elseif($aleatorio2 == 6){
  print("<img src='cartas/c6.svg' alt='c6' height='200px' weight='200px'>");
}elseif($aleatorio2 == 7){
  print("<img src='cartas/c7.svg' alt='c7' height='200px' weight='200px'>");
}elseif($aleatorio2 == 8){
  print("<img src='cartas/c8.svg' alt='c8' height='200px' weight='200px'>");
}elseif($aleatorio2 == 9){
  print("<img src='cartas/c9.svg' alt='c9' height='200px' weight='200px'>");
}elseif($aleatorio2 == 10){
  print("<img src='cartas/c10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 11){
  print("<img src='cartas/d1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 12){
  print("<img src='cartas/d2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 13){
  print("<img src='cartas/d3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 14){
  print("<img src='cartas/d4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 15){
  print("<img src='cartas/d5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 16){
  print("<img src='cartas/d6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 17){
  print("<img src='cartas/d7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 18){
  print("<img src='cartas/d8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 19){
  print("<img src='cartas/d9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 20){
  print("<img src='cartas/d10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 21){
  print("<img src='cartas/p1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 22){
  print("<img src='cartas/p2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 23){
  print("<img src='cartas/p3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 24){
  print("<img src='cartas/p4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 25){
  print("<img src='cartas/p5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 26){
  print("<img src='cartas/p6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 27){
  print("<img src='cartas/p7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 28){
  print("<img src='cartas/p8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 29){
  print("<img src='cartas/p9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 30){
  print("<img src='cartas/p10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 31){
  print("<img src='cartas/t1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 32){
  print("<img src='cartas/t2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 33){
  print("<img src='cartas/t3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 34){
  print("<img src='cartas/t4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 35){
  print("<img src='cartas/t5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 36){
  print("<img src='cartas/t6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 37){
  print("<img src='cartas/t7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 38){
  print("<img src='cartas/t8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 39){
  print("<img src='cartas/t9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 40){
  print("<img src='cartas/t10.svg' alt='c1' height='200px' weight='200px'>");
}
else{
  print("error");
}
if ($aleatorio3 == 1){
  print("<img src='cartas/c1.svg' alt='c1' height='200px' weight='200px'>");
}
elseif($aleatorio3 == 2){
  print("<img src='cartas/c2.svg' alt='c2' height='200px' weight='200px'>");
}
elseif($aleatorio3 == 3){
  print("<img src='cartas/c3.svg' alt='c3' height='200px' weight='200px'>");
}elseif($aleatorio3 == 4){
  print("<img src='cartas/c4.svg' alt='c4' height='200px' weight='200px'>");
}elseif($aleatorio3 == 5){
  print("<img src='cartas/c5.svg' alt='c5' height='200px' weight='200px'>");
}elseif($aleatorio3 == 6){
  print("<img src='cartas/c6.svg' alt='c6' height='200px' weight='200px'>");
}elseif($aleatorio3 == 7){
  print("<img src='cartas/c7.svg' alt='c7' height='200px' weight='200px'>");
}elseif($aleatorio3 == 8){
  print("<img src='cartas/c8.svg' alt='c8' height='200px' weight='200px'>");
}elseif($aleatorio3 == 9){
  print("<img src='cartas/c9.svg' alt='c9' height='200px' weight='200px'>");
}elseif($aleatorio3 == 10){
  print("<img src='cartas/c10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 11){
  print("<img src='cartas/d1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 12){
  print("<img src='cartas/d2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 13){
  print("<img src='cartas/d3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 14){
  print("<img src='cartas/d4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 15){
  print("<img src='cartas/d5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 16){
  print("<img src='cartas/d6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 17){
  print("<img src='cartas/d7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 18){
  print("<img src='cartas/d8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 19){
  print("<img src='cartas/d9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 20){
  print("<img src='cartas/d10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 21){
  print("<img src='cartas/p1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 22){
  print("<img src='cartas/p2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 23){
  print("<img src='cartas/p3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 24){
  print("<img src='cartas/p4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 25){
  print("<img src='cartas/p5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 26){
  print("<img src='cartas/p6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 27){
  print("<img src='cartas/p7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 28){
  print("<img src='cartas/p8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 29){
  print("<img src='cartas/p9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 30){
  print("<img src='cartas/p10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 31){
  print("<img src='cartas/t1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 32){
  print("<img src='cartas/t2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 33){
  print("<img src='cartas/t3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 34){
  print("<img src='cartas/t4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 35){
  print("<img src='cartas/t5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 36){
  print("<img src='cartas/t6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 37){
  print("<img src='cartas/t7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 38){
  print("<img src='cartas/t8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 39){
  print("<img src='cartas/t9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 40){
  print("<img src='cartas/t10.svg' alt='c1' height='200px' weight='200px'>");
}
else{
  print("error");
}if ($aleatorio4 == 1){
  print("<img src='cartas/c1.svg' alt='c1' height='200px' weight='200px'>");
}
elseif($aleatorio4 == 2){
  print("<img src='cartas/c2.svg' alt='c2' height='200px' weight='200px'>");
}
elseif($aleatorio4 == 3){
  print("<img src='cartas/c3.svg' alt='c3' height='200px' weight='200px'>");
}elseif($aleatorio4 == 4){
  print("<img src='cartas/c4.svg' alt='c4' height='200px' weight='200px'>");
}elseif($aleatorio4 == 5){
  print("<img src='cartas/c5.svg' alt='c5' height='200px' weight='200px'>");
}elseif($aleatorio4 == 6){
  print("<img src='cartas/c6.svg' alt='c6' height='200px' weight='200px'>");
}elseif($aleatorio4 == 7){
  print("<img src='cartas/c7.svg' alt='c7' height='200px' weight='200px'>");
}elseif($aleatorio4 == 8){
  print("<img src='cartas/c8.svg' alt='c8' height='200px' weight='200px'>");
}elseif($aleatorio4 == 9){
  print("<img src='cartas/c9.svg' alt='c9' height='200px' weight='200px'>");
}elseif($aleatorio4 == 10){
  print("<img src='cartas/c10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 11){
  print("<img src='cartas/d1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 12){
  print("<img src='cartas/d2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 13){
  print("<img src='cartas/d3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 14){
  print("<img src='cartas/d4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 15){
  print("<img src='cartas/d5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 16){
  print("<img src='cartas/d6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 17){
  print("<img src='cartas/d7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 18){
  print("<img src='cartas/d8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 19){
  print("<img src='cartas/d9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 20){
  print("<img src='cartas/d10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 21){
  print("<img src='cartas/p1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 22){
  print("<img src='cartas/p2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 23){
  print("<img src='cartas/p3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 24){
  print("<img src='cartas/p4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 25){
  print("<img src='cartas/p5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 26){
  print("<img src='cartas/p6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 27){
  print("<img src='cartas/p7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 28){
  print("<img src='cartas/p8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 29){
  print("<img src='cartas/p9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 30){
  print("<img src='cartas/p10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 31){
  print("<img src='cartas/t1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 32){
  print("<img src='cartas/t2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 33){
  print("<img src='cartas/t3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 34){
  print("<img src='cartas/t4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 35){
  print("<img src='cartas/t5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 36){
  print("<img src='cartas/t6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 37){
  print("<img src='cartas/t7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 38){
  print("<img src='cartas/t8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 39){
  print("<img src='cartas/t9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 40){
  print("<img src='cartas/t10.svg' alt='c1' height='200px' weight='200px'>");
}
else{
  print("error");
}
if ($aleatorio5 == 1){
  print("<img src='cartas/c1.svg' alt='c1' height='200px' weight='200px'>");
}
elseif($aleatorio5 == 2){
  print("<img src='cartas/c2.svg' alt='c2' height='200px' weight='200px'>");
}
elseif($aleatorio5 == 3){
  print("<img src='cartas/c3.svg' alt='c3' height='200px' weight='200px'>");
}elseif($aleatorio5 == 4){
  print("<img src='cartas/c4.svg' alt='c4' height='200px' weight='200px'>");
}elseif($aleatorio5 == 5){
  print("<img src='cartas/c5.svg' alt='c5' height='200px' weight='200px'>");
}elseif($aleatorio5 == 6){
  print("<img src='cartas/c6.svg' alt='c6' height='200px' weight='200px'>");
}elseif($aleatorio5 == 7){
  print("<img src='cartas/c7.svg' alt='c7' height='200px' weight='200px'>");
}elseif($aleatorio5 == 8){
  print("<img src='cartas/c8.svg' alt='c8' height='200px' weight='200px'>");
}elseif($aleatorio5 == 9){
  print("<img src='cartas/c9.svg' alt='c9' height='200px' weight='200px'>");
}elseif($aleatorio5 == 10){
  print("<img src='cartas/c10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 11){
  print("<img src='cartas/d1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 12){
  print("<img src='cartas/d2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 13){
  print("<img src='cartas/d3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 14){
  print("<img src='cartas/d4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 15){
  print("<img src='cartas/d5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 16){
  print("<img src='cartas/d6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 17){
  print("<img src='cartas/d7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 18){
  print("<img src='cartas/d8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 19){
  print("<img src='cartas/d9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 20){
  print("<img src='cartas/d10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 21){
  print("<img src='cartas/p1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 22){
  print("<img src='cartas/p2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 23){
  print("<img src='cartas/p3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 24){
  print("<img src='cartas/p4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 25){
  print("<img src='cartas/p5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 26){
  print("<img src='cartas/p6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 27){
  print("<img src='cartas/p7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 28){
  print("<img src='cartas/p8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 29){
  print("<img src='cartas/p9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 30){
  print("<img src='cartas/p10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 31){
  print("<img src='cartas/t1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 32){
  print("<img src='cartas/t2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 33){
  print("<img src='cartas/t3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 34){
  print("<img src='cartas/t4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 35){
  print("<img src='cartas/t5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 36){
  print("<img src='cartas/t6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 37){
  print("<img src='cartas/t7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 38){
  print("<img src='cartas/t8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 39){
  print("<img src='cartas/t9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio5 == 40){
  print("<img src='cartas/t10.svg' alt='c1' height='200px' weight='200px'>");
}
else{
  print("error");
}

print("</p>");


print("<hr>");


$aleatorio1 = rand(1,11);
$aleatorio2 = rand(1,11);
$aleatorio3 = rand(1,11);
$aleatorio4 = rand(1,11);

$total1 = $aleatorio1 + $aleatorio2;
$total2 = $aleatorio3 + $aleatorio4;

print("<p>");
if ($aleatorio1 == 1){
  print("<img src='cartas/c1.svg' alt='c1' height='200px' weight='200px'>");
}
elseif($aleatorio1 == 2){
  print("<img src='cartas/c2.svg' alt='c2' height='200px' weight='200px'>");
}
elseif($aleatorio1 == 3){
  print("<img src='cartas/c3.svg' alt='c3' height='200px' weight='200px'>");
}elseif($aleatorio1 == 4){
  print("<img src='cartas/c4.svg' alt='c4' height='200px' weight='200px'>");
}elseif($aleatorio1 == 5){
  print("<img src='cartas/c5.svg' alt='c5' height='200px' weight='200px'>");
}elseif($aleatorio1 == 6){
  print("<img src='cartas/c6.svg' alt='c6' height='200px' weight='200px'>");
}elseif($aleatorio1 == 7){
  print("<img src='cartas/c7.svg' alt='c7' height='200px' weight='200px'>");
}elseif($aleatorio1 == 8){
  print("<img src='cartas/c8.svg' alt='c8' height='200px' weight='200px'>");
}elseif($aleatorio1 == 9){
  print("<img src='cartas/c9.svg' alt='c9' height='200px' weight='200px'>");
}elseif($aleatorio1 == 10){
  print("<img src='cartas/c10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 11){
  print("<img src='cartas/d1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 12){
  print("<img src='cartas/d2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 13){
  print("<img src='cartas/d3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 14){
  print("<img src='cartas/d4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 15){
  print("<img src='cartas/d5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 16){
  print("<img src='cartas/d6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 17){
  print("<img src='cartas/d7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 18){
  print("<img src='cartas/d8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 19){
  print("<img src='cartas/d9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 20){
  print("<img src='cartas/d10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 21){
  print("<img src='cartas/p1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 22){
  print("<img src='cartas/p2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 23){
  print("<img src='cartas/p3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 24){
  print("<img src='cartas/p4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 25){
  print("<img src='cartas/p5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 26){
  print("<img src='cartas/p6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 27){
  print("<img src='cartas/p7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 28){
  print("<img src='cartas/p8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 29){
  print("<img src='cartas/p9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 30){
  print("<img src='cartas/p10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 31){
  print("<img src='cartas/t1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 32){
  print("<img src='cartas/t2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 33){
  print("<img src='cartas/t3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 34){
  print("<img src='cartas/t4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 35){
  print("<img src='cartas/t5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 36){
  print("<img src='cartas/t6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 37){
  print("<img src='cartas/t7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 38){
  print("<img src='cartas/t8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 39){
  print("<img src='cartas/t9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio1 == 40){
  print("<img src='cartas/t10.svg' alt='c1' height='200px' weight='200px'>");
}
else{
  print("error");
}

if ($aleatorio2 == 1){
  print("<img src='cartas/c1.svg' alt='c1' height='200px' weight='200px'>");
}
elseif($aleatorio2 == 2){
  print("<img src='cartas/c2.svg' alt='c2' height='200px' weight='200px'>");
}
elseif($aleatorio2 == 3){
  print("<img src='cartas/c3.svg' alt='c3' height='200px' weight='200px'>");
}elseif($aleatorio2 == 4){
  print("<img src='cartas/c4.svg' alt='c4' height='200px' weight='200px'>");
}elseif($aleatorio2 == 5){
  print("<img src='cartas/c5.svg' alt='c5' height='200px' weight='200px'>");
}elseif($aleatorio2 == 6){
  print("<img src='cartas/c6.svg' alt='c6' height='200px' weight='200px'>");
}elseif($aleatorio2 == 7){
  print("<img src='cartas/c7.svg' alt='c7' height='200px' weight='200px'>");
}elseif($aleatorio2 == 8){
  print("<img src='cartas/c8.svg' alt='c8' height='200px' weight='200px'>");
}elseif($aleatorio2 == 9){
  print("<img src='cartas/c9.svg' alt='c9' height='200px' weight='200px'>");
}elseif($aleatorio2 == 10){
  print("<img src='cartas/c10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 11){
  print("<img src='cartas/d1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 12){
  print("<img src='cartas/d2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 13){
  print("<img src='cartas/d3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 14){
  print("<img src='cartas/d4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 15){
  print("<img src='cartas/d5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 16){
  print("<img src='cartas/d6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 17){
  print("<img src='cartas/d7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 18){
  print("<img src='cartas/d8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 19){
  print("<img src='cartas/d9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 20){
  print("<img src='cartas/d10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 21){
  print("<img src='cartas/p1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 22){
  print("<img src='cartas/p2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 23){
  print("<img src='cartas/p3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 24){
  print("<img src='cartas/p4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 25){
  print("<img src='cartas/p5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 26){
  print("<img src='cartas/p6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 27){
  print("<img src='cartas/p7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 28){
  print("<img src='cartas/p8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 29){
  print("<img src='cartas/p9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 30){
  print("<img src='cartas/p10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 31){
  print("<img src='cartas/t1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 32){
  print("<img src='cartas/t2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 33){
  print("<img src='cartas/t3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 34){
  print("<img src='cartas/t4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 35){
  print("<img src='cartas/t5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 36){
  print("<img src='cartas/t6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 37){
  print("<img src='cartas/t7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 38){
  print("<img src='cartas/t8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 39){
  print("<img src='cartas/t9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio2 == 40){
  print("<img src='cartas/t10.svg' alt='c1' height='200px' weight='200px'>");
}


print("<p>El jugador 1 numero tiene: $total1 <p>");

if( $total1 < 21 ){



  
}

$aleatorio3 = rand(1,11);
$aleatorio4 = rand(1,11);

if ($aleatorio3 == 1){
  print("<img src='cartas/c1.svg' alt='c1' height='200px' weight='200px'>");
}
elseif($aleatorio3 == 2){
  print("<img src='cartas/c2.svg' alt='c2' height='200px' weight='200px'>");
}
elseif($aleatorio3 == 3){
  print("<img src='cartas/c3.svg' alt='c3' height='200px' weight='200px'>");
}elseif($aleatorio3 == 4){
  print("<img src='cartas/c4.svg' alt='c4' height='200px' weight='200px'>");
}elseif($aleatorio3 == 5){
  print("<img src='cartas/c5.svg' alt='c5' height='200px' weight='200px'>");
}elseif($aleatorio3 == 6){
  print("<img src='cartas/c6.svg' alt='c6' height='200px' weight='200px'>");
}elseif($aleatorio3 == 7){
  print("<img src='cartas/c7.svg' alt='c7' height='200px' weight='200px'>");
}elseif($aleatorio3 == 8){
  print("<img src='cartas/c8.svg' alt='c8' height='200px' weight='200px'>");
}elseif($aleatorio3 == 9){
  print("<img src='cartas/c9.svg' alt='c9' height='200px' weight='200px'>");
}elseif($aleatorio3 == 10){
  print("<img src='cartas/c10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 11){
  print("<img src='cartas/d1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 12){
  print("<img src='cartas/d2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 13){
  print("<img src='cartas/d3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 14){
  print("<img src='cartas/d4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 15){
  print("<img src='cartas/d5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 16){
  print("<img src='cartas/d6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 17){
  print("<img src='cartas/d7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 18){
  print("<img src='cartas/d8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 19){
  print("<img src='cartas/d9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 20){
  print("<img src='cartas/d10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 21){
  print("<img src='cartas/p1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 22){
  print("<img src='cartas/p2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 23){
  print("<img src='cartas/p3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 24){
  print("<img src='cartas/p4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 25){
  print("<img src='cartas/p5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 26){
  print("<img src='cartas/p6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 27){
  print("<img src='cartas/p7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 28){
  print("<img src='cartas/p8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 29){
  print("<img src='cartas/p9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 30){
  print("<img src='cartas/p10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 31){
  print("<img src='cartas/t1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 32){
  print("<img src='cartas/t2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 33){
  print("<img src='cartas/t3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 34){
  print("<img src='cartas/t4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 35){
  print("<img src='cartas/t5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 36){
  print("<img src='cartas/t6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 37){
  print("<img src='cartas/t7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 38){
  print("<img src='cartas/t8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 39){
  print("<img src='cartas/t9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio3 == 40){
  print("<img src='cartas/t10.svg' alt='c1' height='200px' weight='200px'>");
}
else{
  print("error");
}if ($aleatorio4 == 1){
  print("<img src='cartas/c1.svg' alt='c1' height='200px' weight='200px'>");
}
elseif($aleatorio4 == 2){
  print("<img src='cartas/c2.svg' alt='c2' height='200px' weight='200px'>");
}
elseif($aleatorio4 == 3){
  print("<img src='cartas/c3.svg' alt='c3' height='200px' weight='200px'>");
}elseif($aleatorio4 == 4){
  print("<img src='cartas/c4.svg' alt='c4' height='200px' weight='200px'>");
}elseif($aleatorio4 == 5){
  print("<img src='cartas/c5.svg' alt='c5' height='200px' weight='200px'>");
}elseif($aleatorio4 == 6){
  print("<img src='cartas/c6.svg' alt='c6' height='200px' weight='200px'>");
}elseif($aleatorio4 == 7){
  print("<img src='cartas/c7.svg' alt='c7' height='200px' weight='200px'>");
}elseif($aleatorio4 == 8){
  print("<img src='cartas/c8.svg' alt='c8' height='200px' weight='200px'>");
}elseif($aleatorio4 == 9){
  print("<img src='cartas/c9.svg' alt='c9' height='200px' weight='200px'>");
}elseif($aleatorio4 == 10){
  print("<img src='cartas/c10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 11){
  print("<img src='cartas/d1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 12){
  print("<img src='cartas/d2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 13){
  print("<img src='cartas/d3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 14){
  print("<img src='cartas/d4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 15){
  print("<img src='cartas/d5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 16){
  print("<img src='cartas/d6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 17){
  print("<img src='cartas/d7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 18){
  print("<img src='cartas/d8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 19){
  print("<img src='cartas/d9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 20){
  print("<img src='cartas/d10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 21){
  print("<img src='cartas/p1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 22){
  print("<img src='cartas/p2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 23){
  print("<img src='cartas/p3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 24){
  print("<img src='cartas/p4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 25){
  print("<img src='cartas/p5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 26){
  print("<img src='cartas/p6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 27){
  print("<img src='cartas/p7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 28){
  print("<img src='cartas/p8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 29){
  print("<img src='cartas/p9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 30){
  print("<img src='cartas/p10.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 31){
  print("<img src='cartas/t1.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 32){
  print("<img src='cartas/t2.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 33){
  print("<img src='cartas/t3.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 34){
  print("<img src='cartas/t4.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 35){
  print("<img src='cartas/t5.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 36){
  print("<img src='cartas/t6.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 37){
  print("<img src='cartas/t7.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 38){
  print("<img src='cartas/t8.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 39){
  print("<img src='cartas/t9.svg' alt='c1' height='200px' weight='200px'>");
}elseif($aleatorio4 == 40){
  print("<img src='cartas/t10.svg' alt='c1' height='200px' weight='200px'>");
}
else{
  print("error");
}

print("<p>El jugador 2 numero tiene: $total2 <p>");

?>





<!-- <img src="cartas/c1.svg" alt="c1" height="200px" weight="200px"> -->

</body>
</html>