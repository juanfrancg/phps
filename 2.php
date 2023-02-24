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
    
    $paresj1=0;
    $imparesj1=0;
    $paresj2=0;
    $imparesj2=0;


print("<p>");

print("<h1>Cartas impar</h1>");

print("<h1>Jugador 1</h1>");

if($_REQUEST["res1"] == 0){
    print("No ha selecionnado ninguna carta");
}
else{

    for($i=0;$i < $_REQUEST["res1"];$i++){
        $numeroj1=rand(1,10);
        print("<img src='cartas/$numeroj1.svg' alt='carta' height='200px' weight='200px'>");
        if($numeroj1 % 2){
            $imparesj1 += 1;
        }
        else{
           $paresj1 += 1;
        }
    }

if($paresj1 == 0){
    print("El jugador 1 no saco ningun par");
}
else{
    print("El jugador 1 saco $paresj1 pares");
}
}

print("</p>");

print("<h1>Jugador 2</h1>");

print("<p>");
if($_REQUEST["res2"] == 0){
    print("No ha selecionnado ninguna carta");
}
else{

    for($i=0;$i < $_REQUEST["res2"];$i++){
        $numeroj2=rand(1,10);
        print("<img src='cartas/$numeroj2.svg' alt='carta' height='200px' weight='200px'>");
        if($numeroj2 % 2){
            $imparesj2 += 1;
        }
        else{
           $paresj2 += 1;
        }
    }

if($paresj2 == 0){
    print("El jugador 2 no saco ningun par");
}
else{
    print("El jugador 2 saco $paresj2 pares");
}
}
print("</p>");

print("<hr>");

print("<h1>Resultats</h1>");

if($paresj1 > $paresj2){
    print("<p>El jugador 1 ha guanyat</p>");
}
elseif($paresj2 > $paresj1){
    print("<p>El jugador 2 ha guanyat</p>");
}
elseif($paresj1 = $paresj2){
    print("<p>Empate</p>");
}
else{
    print("<p>Ninguno selecciono cartas</p>");
}

    ?>

</body>
</html>