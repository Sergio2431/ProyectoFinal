<?php
require_once __DIR__.'/../../../vendor/autoload.php';
use Daw\models\classes\Servicio;


$nombre=$_POST['Nombre'];
$horas=$_POST['Horas'];
$precio=$_POST['Precio'];
$descripcion=$_POST['Descripcion'];
$tipo_servicio=$_POST['tipo_servicio'];

//Objeto Servicio
$servicio = new Servicio();

$servicio->insertServicio($nombre, $horas, $precio,$descripcion,$tipo_servicio);



?>
