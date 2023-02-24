<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer4.6</title>
</head>
<body>
    
<?php

print("<h1>Exercici 1</h1>");

$dades = [12,15,2,5,-9,98,65,4,8,79,6,8,6];


print_r($dades);

print("<hr>");

print("<h1>Exercici 2</h1>");

$dades = [12,15,2,5,-9,98,65,4,8,79,6,8,6];

$sum=0;

for($i=0; $i < count($dades) ; $i++){
    print("<p>".$sum += $dades[$i]."</p>");
}

print("<hr>");

print("<h1>Exercici 3</h1>");


$dades = [12,15,2,5,-9,98,65,4,8,79,6,8,6];

$sum = 0;

for ($i = 0; $i < count($dades); $i++) {
    $sum += $dades[$i];
}
$media = $sum / count($dades);
echo "La media de los números es: " . $media;


print("<hr>");

print("<h1>Exercici 4</h1>");

$dades = [12,15,2,5,-9,98,65,4,8,79,6,8,6];

$max = $dades[0];
$min = $dades[0];

for ($i = 0; $i < count($dades); $i++) {
    if ($dades[$i] > $max) {
        $max = $dades[$i];
    }
    if ($dades[$i] < $min) {
        $min = $dades[$i];
    }
}
echo "El número máximo es: " . $max . "<br></br>";
echo "El número mínimo es: " . $min;



print("<hr>");

print("<h1>Exercici 5</h1>");

$dades = [12,15,2,5,-9,98,65,4,8,79,6,8,6];
$encontrado = false;

for ($i = 0; $i < count($dades); $i++) {
    if ($dades[$i] == 98) {
        $encontrado = true;
        break;
    }
}
if ($encontrado) {
    echo "Trobat";
} else {
    echo "No Trobat";
}

print("<hr>");

print("<h1>Exercici 6</h1>");

$dades = [12,15,2,5,-9,98,65,4,8,79,6,8,6];
$encontrado = false;

for ($i = 0; $i < count($dades); $i++) {
    if ($dades[$i] == 100) {
        $encontrado = true;
        break;
    }
}
if ($encontrado) {
    echo "Trobat";
} else {
    echo "No Trobat";
}


print("<hr>");

print("<h1>Exercici 7</h1>");

$i = 0;
while ($i < 20){
    $num = rand(1, 30);
    print($num . "<br></br>");
    $i++;
}

print("<hr>");

print("<h1>Exercici 8</h1>");

$dades = [12,15,2,5,-9,98,65,4,8,79,6,8,6];
$i = 0;
$max = $dades[$i];
$min = $dades[$i];

while ($i < count($dades)) {
    if ($dades[$i] > $max) {
        $max = $dades[$i];
    }
    if ($dades[$i] < $min) {
        $min = $dades[$i];
    }
    $i++;
}
echo "El número máximo es: " . $max . "<br></br>";
echo "El número mínimo es: " . $min;

print("<hr>");

print("<h1>Exercici 9</h1>");


$dades = [12,15,2,5,-9,98,65,4,8,79,6,8,6];
$i = 0;
$encontrado = false;

while ($i < count($dades) && !$encontrado) {
    if ($dades[$i] == 98) {
        $encontrado = true;
    }
    $i++;
}
if ($encontrado) {
    echo "Trobat";
} else {
    echo "No trobat";
}

print("<hr>");

print("<h1>Exercici 10</h1>");

$dades = [12,15,2,5,-9,98,65,4,8,79,6,8,6];
$i = 0;
$encontrado = false;

while ($i < count($dades) && !$encontrado) {
    if ($dades[$i] == 100) {
        $encontrado = true;
    }
    $i++;
}
if ($encontrado) {
    echo "Trobat";
} else {
    echo "No trobat";
}

?>



</body>
</html>