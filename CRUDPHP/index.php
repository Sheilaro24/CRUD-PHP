<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/42756ad83d.js" crossorigin="anonymous"></script><!--pagina para iconos-->
    <style>
        p {
            text-align: center;
        }

        body {
            background-image: url("libro.jpg");
        }
    </style>
</head>

<body>
    <script>
        // pantalla de aviso a la hora de borrar
        function eliminar() {
            var respuesta = confirm("Estás de acuerdo?");
            return respuesta
        }
    </script>
    <?php
    include("conexion.php");
    include("borrar.php");
    session_start();
    
    ?>
    <div class="container-fluid">
        <div class="row">
            <br />
            <br />
            <form class="col-lg-4 col-md-4 col-sm-12 py-3" method="post">
                <h3>Registro</h3>
                <?php
                //llamada a la conexcíon y registro
                include("conexion.php");
                include("registro_persona.php");
                ?>
                <!--formulario para crear registos-->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellido:</label>
                    <input type="text" class="form-control" name="apellido">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">DNI:</label>
                    <input type="text" class="form-control" name="dni">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha nacimiento:</label>
                    <input type="date" class="form-control" name="fecha">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo:</label>
                    <input type="email" class="form-control" name="correo">
                </div>
                <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registar</button>

            </form>
            <div class="col-lg-8 col-md-8 col-sm-12 p-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">APELLIDO</th>
                            <th scope="col">DNI</th>
                            <th scope="col">FECHA DE NACIMIENTO</th>
                            <th scope="col">CORREO</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include("conexion.php");
                        //LEER <-- 
                        $sql = $conexion->query("SELECT * FROM PERSONAS");
                        //los recorremos con while y con fetch _object obrengo los resultados de las filas
                        //formualrio donde se leen los registros creados
                        while ($datos = $sql->fetch_object()) { ?>
                            <tr>
                                <td><?= $datos->id_persona ?></td>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->apellido ?></td>
                                <td><?= $datos->dni ?></td>
                                <td><?= $datos->fecha_nacimiento ?></td>
                                <td><?= $datos->correo ?></td>

                                <td>
                                    <a href="modificar_producto.php?id=<?= $datos->id_persona ?>" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a> <!--editar-->
                                    <a onclick="return eliminar()" href="borrar.php?id=<?= $datos->id_persona ?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a> <!--borrar-->
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                <p>Para salir de tu agenda pulsa aquí:</p>
                <a href="paginafinal.php" class="btn btn-secondary">Salir</a>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>