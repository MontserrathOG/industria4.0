<?php
require("Conexion.php");
 
// Creamos una nueva instancia
$query=new Conexion();
$consulta=$query->Insert('usuario', 'usuario,passwd', "'admin','admin'");
if ($consulta==true){
    echo "<h1>registro exitoso</h1>";
}else{
    echo "<h1>hubo algun problema con la conexion a la base</h1>";
}
?>