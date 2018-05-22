<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TruequeFacil</title>
    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../Imagenes/favicon.ico">
    <!-- Custom styles for this template -->
    <link href="../css/mostrar_usuarios.css" rel="stylesheet">
  </head>

  <body>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Ofertas</h1>

      <center>
        <form name="" method="post" action="listado_ofertas.php" >
          <select name="0"> Elige un tipo de Oferta </option>
          <option value="0"> ----Elige un tipo de Oferta---- </option>
          <option value="1">Diseñador Web</option>
          <option value="2">Programador</option>
          <option value="3">Administración y direccion de Empresas</option>
          <option value="4">Educación Infantil</option>
          <option value="5">Preparador Físicos</option>
          <option value="6">Medicina</option>
          <option value="7">Mécanica</option>
          <option value="8">Psicologia</option>
          <option value="9">Educación Secundaria</option>
          <input type="submit" name="buscar" value="Buscar" />
        </form>
      </center> <br><br>

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="../index.html">Inicio</a>
          </li>
          <li class="breadcrumb-item active">Ofertas</li>
        </ol>

      <!-- Marketing Icons Section -->
      <div id="carta" class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Tipo de oferta</h4>
            <div class="card-body">
              <p class="card-text">Nombre del trabajador</p>
              <label>----------------------------------------</label>
              <p class="card-text">Telefono del trabajador</p>
              <label>----------------------------------------</label>
              <p class="card-text">Correo del trabajador</p>
              <label>----------------------------------------</label>
              <p class="card-text">Horas de trabajo diario </p>
              <label>----------------------------------------</label>
              <p class="card-text">Costo por hora</p>
              <label>----------------------------------------</label>
              <p class="card-text">Descripción del trabajo</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Contactar</a>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <input type="button" value="Volver" onclick="window.location.href='../index.html'"> <br><br><br>
  </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; FLORIDA UNIVERSITARIA</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
