<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dado.css">
    <title>Document</title>
</head>
<body>
    
<?php

print("<h1>Exercici 1</h1>");

$dado1 = rand(1, 6);
$dado2 = rand(1, 6);

print("<p>");
print ("<img src='img/$dado1.svg' alt=$dado1 width='200px' height='200px'>");
print ("<img src='img/$dado2.svg' alt=$dado2 width='200px' height='200px'>");
print("</p>");

if ($dado1 == $dado2) {
    print "  <p>Ha sacado una pareja de $dado1.</p>\n";
} else {
    print "  <p>No ha sacado pareja. El valor más alto es " . max($dado1, $dado2) . ".</p>\n";
}

print("<hr>");
print("<h1>Exercici 2</h1>");

$dado1 = rand(1, 6);
$dado2 = rand(1, 6);

print("<p>");
print("<h3 class='cab'>Jugador 1</h3>");
print("<h3 class='cab2'>Jugador 2</h3>");
print ("<img class='red' src='img/$dado1.svg' alt=$dado1 width='200px' height='200px'>");
print ("<img class='blue' src='img/$dado2.svg' alt=$dado2 width='200px' height='200px'>");
print("</p>");

if ($dado1 > $dado2) {
    print ("<p>Ha ganado el jugador 1</td></p>");
} elseif ($dado1 < $dado2) {
    print ("</p>Ha ganado el jugador 2</td></p>");
} else {
    print ("<p>Han empatado</td></p>");
}

print("<hr>");
print("<h1>Exercici 3</h1>");

$dado1a = rand(1, 6);
$dado1b = rand(1, 6);
$dado2a = rand(1, 6);
$dado2b = rand(1, 6);

print("<h3 class='cab3'>Jugador 1</h3>");print("<h3 class='cab4'>Jugador 2</h3>");
print ("<img class='red' src='img/$dado1a.svg' alt='$dado1a' width='200px' height='200px'>");
print ("<img class='red' src='img/$dado1b.svg' alt='$dado1b' width='200px' height='200px'>");
print ("<img class='blue' src='img/$dado2a.svg' alt='$dado2a' width='200px' height='200px'>");
print ("<img class='blue' src='img/$dado2b.svg' alt='$dado2b' width='200px' height='200px'>");


$total1 = $dado1a + $dado1b;
$total2 = $dado2a + $dado2b;

if ($dado1a == $dado1b && $dado2a == $dado2b) {
    if ($dado1a > $dado2a) {
        print "<p>Ha ganado el jugador 1</p>";
    } elseif ($dado1a < $dado2a) {
        print "<p>Ha ganado el jugador 2</p>";
    } else {
        print "<p>Han empatado</p>";
    }
} elseif ($dado1a == $dado1b) {
    print ("<p>Ha ganado el jugador 1</p>");
} elseif ($dado2a == $dado2b) {
    print ("<p>Ha ganado el jugador 2</p>");
} elseif ($total1 > $total2) {
    print ("<p>Ha ganado el jugador 1</p>");
} elseif ($total1 < $total2) {
    print ("<p>Ha ganado el jugador 2</p>");
} else {
    print ("<p>Han empatado</p>");
}


print("<hr>");
print("<h1>Exercici 4</h1>");

$dado1 = rand(1, 6);
$dado2 = rand(1, 6);
$dado3 = rand(1, 6);

print ("<p>");
print ("<img src='img/$dado1.svg' alt='$dado1' width='200px' height='200px'>");
print ("<img src='img/$dado2.svg' alt='$dado2' width='200px' height='200px'>");
print ("<img src='img/$dado3.svg' alt='$dado3' width='200px' height='200px'>");
print ("</p>");

if ($dado1 == $dado2 && $dado1 == $dado3) {
    print ("<p>Ha sacado un trío de $dado1.</p>");
} elseif ($dado1 == $dado2 || $dado1 == $dado3) {
    print ("<p>Ha sacado una pareja de $dado1.</p>");
} elseif ($dado2 == $dado3) {
    print ("<p>Ha sacado una pareja de $dado2.</p>");
} else {
    print ("<p>El valor más alto es " . max($dado1, $dado2, $dado3) . "</p>");
}

print("<hr>");
print("<h1>Exercici 5</h1>");

$dado1a = rand(1, 6);
$dado1b = rand(1, 6);
$dado1c = rand(1, 6);
$dado2a = rand(1, 6);
$dado2b = rand(1, 6);
$dado2c = rand(1, 6);

print("<h3 class='cab5'>Jugador 1</h3>");print("<h3 class='cab6'>Jugador 2</h3>");
print ("<img class='red' src='img/$dado1a.svg' alt='$dado1a' width='200px' height='200px'>");
print ("<img class='red' src='img/$dado1b.svg' alt='$dado1b' width='200px' height='200px'>");
print ("<img class='red' src='img/$dado1c.svg' alt='$dado1c' width='200px' height='200px'>");
print ("<img class='blue' src='img/$dado2a.svg' alt='$dado2a' width='200px' height='200px'>");
print ("<img class='blue' src='img/$dado2b.svg' alt='$dado2b' width='200px' height='200px'>");
print ("<img class='blue' src='img/$dado2c.svg' alt='$dado2c' width='200px' height='200px'>");


if ($dado1a == $dado1b && $dado1a == $dado1c) {
    $trio1 = $dado1a;
} else {
    $trio1 = 0;
}

if ($dado2a == $dado2b && $dado2a == $dado2c) {
    $trio2 = $dado2a;
} else {
    $trio2 = 0;
}

if ($dado1a == $dado1b || $dado1a == $dado1c) {
    $pareja1 = $dado1a;
} elseif ($dado1b == $dado1c) {
    $pareja1 = $dado1b;
} else {
    $pareja1 = 0;
}

if ($dado2a == $dado2b || $dado2a == $dado2c) {
    $pareja2 = $dado2a;
} elseif ($dado2b == $dado2c) {
    $pareja2 = $dado2b;
} else {
    $pareja2 = 0;
}

$total1 = $dado1a + $dado1b + $dado1c;

$total2 = $dado2a + $dado2b + $dado2c;



if ($trio1 > $trio2) {
    print ("<p>Ha ganado el jugador 1</p>");
} elseif ($trio1 < $trio2) {
    print ("<p>Ha ganado el jugador 2</p>");
} else {
    if ($pareja1 > $pareja2) {
        print ("<p>Ha ganado el jugador 1</p>");
    } elseif ($pareja1 < $pareja2) {
        print ("<p>Ha ganado el jugador 2</p>");
    } else {
        if ($total1 > $total2) {
            print ("<p>Ha ganado el jugador 1</p>");
        } elseif ($total1 < $total2) {
            print ("<p>Ha ganado el jugador 2</p>");
        } else {
            print ("<p>Han empatado</p>");
        }
    }
}


?>



</body>
</html>