<?php
include("conexion.php");
//En campbio aquí voy a usar POST porque los datos viene el formulario.
if(!empty($_POST["btnregistrar"])){
    // validar que los campos no estén vacíos, todos tienen que estar llenos
    if(!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["dni"]) && !empty($_POST["fecha"]) && !empty($_POST["correo"])){
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        // MODIFICAR <---
        // consulta sql
        $sql = $conexion->prepare("UPDATE PERSONAS SET NOMBRE=?, APELLIDO=?, DNI=?, FECHA_NACIMIENTO=?, CORREO=? WHERE ID_PERSONA=?");
        // ejecutar la consulta, consulta preparada
        $sql->bind_param("sssssi", $nombre, $apellido, $dni, $fecha, $correo, $id);
        $sql->execute();

        // verificar
        if ($sql->affected_rows>0) {
            header("Location: index.php");
            exit();
        //en caso de algun error que salte el nombre del error    
        } else {
            echo "<div class='alert alert-danger'>Error al modificar: " . $conexion->error . "</div>";
        }
     // para avisar que quedan campos vacion, ya que hay que llenar todos   
    } else {
        echo "<div class='alert alert-warning'>Atención! Alguno de los campos está vacío</div>";
    }
}
?>