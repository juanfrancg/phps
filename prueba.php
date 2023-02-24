<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pràctica 4.3 Arrays</title>

</head>
<body>
    
<?php



//Exercici 1
print ( "<h1> Exercici 1 </h1>" );
$setmana = ["Dilluns","Dimarts","Dimecres","Dijous","Divendres","Dissable","Diumenge"];
print_r ($setmana);
print("<p> El dia de la setmana es " . $setmana[3] . "</p>" );

print("<hr>");

//Exercici 2
print( "<h1> Exercici 2 </h1>" );
//$setmana = [
//    ["horari" => "Dilluns",
//    "hora" => "08:55","modul" => "Administració De Sistemes Gestors De Bases de dades",
//    "hora" => "09:50","modul" => "Administració De Sistemes Gestors De Bases de dades",
//    "hora" => "11:15","modul" => "Implantació D'Aplicacions Web",
//    "hora" => "12:10","modul" => "Empresa I Iniciativa Emprenedora",
//    "hora" => "13:05","modul" => "Empresa I Iniciativa Emprenedora"],

//    ["horari" => "Dimarts",
//    "hora" => "08:00","modul" => "Serveis De Xarxa I Internet",
//    "hora" => "08:55","modul" => "Serveis De Xarxa I Internet",
//    "hora" => "09:50","modul" => "Implantació D'Aplicacions Web",
//    "hora" => "11:15","modul" => "Implantació D'Aplicacions Web",
//    "hora" => "12:10","modul" => "Administració De Sistemes Operatius",
//    "hora" => "13:05","modul" => "Administració De Sistemes Operatius",
//    "hora" => "14:00","modul" => "Inglés Tècnic II-S / Horari Reservat Per a la Docència En Inglés"],

//    ["horari" => "Dimecres",
//    "hora" => "08:00","modul" => "Seguretat I Alta Disponibilitat",
//    "hora" => "08:55","modul" => "Seguretat I Alta Disponibilitat",
//    "hora" => "09:50","modul" => "Serveis De Xarxa I Internet",
//    "hora" => "11:15","modul" => "Serveis De Xarxa I Internet",
//    "hora" => "12:10","modul" => "Administració De Sistemes Operatius",
//    "hora" => "13:05","modul" => "Administració De Sistemes Operatius",
//    "hora" => "14:00","modul" => "Empresa I Iniciativa Emprenedora"],

//    ["horari" => "Dijous",
//    "hora" => "08:00","modul" => "Seguretat I Alta Disponibilitat",
//    "hora" => "08:55","modul" => "Seguretat I Alta Disponibilitat",
//    "hora" => "09:50","modul" => "Seguretat I Alta Disponibilitat",
//    "hora" => "11:15","modul" => "Tutoria Segon",
//    "hora" => "12:10","modul" => "Administració De Sistemes Gestors De Bases de dades",
//    "hora" => "13:05","modul" => "Inglés Tècnic II-S / Horari Reservat Per a la Docència En Inglés"
//    ],

//    ["horari" => "Divendres",
//    "hora" => "08:00","modul" => "Serveis De Xarxa I Internet",
//    "hora" => "08:55","modul" => "Serveis De Xarxa I Internet",
//    "hora" => "09:50","modul" => "Administració De Sistemes Operatius",
//    "hora" => "11:15","modul" => "Administració De Sistemes Operatius",
//    "hora" => "12:10","modul" => "Implantació D'Aplicacions Web",
//    "hora" => "13:05","modul" => "Implantació D'Aplicacions Web"
//    ]
//];

//print_r ($setmana);

//print ("<p>El horari del tercer elemet es: " . $setmana[3]["horari"] . $setmana[3]["hora"]);

