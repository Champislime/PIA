<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>Contactos</title>
       
    </head>
    <body >
       <center>
        <h1>Contactos</h1>
       
        
        	<font size="5" face="arial">
            <?php
            $nombre = $_POST['nombre'];
            $correo = $_POST['email'];
            $gustos = $_POST['gustos'];
            $sugerencias = $_POST['sugerencias'];


            echo "Tus datos han sido registrados " .$nombre."<br><br>";

            echo "Se te enviara mas informacion al correo: ".$correo."<br><br>";

            echo "Tus gustos registrados fueron: ".$gustos."<br><br>";

            echo "Gracias por tus sugerencias: ".$sugerencias."<br><br>";


            ?>

            
        </font>
        <br>
        <a href="index.php">Regresar</a>
        
    </body>
</html>