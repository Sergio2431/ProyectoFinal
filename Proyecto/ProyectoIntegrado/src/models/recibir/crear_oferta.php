<?php
require_once __DIR__.'/../../../vendor/autoload.php';
use Daw\models\classes\Servicio;
 ?>
<?php

$nombre=$_POST['Nombre'];
$horas=$_POST['Horas'];
$precio=$_POST['Precio'];
$descripcion=$_POST['Descripcion'];
//Objeto Ente
$servicio = new Servicio();

//Insertar oferta
$servicio->insertServicio($nombre, $horas, $precio,$descripcion,"programacion");

?>