$horari = [
    [ "dia" => "Dilluns ",
    "moduls" => "Administració De Sistemes Gestors De Bases de dades,
    Implantació D'Aplicacions Web,
    Empresa I Iniciativa Emprenedora "
    ],

    ["dia" => "Dimarts ",
     "moduls" => "Serveis De Xarxa I Internet,
     Implantació D'Aplicacions Web,
     Administració De Sistemes Operatius,
     Anglés Tècnic II-S / Horari Reservat Per a la Docència En Anglés"
    ],

     ["dia" => "Dimecres",
     "moduls" => "Seguretat I Alta Disponibilitat,
     Serveis De Xarxa I Internet,
     Administració De Sistemes Operatius,
     Empresa I Iniciativa Emprenedora"],

     ["dia" => "Dijous",
     "moduls" => "Seguretat I Alta Disponibilitat,
     Tutoria Segon,
     Administració De Sistemes Gestors De Bases de dades i
     Anglés Tècnic II-S / Horari Reservat Per a la Docència En Anglés",
     ],

     ["dia" => "Divendres",
     "moduls" => "Serveis De Xarxa I Internet,
      Administració De Sistemes Operatius i 
      Implantació D'Aplicacions Web"
        ]
];

print_r ($horari);
print ("<p>El horari del tercer elemet es el dia: " . $horari[3]["dia"] . " i mòduls que es donen aquest dia són: " . $horari[3]["moduls"]);

print("<hr>");


//Exercici 3
print( "<h1> Exercici 3 </h1>" );

//$professors[];
//$professors["nom" => "DAVID ESCRIBANO ALVAREZ" ];
//$professors["nom"]="DAVID ESCRIBANO ALVAREZ";
//$professors["moduls"]="Implantació d'Aplicacions Web i Tutoria Segon";
//$professors["nom"]="ANTONIO CAPILLA ALONSO";
//$professors["moduls"]="Administració de Sistemes Operatius";
//$professors["nom"]="MARCOS GALLACH PEREZ";
//$professors["moduls"]="Administració de Sistemes Gestors de Bases de Dades";
//$professors["nom"]="CARMEN NADAL FERRANDIZ";
//$professors["moduls"]="Anglés Tècnic II-S / Horari reservat per a la docència en anglés";
//$professors["nom"]="JUANA SOLER SANCHEZ";
//$professors["moduls"]="Empresa i iniciativa emprenedora";
//$professors["nom"]="MANUEL FERNANDEZ ORTIZ";
//$professors["moduls"]="Seguretat i Alta Disponibilitat";
//$professors["nom"]="JORDI JIMENEZ VIDAL";
//$professors["moduls"]="Servicis de Xarxa i Internet";


$professors = array(
array("nom" => "DAVID ESCRIBANO ALVAREZ","moduls" => "Implantació d'Aplicacions Web i Tutoria Segon"),
array("nom" => "ANTONIO CAPILLA ALONSO", "moduls" => "Administració de Sistemes Operatius"),
array("nom" => "MARCOS GALLACH PEREZ", "moduls" => "Administració de Sistemes Gestors de Bases de Dades"),
array("nom" => "CARMEN NADAL FERRANDIZ", "moduls" => "Anglés Tècnic II-S / Horari reservat per a la docència en anglés"),
array("nom" => "JUANA SOLER SANCHEZ", "moduls" => "Empresa i iniciativa emprenedora"),
array("nom" => "MANUEL FERNANDEZ ORTIZ", "moduls" => "Seguretat i Alta Disponibilitat"),
array("nom" => "JORDI JIMENEZ VIDAL", "moduls" => "Servicis de Xarxa i Internet")
);

print_r($professors);

print("<hr>");

//Exercici 4

print( "<h1> Exercici 4 </h1>" );

$cistella1 = ["nom" => "Cesta Gourmands","preu" => "275€","img" => "img/cesta1.png"];
$cistella2 = ["nom" => "Cesta Chocolatera","preu" => "225€","img" => "img/cesta2.png"];
$cistella3 = ["nom" => "Cesta Diamante","preu" => "89€","img" => "img/cesta3.png"];
$cistella4 = ["nom" => "Cesta Chocolatera","preu" => "240€","img" => "img/cesta4.png"];


print("<p>Nom: ".$cistella1["nom"]." Preu: ".$cistella1["preu"]."</p>");




?>

<img src="img/cesta1.png" alt="cesta1" width="200px" height="200px">


<?php

$cistella1 = ["nom" => "Cesta Gourmands","preu" => "275€","img" => "img/cesta1.png"];
$cistella2 = ["nom" => "Cesta Chocolatera","preu" => "225€","img" => "img/cesta2.png"];
$cistella3 = ["nom" => "Cesta Diamante","preu" => "89€","img" => "img/cesta3.png"];
$cistella4 = ["nom" => "Cesta Chocolatera","preu" => "240€","img" => "img/cesta4.png"];

print("<p>Nom: ".$cistella2["nom"]." Preu: ".$cistella2["preu"]."</p>");


?>

<img src="img/cesta2.png" alt="cesta1" width="200px" height="200px">

<?php

$cistella1 = ["nom" => "Cesta Gourmands","preu" => "275€","img" => "img/cesta1.png"];
$cistella2 = ["nom" => "Cesta Chocolatera","preu" => "225€","img" => "img/cesta2.png"];
$cistella3 = ["nom" => "Cesta Diamante","preu" => "89€","img" => "img/cesta3.png"];
$cistella4 = ["nom" => "Cesta Chocolatera","preu" => "240€","img" => "img/cesta4.png"];

print("<p>Nom: ".$cistella3["nom"]." Preu: ".$cistella3["preu"]."</p>");

?>

<img src="img/cesta3.png" alt="cesta1" width="200px" height="200px">


<?php

$cistella1 = ["nom" => "Cesta Gourmands","preu" => "275€","img" => "img/cesta1.png"];
$cistella2 = ["nom" => "Cesta Chocolatera","preu" => "225€","img" => "img/cesta2.png"];
$cistella3 = ["nom" => "Cesta Diamante","preu" => "89€","img" => "img/cesta3.png"];
$cistella4 = ["nom" => "Cesta Chocolatera","preu" => "240€","img" => "img/cesta4.png"];

print("<p>Nom: ".$cistella4["nom"]." Preu: ".$cistella4["preu"]."</p>");

?>


<img src="img/cesta4.png" alt="cesta1" width="200px" height="200px">


</body>
</html>