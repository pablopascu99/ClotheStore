<?php
    session_start();
    session_destroy();
    $_SESSION['username']="Usuario";
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="_images/favicon.png" sizes="16x16">
    <title>ClotheStore - Nuestros productos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<nav class="navbar navbar-expand-sm ">
        <a class="navbar-brand" href="Inicio.php">CS</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown"></div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-underlined" href="Blog.html">Sobre nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-underlined" href="Novedades.html">Novedades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-underlined" href="contacto.html">Contáctanos</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Catálogo
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item text-underlined" href="PartesArriba.html">Partes de arriba</a>
                    <a class="dropdown-item text-underlined" href="Pantalones.html">Pantalones</a>
                    <a class="dropdown-item text-underlined" href="Zapatilla.html">Zapatillas</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-underlined" href="Login.html">Inicio sesión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-underlined" href="Registro.html">Registro</a>
            </li>
        </ul>
        </div>
    </nav>
    <br>
    <div class="infoProducto">
    <h2>Ha cerrado sesión correctamente</h2>
    </div>

<footer>
        <div class="container py-5">
            <div class="row py-4">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <p>Entra y siguenos en nuestras cuentas de las redes sociales para enterarte de todas nuestras
                        novedades</p>
                    <ul class="socialIcons list-inline mt-4">
                        <li class="list-inline-item"><img href="#" alt="InstagramIcon" src="_images/InstagramIcon.png"
                                width="32" class="iconMedia"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><img href="#" alt="FacebookIcon" src="_images/facebookIcon.png"
                                width="32" class="iconMedia"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><img href="#" alt="InstagramIcon" src="_images/TwitterIcon.png"
                                width="32" class="iconMedia"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h6 class="text-uppercase font-weight-bold mb-4">Nuestra tienda</h6>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a class="footerlist" href="PartesArriba.html">Partes de arriba</a></li>
                        <li class="mb-2"><a class="footerlist" href="Pantalones.html">Pantalones</a></li>
                        <li class="mb-2"><a class="footerlist" href="Zapatilla.html">Zapatillas</a></li>
                        <li class="mb-2"><a class="footerlist" href="Novedades.html">Novedades</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h6 class="text-uppercase font-weight-bold mb-4">Acceso</h6>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a class="footerlist" href="Login.html">Inicio de sesion</a></li>
                        <li class="mb-2"><a class="footerlist" href="Registro.html">Registro</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>©ClotheStore Derechos reservados</p>
            </div>
        </div>
    </footer>
    


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>