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

if($_REQUEST["oculto"] == 1){
    print("<p class='red'>Quin color sóc?</p>");
}
if($_REQUEST["oculto"] == 2){
    print("<p class='groc'>Quin color sóc?</p>");
}
if($_REQUEST["oculto"] == 3){
    print("<p class='blau'>Quin color sóc?</p>");
}
if($_REQUEST["oculto"] == 4){
    print("<p class='taronja'>Quin color sóc?</p>");
}
if($_REQUEST["oculto"] == 5){
    print("<p class='verd'>Quin color sóc?</p>");
}


if( $_REQUEST["respuesta"] == "roig" && $_REQUEST["oculto"] == 1){
    print("Enhorabona. El color era roig");
}
elseif( $_REQUEST["respuesta"] == "groc" && $_REQUEST["oculto"] == 2){
    print("Enhorabona. El color era groc");
}
elseif( $_REQUEST["respuesta"] == "blau" && $_REQUEST["oculto"] == 3){
    print("Enhorabona. El color era blau");
}
elseif( $_REQUEST["respuesta"] == "taronja" && $_REQUEST["oculto"] == 4){
    print("Enhorabona. El color era taronja");
}
elseif( $_REQUEST["respuesta"] == "verd" && $_REQUEST["oculto"] == 5){
    print("Enhorabona. El color era verd");
}
else{
    if($_REQUEST["respuesta"] != "roig" && $_REQUEST["oculto"] == 1){
        print("No correcte. El color era roig");
    }
    elseif($_REQUEST["respuesta"] != "groc" && $_REQUEST["oculto"] == 2){
        print("No correcte. El color era groc");
    }
    elseif($_REQUEST["respuesta"] != "blau" && $_REQUEST["oculto"] == 3){
        print("No correcte. El color era blau");
    }
    elseif($_REQUEST["respuesta"] != "taronja" && $_REQUEST["oculto"] == 4){
        print("No correcte. El color era taronja ");
    }
    elseif($_REQUEST["respuesta"] != "verd" && $_REQUEST["oculto"] == 5){
        print("No correcte. El color era verd ");
    }
    else{
        print("<p>Error 404</p>");
    }
}



?>



</body>
</html>
