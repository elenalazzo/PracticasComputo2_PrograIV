<?php
    //comentario de una linea
    /*
        comentarios en multiples lineas

        $numero=10;
        echo "<h1>Programación Computacional IV</h1>" . $numero;
    */
    
    //Evaluar si se esta enviando el boton
    if(isset($_POST['seleccion'])){
        //echo "Click sobre el boton";
        $idioma = $_POST['idioma'];
        //echo "<br/>".$idioma;
        INCLUDE $idioma. ".php";
    }
    else{
        //echo "No se ha enviado el click";
        INCLUDE "es.php";
    }
?>

<html>
    <head>
        <title><h1><?php echo TITLE; ?></h1></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
    <body>
    <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Offcanvas navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link" href="/info.php">Información PHP</a>
                </li>
                <!--Dropdown de los idiomas-->
                <form method="POST">
                    <select name="idioma">
                        <option value="es">Spanish</option>
                        <option value="en">English</option>
                    </select>
                    <input type="submit" name="seleccion" value="Cambiar"/>
                </form>
                </ul>
                <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            </div>
        </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="https://static.vecteezy.com/system/resources/previews/001/905/554/non_2x/black-grey-background-free-photo.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1><?php echo TITLE; ?></h1>
        </div>
        </div>
        <div class="carousel-item">
        <img src="https://static.vecteezy.com/system/resources/previews/001/905/554/non_2x/black-grey-background-free-photo.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1><?php echo HEADING_TITLE; ?></h1>
        </div>
        </div>
        <div class="carousel-item">
        <img src="https://static.vecteezy.com/system/resources/previews/001/905/554/non_2x/black-grey-background-free-photo.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1><?php echo OVERVIEW_TITLE; ?></h1>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
        <!--<form method="POST">
            <select name="idioma">
                <option value="es">Spanish</option>
                <option value="en">English</option>
            </select>
            <input type="submit" name="seleccion" value="Cambiar"/>
        </form>
        <h1><?php echo TITLE; ?></h1>
        <h1><?php echo HEADING_TITLE; ?></h1>
        <h2><?php echo OVERVIEW_TITLE; ?></h2>-->
    </body>
</html>