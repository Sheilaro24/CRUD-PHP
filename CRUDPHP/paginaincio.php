<!doctype html>
<html lang="en">
<head>
    <title>Pagina Inical</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <script src="https://kit.fontawesome.com/42756ad83d.js" crossorigin="anonymous"></script><!--pagina para iconos-->
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        h2,
        h1,
        h3 {
            text-align: center;
        }

        p {
            text-align: center;
        }

        body {
            background-image: url("libro.jpg");
        }
    </style>
</head>
<body>
    <?php
    include("conexion.php");

    ?>
    <!--FORMULARIO PARA INICIAR SESIÓN EN LA AGENDA VIRTUAL-->
    <div class="container-fluid">
        <div class="login">
            <div class="col-lg-12 col-md-12 col-sm-12 py-3">
                <br />
                <br />
                <br />
                <h1>Agenda virtual</h1>
                <h3>Iniciar Sesión</h3>
                <form class="col-lg-4 col-md-4 col-sm-12 mx-auto text-center py-3" method="post" action="autenticacion.php">
                    <div class="mb-3">
                        <label for="usuario"><i class="fas fa-user"></i></label>
                        <input type="text" name="username" placeholder="Email" id="usermane" require>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"><i class="fas fa-lock"></i></label>
                        <input type="password" name="password" placeholder="Contraseña" id="password" require>
                    </div>
                    <input type="submit" value="Acceder">
                </form>
            </div>
        </div>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>