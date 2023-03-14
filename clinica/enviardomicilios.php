<?php

$nombre_form = $_POST['nombre']; 
$apellido_form = $_POST['apellido'];
$beneficio_form = $_POST['beneficio'];
$edad_form = $_POST['edad'];
$telefono_form = $_POST['telefono'];
$mensaje_form = $_POST['mensaje'];




// conexion a base de datos // 

$conexion = mysqli_connect('localhost', 'id20037437_juanfranchini', 'D9zV0[-q=&HZqk1t', 'id20037437_clinicasm') or exit('no connection available');

mysqli_query ($conexion, "INSERT INTO pedidosdomiciliarios VALUES (DEFAULT,'$nombre_form' ,'$apellido_form', '$beneficio_form',  '$edad_form', '$telefono_form', '$mensaje_form')");


header ('location:atdomiciliaria.php?ok');

mysqli_close ($conexion);
