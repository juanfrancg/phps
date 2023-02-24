<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Formulari</h3>
        <form action="accion.php" method="post">
            <p>Su nombre: <input type="text" name="nombre"/></p>
            <p>Su edad: <input type="number" name="edad"/></p>
                <p>Disponibilidat per desplaçament <input type="checkbox" name="desplaçament" value="si"></p>
                <p>Disponible:
                    cotxe <input type="radio" name="disponible" value="cotxe">
                    moto <input type="radio" name="disponible" value="moto">

                </p>
                <p>
                <select name="menu_ciutat">
                    <option>Valencia</option>
                    <option>Madrid</option>
                    <option>Barcelona</option>
                <select>       
                </p>    

            <p>Guardar dades en base de dades:
            <input type="submit" name="respuesta" value="si">
            <input type="submit" name="respuesta" value="no">
            </p>
            <p>Subir Imagen 
            <input name="img" type="image" src="200px" alt="200px">
            </p>


            <input type="reset" value="reset">
        </form>

</body>
</html>