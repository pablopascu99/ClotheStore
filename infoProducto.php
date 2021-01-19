<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ClotheStore - Contacto</title>
    <link rel="icon" type="image/png" href="_images/favicon.png" sizes="16x16">
    <link rel="stylesheet" href="_css/bootstrap.min.css">
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body id=contactoBody>
<?php
//Datos para la conexión
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "clothestore";
  $tablename= "productos";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>
    <nav class="navbar navbar-expand-sm ">
        <a class="navbar-brand" href="Inicio.html">CS</a>
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
    <div class="infoProducto">
        <form action="infoProducto.html" method="post" action="">
            <h1><strong>Detalles de la prenda</strong></h1>
            <br>                            
            <?php
            
            $query = "SELECT nombre, precio, marca, talla, stock FROM `$tablename` WHERE nombre = 'Camisa Gucci Unisex'";
            $result = mysqli_query($connection, $query);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<strong>Nombre: </strong>" . $row["nombre"]. " | <strong>Precio: </strong>" . $row["precio"]. " | <strong>Marca: </strong>" . $row["marca"]. " | <strong>Talla: </strong>" . $row["talla"]. " | <strong>Stock: </strong>" . $row["stock"]. "<br>";
                }
            } else {
                echo "0 results";
            }
            ?>
        </form>
    </div>
    <div class="infoProducto">
        <form action="infoProducto.html" method="post" action="">
            <h1><strong>Detalles de la prenda</strong></h1>
            <br>                            
            <?php
            
            $query = "SELECT nombre, precio, marca, talla, stock FROM productos WHERE nombre = 'Chaqueta Gucci Deluxe'";
            $result = mysqli_query($connection, $query);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<strong>Nombre: </strong>" . $row["nombre"]. " | <strong>Precio: </strong>" . $row["precio"]. " | <strong>Marca: </strong>" . $row["marca"]. " | <strong>Talla: </strong>" . $row["talla"]. " | <strong>Stock: </strong>" . $row["stock"]. "<br>";
                }
            } else {
                echo "0 results";
            }
            ?>
        </form>
    </div>    
    <div class="infoProducto">
        <form action="infoProducto.html" method="post" action="">
            <h1><strong>Detalles de la prenda</strong></h1>
            <br>                            
            <?php
            
            $query = "SELECT nombre, precio, marca, talla, stock FROM productos WHERE nombre = 'Abrigo Negro invernal 2021'";
            $result = mysqli_query($connection, $query);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<strong>Nombre: </strong>" . $row["nombre"]. " | <strong>Precio: </strong>" . $row["precio"]. " | <strong>Marca: </strong>" . $row["marca"]. " | <strong>Talla: </strong>" . $row["talla"]. " | <strong>Stock: </strong>" . $row["stock"]. "<br>";
                }
            } else {
                echo "0 results";
            }
            ?>
        </form>
    </div>
    <div class="infoProducto">
        <form action="infoProducto.html" method="post" action="">
            <h1><strong>Detalles de la prenda</strong></h1>
            <br>                            
            <?php
            
            $query = "SELECT nombre, precio, marca, talla, stock FROM productos WHERE nombre = 'Bufanda marron para invierno' ";
            $result = mysqli_query($connection, $query);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<strong>Nombre: </strong>" . $row["nombre"]. " | <strong>Precio: </strong>" . $row["precio"]. " | <strong>Marca: </strong>" . $row["marca"]. " | <strong>Talla: </strong>" . $row["talla"]. " | <strong>Stock: </strong>" . $row["stock"]. "<br>";
                }
            } else {
                echo "0 results";
            }
            ?>
        </form>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"
        crossorigin="anonymous"></script>
    <script src="_js/validar.js"> </script>
</body>

</html>