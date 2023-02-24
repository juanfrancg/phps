<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loteria. La bruixeta de la sort</title>
    <link rel="stylesheet" href="ejer4.2.css">
</head>
<body>
<h1 class="titulo">Loteria. La bruixeta de la sort</h1> 
   <hr>
    <h3 class="sub">GENERADOR DE NÚMEROS ALEATORIS</h3>
    <br>
    <p>Utilize el nostre generador de números aleatoris per obtindre la combinació guanyadora a les seues apostes de La Primitiva.</p>
    <p>Sols té que recarregar la web si vol obtindré altra combinació. Molta sort</p>
    <br>
    <h4>Combintació aleatòria</h4>
    <?php
    print "<table border='1'>";
    print "<tr>";
    print "<th>";
    print rand(1, 49);
    print "</th>";
    print "<th>";
    print rand(1, 49);
    print "</th>";
    print "<th>";
    print rand(1, 49);
    print "</th>";
    print "<th>";
    print rand(1, 49);
    print "</th>";
    print "<th>";
    print rand(1, 49);
    print "</th>";
    print "<th>";
    print rand(1, 49);
    print "</th>";
    print "</tr>";
    print "</table>";
    print "<p>Complementari: ";
    print rand(1, 49);
    print "</p>";
    print "<p> Reintegrament: ";
    print rand(1, 9);
    ?>
<hr>
</body>
</html>