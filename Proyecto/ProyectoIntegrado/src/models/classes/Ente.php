<?php
namespace Daw\models\classes;
use Daw\models\classes\Table;
/**
 *
 */
class Ente extends Table
{
  function __construct()
  {
    parent::__construct();
  }
  public function findAllUsuario()
  {
    return parent::find("SELECT * FROM ente ");
  }

  public function findUsuarioByNif($nif)
  {
    return parent::find("SELECT * FROM ente WHERE Name=$nif");
  }

  public function insertUsuario($_nif,$_nombre,$_apellidos,$_telefono, $_correo, $_direccion, $_contrasenya)
  {
    $sql ="INSERT INTO ente (NIF,Nombre, Apellidos,Telefono, Email, Direccion ,Contrasenya)
      VALUES ('$_nif','$_nombre','$_apellidos','$_telefono','$_correo','$_direccion','$_contrasenya')";
     return parent::insert($sql);
  }
/*
  public function updateUsuario($_usuario,$_nombre,$_apellidos, $_user_name, $_contrasenya,$_edad, $_curso, $_puntuacion, $_correo)
  {
    $sql ="UPDATE  Usuarios
        SET nombre='$_nombre',apellidos='$_apellidos',usuario='$_user_name',contrasenya='$_contrasenya',edad='$_edad',curso='$_curso',
          puntuacion='$_puntuacion',correo='$_correo'
        WHERE nombre='$_usuario'";
     return parent::update($sql);
  }

  public function deleteUsuario($_nombre)
  {
      $sql = "DELETE FROM Usuarios WHERE nombre='$_nombre'";
       return parent::update($sql);
  }
*/
}
 ?>
