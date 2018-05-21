<?php

$conector = new mysqli("localhost", "root", "", "proyecto_integrado(freelancer)");
if ($conector->connect_errno) {
  echo "Fallo al conectar a MySQL: " . $conector->connect_error;
}else{
  $oferta_select=$_POST['seleccionar_oferta'];
  $oferta=$_POST['Oferta'];

  //buscar las ofertas del tipo seleccionado
  echo "oferta_search ".$oferta_select."Oferta ".$oferta;

  $conector->query("UPDATE tipo_oferta SET oferta='$oferta' WHERE oferta='$oferta_select'");

  }
  header('Location: listado_ofertas.php');
 ?>
