<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atutenticacion</title>
</head>
<body>
    
<?php
session_start();
//acceso a la base de datos
include("conexion.php");
// validacion de datos en cliente, comprobamos que email y contraseña NO sean correctas
if (!isset($_POST["username"], $_POST["password"])) {
    //si no lo son dará error y el codigo reeconducirá siempre a la pagina de incicio
    header("Location:paginaincio.php");
}
//Evitar inyecciones con MYSQLi
if ($stmt = $conexion->prepare('SELECT id_usuario, password FROM `USUARIO` WHERE email =?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();


}
//validar datos si lo escrito coincide con la base de datos
$stmt->store_result();
if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $password);
    $stmt->fetch();

    //si la cuenta existe, validar contraseña
    if ($_POST["password"] == $password) {
        //si contraseña es = a contraseña se crea la sesion
        session_regenerate_id();
        $_SESSION["loggedin"] == TRUE;
        $_SESSION["name"] == $_POST["username"];
        $_SESSION["id"] == $id;
        header("Location: index.php");
     //el programa muestra este error en caso de que la contraseña esté mal puesta. con la posibilidad de volver a la pagina incial    
    }else{
        echo"Contraseña incorrecta";?>
        <br/>
        <a href="paginaincio.php">Pagina inicio</a>
        
<?php 
//este else es para que en caso de que contraseña y usuarios no sean correctos que siempre mueste la pagina para loguearse   
    }
} else {
    echo "Usuario incorrecto";
    header("Location:paginaincio.php");
}

$stmt->close();
?>
</body>
</html>