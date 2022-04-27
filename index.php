<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Vía Central - Desarrollo</title>
  </head>
  <body class="bg-dark">
    
    <nav class="navbar navbar-light bg-dark" style="margin-bottom: 50px;">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="vc_logo_blanco.png" class="img-fluid">
        </a>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3">
          <form class="bg-dark" action="/actions/login.php" method="post">
            <div class="mb-3">
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="usuario@viacentral.cl">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
            </div>
            <div class="d-grid gap-2">
             <button type="submit" class="btn btn-success" name="boton-empecemos" value=1>Empecemos</button>
           </div>
          </form>
        </div>
        <div class="col-md-9 col-lg-9 col-xl-9 col-xxl-9"><img src="inicio.png" class="img-fluid"></div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>