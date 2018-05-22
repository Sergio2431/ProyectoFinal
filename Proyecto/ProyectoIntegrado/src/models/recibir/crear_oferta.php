<?php
require_once __DIR__.'/../../../vendor/autoload.php';
use Daw\models\classes\Servicio;
 ?>
<?php

$nombre=$_POST['Nombre'];
$horas=$_POST['Horas'];
$precio=$_POST['Precio'];
$descripcion=$_POST['Descripcion'];
$tipo_trabajo=$_POST['tipo_trabajo'];
//Objeto Servicio
$servicio = new Servicio();

if($tipo_trabajo=="programacion")
    $tipo_trabajo=1;
    else if($tipo_trabajo == "disenyo")
        $tipo_trabajo=2;
        else if($tipo_trabajo == "sistemas")
        $tipo_trabajo=3;
//Insertar oferta
$servicio->insertServicio($nombre, $horas, $precio,$descripcion,$tipo_trabajo);

?>
