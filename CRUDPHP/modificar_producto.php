<?php
// MODIFICAR <--- 
include("conexion.php");
// en este caso uso GET para conseguir el valor del id a traves de la URL para luego hacer la consulta
$id = $_GET["id"];
//traer todos los datos del id para que se muestren en el formulario
$sql = $conexion->query("SELECT * FROM PERSONAS WHERE ID_PERSONA = '$id'");
//$datos=$sql->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-image: url("libro.jpg");
        }
    </style>
</head>
<body>
    <form class="col-4 py-3 mx-auto " method="post">
        <h3 class="text-center text-secondary">Modificar prodcutos</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        //recorrer los datos, formulario para modificar 
        include("modificarProducto.php");
        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>"> 
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
            </div>
            <div class="mb-3">
                <label for="dni" class="form-label">DNI:</label>
                <input type="text" class="form-control" name="dni" value="<?= $datos->dni ?>">
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha nacimiento:</label>
                <input type="date" class="form-control" name="fecha" value="<?= $datos->fecha_nacimiento ?>">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo:</label>
                <input type="email" class="form-control" name="correo" value="<?= $datos->correo ?>">
            </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
    </form>

</body>
</html>