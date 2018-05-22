<?php
require_once __DIR__.'/../../../vendor/autoload.php';
use Daw\models\classes\Sesion;
 ?>
<?php

$nif=$_POST['nif'];
$contrasenya=$_POST['contrasenya'];
//Objeto Sesion
$sesion = new Sesion();

$resultado= $sesion->loginSearch($nif,$contrasenya);

$contar = mysqli_num_rows($resultado);
echo $contar;
if($contar >= 1)
{
    $sesion->login($nif);
    echo "<script type='text/javascript'>alert('Logueado con Éxito');
    window.location='../../../public/index.html';
    </script>";
}

else
   echo "<script type='text/javascript'>alert('Error de Usuario o Contraseña');
   window.location='../../../public/index.html';
   </script>";
?>
