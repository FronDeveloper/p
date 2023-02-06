<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center bg-dark">REGISTRO</h1>

    <!---------------------------formulario------------------------------->

    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-4">
        <form class="text-center" action="registro.php" method="POST">

            <div class="form-group mb-2">
                <input class="form-control" type="text" name="nombre" id="txNombre" placeholder="Nombre">
            </div>

            <div class="form-group mb-2">
                <input class="form-control" type="text" name="usuario" id="txUsuario" placeholder="Usuario">
            </div>

            <div class="form-group mb-2">
                <input class="form-control" type="text" name="contrasena" id="txContrasena" placeholder="Contraseña">
            </div>

            <button type="submit" class="btn btn-success">Registrar</button>

        </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>