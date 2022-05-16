<?php
echo'
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PIA</title>
    <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
    <!-- JavaScript -->
        <script src="js/script.js"></script>
    <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    </html>';

echo '<nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                RG
            </a>
            <div class="text-center reloj">
                <form>
                    <h1>HORA ACTUAL:</h1>
                    <input type="text" size="7" name="reloj">
                </form>
            </div>
        </div>
    </nav>';
echo '<hr>';
//echo '<div class="container text-center titulo"><h1>Lenguajes de Programación - 014</h1></div>';
echo '<div class="container">
                <div class="row text-center">
                    <div  class="col-md-4">
                        <h1>Modelo 1</h1>
                        <br>
                        <h4>Autonomía: 560km</h4>
                        <h4>Velocidad máxima: 355km/h</h4>
                        <h4>0-100 km/h: 1.9s</h4>
                        <br>
                        <p>
                            Los faros, con tecnología full LED, ofrecen una firma lumínica muy característica
                            que ha ido evolucionando ligeramente con el paso de los años, a lo que hay que añadir
                            es imagen en la que se ha prescindido de las entradas de aire y se ha aprovechado para
                            realizar un frontal lo más cerrado posible con el objetivo de ganar en eficiencia
                            aerodinámica y en autonomía.
                        </p>
                        <br>
                        <a href="paginaCompra.php" class="btn btn-dark">Comprar</a>
                    </div>
                    <div class="col-md-8">
                        <img src="img/modelo 1.jfif" class="img-fluid" alt="01">
                    </div>
                </div>
                <hr>
            </div>';

echo '<div class="container">
            <hr>
            <div class="row text-center">
                <div class="col-md-8">
                    <img src="img/modelo 2.jfif" class="img-fluid" alt="02">
                </div>
                <div  class="col-md-4">
                    <h1>Modelo 2</h1>
                    <br>
                    <h4>Autonomía: 530km</h4>
                    <h4>Velocidad máxima: 255km/h</h4>
                    <h4>0-100 km/h: 3.7s</h4>
                    <br>
                    <p>
                        En su interior uno encuentra más espacio y hasta tres filas de asientos para siete pasajeros. 
                        Lleva una batería de 90 kWh y una larga lista de equipamiento que incluye aparcamiento autónomo, asientos 
                        de cuero calefactables, luces diurnas, frenada de emergencia automática, tercera fila de asientos plegable, 
                        acceso sin llave y portón trasero automático.
                    </p>
                    <br>
                    <a href="paginaCompra1.php" class="btn btn-dark">Comprar</a>
                </div>
            </div>
            <hr>
        </div>';

echo '<div class="container">
        <hr>
        <div class="row text-center">
            <div  class="col-md-4">
                <h1>Modelo 3</h1>
                <br>
                <h4>Autonomía: 511km</h4>
                <h4>Velocidad máxima: 221km/h</h4>
                <h4>0-100 km/h: 5.1s</h4>
                <br>
                <p>
                    El Modelo 3 es un SUV compacto y 100% eléctrico, del segmento D. Se trata de la versión crossover 
                    del Tesla Model 3, con quien comparte tecnología, plataforma, mecánicas y un 75% de los componentes. El Modelo 3 se 
                    presentó en marzo de 2019.
                </p>
                <br>
                <a href="paginaCompra2.php" class="btn btn-dark">Comprar</a>
            </div>
            <div class="col-md-8">
                <img src="img/modelo 3.jfif" class="img-fluid" alt="03">
            </div>
        </div>
    </div>';
echo '<hr>';

echo '<div class="container text-center">
        <h1>Contáctanos</h1>
            <form action="contacto.php" method="post">
                <h5>Nombre: </h5>
                    <input type="text" name="nombre" class="box form-control">
                <h5>Correo: </h5>
                    <input type="email" id="email" name="email" multiple class="form-control">
                <h5>Gustos: </h5>
                    <input type="text" name="gustos" class="box form-control">
                <h5>Sugerencias: </h5>
                    <input type="text" name="sugerencias" class="box form-control"><br>
                    <input type="submit" value="Enviar" class="button btn btn-dark">
            </form>
        </p>
    </div>';

echo '<hr>';
echo'<footer>
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
    </footer>';
?>