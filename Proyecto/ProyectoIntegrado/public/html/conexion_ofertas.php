<?php

$conector = new mysqli("localhost", "root", "", "proyecto_integrado(freelancer)");
if ($conector->connect_errno) {
  echo "Fallo al conectar a MySQL: " . $conector->connect_error;
}else{
  $oferta_search=$_POST['seleccionar_oferta'];
  $oferta=$_POST['Oferta'];

  //buscar las ofertas del tipo seleccionado
  echo "oferta_search ".$oferta_search."Oferta ".$oferta;

  $conector->query("UPDATE usuario SET oferta='$oferta' WHERE oferta='$oferta_search'");

  }
  header('Location: listado_ofertas.php');
 ?>
