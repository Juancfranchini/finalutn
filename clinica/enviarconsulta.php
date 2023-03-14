<?php

$nombre_form = $_POST['nombre']; 
$apellido_form = $_POST['apellido'];
$email_form = $_POST['email'];
$mensaje_form = $_POST['mensaje'];




// conexion a base de datos // 



//password webhost D9zV0[-q=&HZqk1t //

//   conexion a base de datos local    $conexion = mysqli_connect('localhost', 'root', '', 'clinicasm') or exit('no connection available');

// conexion al servidor webhost
$conexion = mysqli_connect('localhost', 'id20037437_juanfranchini', 'D9zV0[-q=&HZqk1t', 'id20037437_clinicasm') or exit('no connection available');

mysqli_query ($conexion, "INSERT INTO formulariosrrhh VALUES (DEFAULT,'$nombre_form' ,'$apellido_form', '$email_form', '$mensaje_form')");


header ('location:laboral.php?ok');

mysqli_close ($conexion);
