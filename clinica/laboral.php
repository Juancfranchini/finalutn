<!DOCTYPE html>
<html lang ="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabaja con nosotros</title>
    <link rel="stylesheet" href="laboral.css">
</head>

<body>

    <header class="header">
        <nav>
            <ul class="header_menu"> 
                <li><a href="index.php"> Inicio </a></li>
                <li><a href="#"> Contacto </a></li>
                <li><a href="#"> Consultas </a> </li>
                <li><a href="laboral.php">Trabaja con nosotros </a></li>
            </ul>
            <div class="telefonos">
                <li> 011 4663-9270 </li>
                <li> 011 4660-0884 </li>
                <li> 011 4660-2476 </li>
            </div>
            <div class="logo_clinica">
                <img src="" alt="logo de clinica"> 
            </div>
        </nav>
    </header>
    <section class='contacto_formulario'>
        <h1> Sumate a nuestro equipo </h1>
        <h3> Completa el formulario </h3>
        <div class='caja_formulario'>
            <form action='enviarconsulta.php' method='post'>
                <p>Nombre: <input type='text' name='nombre' class='contacto_input' aria-placeholder='nombre'> </p>
                <p>Apellido:<input type='text' name='apellido' class='contacto_input' aria-placeholder='apellido'></p>
                <p>Puesto laboral:<input type='text' name='puesto_laboral' class='contacto_input' ariaplaceholder='puesto_laboral'></p>
                <p>Email:<input type='text' name='email' class='contacto_input' aria-placeholder='email'></p>
                <p>CV:<input type='text' name='curriculum' class='contacto_input' ariaplaceholder='curriculum'></p>
                <p>Mensaje:<textarea name="mensaje" id="" cols="70" rows="10">  </textarea></p>
                <input type='submit' value='Enviar solicitud' class='contacto.btn'>
                <?php
                if(isset($_GET['ok']))
                echo 'Su solicitud se ha enviado con exito';
                ?>
        </div>

    </section>
    


    <footer class="footer">
        <div class="contenido_footer">
            <h5> @ Matecalri SRL. Reservado todos los derechos</h5>
        </div>
    </footer>


</body>
</html>