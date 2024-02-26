<?php
//BORRAR <---
include("conexion.php");
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query("DELETE FROM PERSONAS WHERE ID_PERSONA=$id");
    if ($sql == 1) {
        //he decidido meter aquí la sesion para cuando un usuario se borre reedirija a la pagina principal
        //siempre que se borre correctamente la sesion funcionará
        session_start();
        $_SESSION["eliminar"] = true;
        header("Location:index.php");
        exit();
    } else {
        echo "<div class='alert alert-danger>Error al eliminar</div>";
    }
}
