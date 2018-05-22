<?php
namespace Daw\models\classes;
use Daw\models\classes\Table;
/**
 *
 */
class Servicio extends Table
{
  function __construct()
  {
    parent::__construct();
  }
  public function findServicios()
  {
    return parent::find("SELECT * FROM servicio ");
  }

/*
  public function findBaseDatos($_busqueda, $_valor)
  {
    //$sql=("SELECT $busqueda FROM servicio WHERE '$busqueda'=$valor");
    return parent::find("SELECT * FROM servicio WHERE $_busqueda='$_valor'");
  }*/



  public function insertServicio($Nombre, $Horas, $Precio, $Descripcion)
  {
    $sql ="INSERT INTO servicio (Nombre, Horas,Precio, Descripcion)
    VALUES ('$Nombre','$Horas','$Precio','$Descripcion')";
     return parent::insert($sql);
  }
  public function tipos_trabajo(){
    $sql ="SELECT * FROM tipo";
    echo "<div id='lista'>";
    echo "<select id='lista2'>";
    foreach ($listado as $fila) {
      echo "<option>";
      echo "USUARIO: ". $fila["nombre"]." ". $fila["apellidos"]." ". $fila["edad"]." años ". "Curso: ".$fila["curso"]."<br>";
    }
    echo "</select>";
    echo "</div>";
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
