<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TruequeFacil</title>
    <link href="../css/form.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../Imagenes/favicon.ico">
    <link href="http://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css">

  </head>
  <body>
    <div class="form-style-10">
  <h1>Inicio de Sesión</h1>
  <form class="" action="../../src/models/recibir/login.php" method="post">
      <div class="inner-wrap">
          <label>NIF <input type="text" name="nif" required /></label>
          <label>Contraseña <input type="password" name="contrasenya" required /></label>
          <br><br>
          <form name="inicioSesion" action="" method="post">
          <input type="button" value="Enviar" onclick="window.location.href='http://localhost/Proyecto%20Integrado/Proyecto_final/Proyecto/ProyectoIntegrado/public/inicioSesion.html'" />
          <input type="reset" id="limpiar" value="Limpiar">
          <input style="float:right" type="button" value="Volver" onclick="window.location.href='../index.html'">
      </div>

      <!--<div class="button-section">
       <span class="privacy-policy">
       <input type="checkbox" required name="field7">Aceptar términos y condiciones de uso.
       </span>
     </div>-->
  </form>
  </div>

  </body>
</html>
