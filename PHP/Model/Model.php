
<?php

$Nombre = $_POST["Nombre"];
$Email = $_POST["Email"];
$Password = $_POST["Password"];

    


class Model_Usuarionuevo {

    public $Nombre;
    public $Email;
    public $Password;


 public function __construct($Nombre,$Email,$Password){


 $this->Nombre = $Nombre;
 $this->Email = $Email;
 $this->Password = $Password;
 
 }

 //Funciones o métodos
 function setNombre($Nombre){
    $this->Nombre = $Nombre;
    }
    function getNombre(){
    return $this->Nombre;
    }
    function setEmail($Email){
    $this->Email = $Email;
    }
    function getEmail(){
    return $this->Email;
    }
    function setPassword($Password){
    $this->Password = $Password;
    }
    function getPassword(){
    return $this->Password;
    }
    }


    require("/Users/polar/OneDrive/Documentos/GitHub/MuozFelipe.github.io/PHP/Controller/Controller.php");

    ?>
   

