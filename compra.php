<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle Pedido</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<header>
<nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                RG
            </a>
        </div>
    </nav>
</header>

<body>
    <div class="container text-center"><br>
        <hr>
            <img src="img/yes.png" width="600px">
            <br><br><br>

            <a href="index.php" type="button" class="btn btn-dark">Regresar</a>
            <br><br><br><hr>

            <h3>Detalles del pedido</h3>
            <div class="container">
                <?php
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $calle = $_POST['calle'];
                $ciudad = $_POST['ciudad'];
                $estado = $_POST['estado'];
                $cp = $_POST['cp'];


                echo "Nombre: " . $nombre . " " . $apellido . "<br>";
                echo "<h3>Direccion a entregar: </h3>";
                echo "Calle: " . $calle . "<br>";
                echo "Ciudad: " . $ciudad . "<br>";
                echo "Estado: " . $estado . "<br>";
                echo "CP:     " . $cp . "";

                ?>
            </div>
    </div>
</body><hr><br>

<footer>
        <br>
            <div class="container text-center">
                <h3>REALIZADO POR:</h3>
                <div class="row">
                    <div class="col-md-6">
                        <h3>RESENDIZ GARCIA JUAN DAVID</h3>
                    </div>
                    <div class="col-md-6">
                        <h3>MEDINA RIVERA HERNAN CHARBEL</h3>
                    </div>
                </div>
            </div>
        <br>
    </footer>

</html>