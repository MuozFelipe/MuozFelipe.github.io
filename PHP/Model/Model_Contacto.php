
<?php

$Nombre2 = $_POST["Nombre2"];
$Mensaje = $_POST["Mensaje"];


    


class Model_ContactoNuevo {

    public $Nombre2;
    public $Mensaje;



 public function __construct($Nombre2,$Mensaje){


 $this->Nombre2 = $Nombre2;
 $this->Mensaje = $Mensaje;

 
 }

 //Funciones o métodos
 function setNombre2($Nombre2){
    $this->Nombre2 = $Nombre2;
    }
    function getNombre2(){
    return $this->Nombre2;
    }
    function setMensaje($Mensaje){
    $this->Mensaje = $Mensaje;
    }
    function getMensaje(){
    return $this->Mensaje;
    }
    }


    require("/Users/polar/OneDrive/Desktop/MiAplicacion/PHP/Controller/Controler_Contacto.php");

    ?>
   

