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

print ( "<h1> Exercici 1 </h1>" );
$setmana = ["Dilluns","Dimarts","Dimecres","Dijous","Divendres","Dissable","Diumenge"];

print_r($setmana);

print("<br></br>");


if (is_array($setmana)) {
    print("Setmana és un array");
}
else{
    print("Setmana no és un array");
}

print("<hr>");

print ( "<h1> Exercici 2 </h1>" );

$imparells = [range(23,55,2)];

print_r($imparells);

print("<hr>");

print ( "<h1> Exercici 3 </h1>" );

$parells = [count(range(56,100,2))];

print("El vector parells té ". $parells[0] ." elemets" );

print("<hr>");

print ( "<h1> Exercici 4 </h1>" );

$alumnes =[
    ["nom" => "Irene","edat" => "25"],
    ["nom" => "Jose","edat" => "19"],
    ["nom" => "David","edat" => "20"],
    ["nom" => "Juan","edat" => "21"],
    ["nom" => "Sergio","edat" => "22"]
];

print_r($alumnes);

print("<hr>");

print ( "<h1> Exercici 5 </h1>" );

$edat = array(19, 18, 21, 20, 21, 22, 25, 23, 21, 22, 20, 19);

$cuenta = array_count_values($edat);

print_r ($cuenta);

print("<br></br>");

print(" Tenim $cuenta[21] alumnes amb 21 anys" . "<br></br>");
print(" Tenim $cuenta[22] alumnes amb 22 anys" . "<br></br>");
print(" Tenim $cuenta[23] alumnes amb 23 anys" . "<br></br>");

print("<hr>");

print ( "<h1> Exercici 6 </h1>" );


$alumnes = max([
    ["edat" => 25,"nom" => "Irene"],
    ["edat" => 23,"nom" => "Jose"],
    ["edat" => 20,"nom" => "David"],
    ["edat" => 21,"nom" => "Juan"],
    ["edat" => 22,"nom" => "Sergio"]
]);

print_r($alumnes);

print("<br></br>");


print("El més major de la classe te ".$alumnes["edat"]);


print("<hr>");

print ( "<h1> Exercici 7 </h1>" );


$alumnes = min([
    ["nom" => "Irene","edat" => 25],
    ["nom" => "Jose","edat" => 23],
    ["nom" => "David","edat" => 20],
    ["nom" => "Juan","edat" => 21],
    ["nom" => "Sergio","edat" => 22]
]);


print_r($alumnes);

print("<br></br>");

print("El més menut de la classe te ".$alumnes["edat"]);

print("<hr>");

print ( "<h1> Exercici 8 </h1>" );

$alumnes =["Irene","Jose","David","Juan","Sergio"];

asort($alumnes);

print_r($alumnes);

print("<hr>");

print ( "<h1> Exercici 9 </h1>" );


$alumnes =["Irene","Jose","David","Juan","Sergio"];

arsort($alumnes);

print_r($alumnes);

print("<hr>");

print ( "<h1> Exercici 10 </h1>" );

$setmana = ["Dilluns","Dimarts","Dimecres","Dijous","Divendres","Dissable","Diumenge"];

rsort($setmana);

print_r($setmana);


print("<hr>");

print ( "<h1> Exercici 11 </h1>" );


$edat = array(19, 18, 21, 20, 21, 22, 25, 23, 21, 22, 20, 19);

print_r($edat);
print("<br></br>");
if(in_array(22,$edat,true))
    echo '22 trobat';
else
    echo '22 no trobat';

print("<br></br>");


$edat = array(19, 18, 21, 20, 21, "22", 25, 23, 21, 22, 20, 19);

print_r($edat);
print("<br></br>");
if(in_array("22",$edat,true))
    echo '22 trobat';
else
    echo '22 no trobat';
?>



</body>
</html>