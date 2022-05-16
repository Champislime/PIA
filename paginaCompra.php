<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pago</title>
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
</header><br>

<body>
    <div class="container">
      <div class="row  text-center">
        <div class="col-md-6">
            <h1>Modelo 1</h1><br>
              <img src="img/modelo 1.jfif" class="img-fluid" alt="01"> <br>
              <img src="img/modelo 1-1.jfif" class="img-fluid" alt="01-1">
        </div>
        <div class="col-md-6">
            <form action="compra.php" method="post">
              <h1>Ingrese detalles del pedido</h1><br>
              <div>
                <div>
                  <label for="f-name">Nombre: </label>
                  <input type="text" name="nombre" class="form-control">
                </div>
                <div>
                  <label for="l-name">Apellido: </label>
                  <input type="text" name="apellido" class="form-control">
                </div>
              </div>
              <div>
                <label for="name">Calle: </label>
                <input type="text" name="calle" class="form-control">
              </div>
              <div>
                <div>
                  <label for="city">Ciudad: </label>
                  <input type="text" name="ciudad" class="form-control">
                </div>
                <div>
                  <label for="state">Estado: </label>
                  <input type="text" name="estado" class="form-control">
                </div>
                <div>
                  <label for="zip">Codigo Postal: </label>
                  <input type="text" name="cp" class="form-control">
                </div>
              </div><br>
              <h1>Información de pago</h1><br>
              <div>
                <label for="card-num">Número de tarjeta de crédito: </label>
                <input type="text" name="tarjeta" class="form-control">
              </div>
              <div>
                <div>
                  <label for="card-num">Fecha de expiración: </label>
                  <input type="text" name="expiracion" class="form-control">
                </div>
                <div>
                  <label for="card-num">CVV: </label>
                  <input type="text" name="cvv" class="form-control">
                </div>
              </div><br>
              <div>
                <button class="btn btn-dark">Comprar</button>
                <a href="index.php" type="button" class="btn btn-dark">Regresar</a>
              </div>
          </form>
        </div>
      </div>
    </div><br>
</body>

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