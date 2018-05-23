<?php
namespace Daw\models\classes;
use Daw\models\classes\Table;
/**
 *
 */
class Sesion extends Table
{
  private $nif;

  function __construct()
  {
    parent::__construct();
    $this->nif="";
   
  }
  public function login($_nif)
  {
    session_start();
    if (!isset($_SESSION['$_nif']))
    {
      $_SESSION['$_nif'] = 0;
    }
    else
    {
      $_SESSION['$_nif']++;
      $this->nif=$_nif;
      $this->loginNIF($_nif);
    }
  }

  //busqueda del nif para el logeo
  public function loginNIF($_nif)
  {
    return parent::find("SELECT * FROM ente WHERE NIF='$_nif'");
  }

  //nos devuelve la contraseña encriptada
  public function returnPass($_nif)
  {
    return parent::find("SELECT Contrasenya FROM ente WHERE NIF='$_nif'");
  }

//busqueda del nif para el logeo
  public function loginSearch($_nif,$_pass)
  {
    return parent::find("SELECT * FROM ente WHERE NIF='$_nif' and Contrasenya = '$_pass'");
  }


  public function destroy()
    {
        if ( $this->sessionState == self::SESSION_STARTED )
        {
            $this->sessionState = !session_destroy();
            unset( $_SESSION );
            
            return !$this->sessionState;
        }
        
        return FALSE;
    }

    public function sesionNifReturn()
    {
        return $this->nif;
    }

}
 ?>
