<?php
//CREAR <--- 
    if(!empty($_POST["btnregistrar"])){
        //  verificar que el usuario meta los datos, estos datos son obligatorios si no saltarán alguno de los esls siguientes
        if(!empty($_POST["nombre"]) && ($_POST["apellido"]) && ($_POST["dni"]) && ($_POST["fecha"]) && ($_POST["correo"])){
            echo "Datos correctos";
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $dni=$_POST["dni"];
            $fecha=$_POST["fecha"];
            $correo=$_POST["correo"];

            //consulta sql
            $sql=$conexion->query("INSERT INTO PERSONAS (nombre, apellido, dni, fecha_nacimiento, correo) VALUES('$nombre', '$apellido', '$dni', '$fecha' , '$correo')");
            if($sql ==1){
                // saltará un aviso de registro completado en caso de que todo este OK
                echo "<div class='alert alert-success'>Registro completado correctamente</div>";
            }else{    
                // Si hay algún error saltará una alerta la clual avisa de que hay error
                echo "<div class='alert alert-danger'>Error al registrar</div>";
            }
            // si faltan datatos saltara una alerta, ya que todos los datos son olbigatorios
        }else{
            echo "<div class='alert alert-warning'>Atención! Alguno de los campos está vacío</div>";
    }
}

?>