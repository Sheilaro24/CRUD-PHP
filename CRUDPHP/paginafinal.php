<?php
// cookie - 
// EXPLICACIÓN DEL CÓDIGO
// mi idea era crear una cookie para que caudno el usuario saliese de la pagina pudiese volver en una hora sin
//necesidad de logearse otra vez,pero el código no me funciona y no encuetro el fallo =(
// el nombre de la cookie es tiempo_loggin con una duración de 300 s
//   setcookie("tiempo_loggin",  time()+300);

// codigo para destruir sesion
session_start();
session_destroy();
header("Location:paginaincio.php");
exit();
