<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP - SoloLearn</title>
  <link rel="stylesheet" href="/Bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/Bootstrap/css/MyCSS.css">
  <script src="/Bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container-fluid">

    <form action="Cliente.php" method="post">
      <div class="row">
        <div class="col-md-3 ">
          <label for="" class="form-label">Nombre Competo</label>
          <input type="text" class="form-control" name="txtNombreCompleto">
        </div>
        <div class="col-md-3 ">
          <label for="" class="form-label">Correo</label>
          <input type="email" class="form-control" name="txtEmail">
        </div>
        <div class="col-md-3 ">
          <label for="" class="form-label">Teléfono</label>
          <input type="phone" class="form-control" name="txtPhone">
        </div>
        <div class="col-md-3 ">
          <label for="" class="form-label">Dirección</label>
          <input type="address" class="form-control" name="txtAddress">
        </div>
      </div>
      <div class="row"><br></div>
      <div class="row">
        <div class="col-md-1">
        <input type="submit" class="btn btn-primary" value="Registrar">
        </div>
       
      </div>
    </form>

  </div>



  <footer class="bg-dark text-center text-white">

    <div class="text-center p-3">
      ©2022 Copyright:
      <a class="text-white" routerLink="../home">srgmejia@icloud.com</a>
    </div>

  </footer>

</body>

</html>