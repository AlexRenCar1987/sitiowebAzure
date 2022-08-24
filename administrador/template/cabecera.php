<?php

session_start();

if(isset($_SESSION['Acceso'])!="ok"){

    
    header('Location:../index.php');

}else{

if(isset($_SESSION['Acceso'])=="ok"){




}


}





?>


<!doctype html>
<html lang="es">

<head>
    <title>Administracion Arc Technology</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>

<?php $url="http://tiendayserviciosazure.azurewebsites.net/sitiowebAzure" ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <ul class="nav navbar-nav">

            <img src="img/logo-negro.jpeg" width="50" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">

            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $url;?>/administrador/inicio.php">Inicio</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $url;?>/administrador/seccion/productos.php">Tienda</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $url;?>/administrador/seccion/servicios.php">Servicios</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $url;?>">Ver Sitio Web</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $url;?>/administrador/seccion/cerrar.php">Cerrar Sesion</a>
            </li>             

        </ul>
    </nav>

    <div class="container">
    <br /> 
        <div class="row">
        
