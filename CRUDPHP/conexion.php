<?php
//conexión tipo mysqli 
$conexion=new mysqli("localhost", "root", "", "crud_php");
$conexion->set_charset("utf8");

if(mysqli_connect_errno()){
    //si hay error que muestre el sigueinte error
    exit('Fallo en la conexión' . mysqli_connect_errno() );
}
?>