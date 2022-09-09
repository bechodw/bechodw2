<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Menu.css">
    
    <title>Menu</title>
</head>
<body>

    <!--barra superiora-->
    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <div class="col-8 barra">
                <h4 class="text-light logocppe">logo</h4>
            </div>
            <div class="col-4 text-end barra">
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a href="#" class="px-3 text-light perfil dropdown-toogle" id="navbarDropdown" role="button" data-toogle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown">
                        <i class="fa-sharp fa-solid fa-user user "></i></a>
                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                            <a class="dropdown-item menuperfil cerrar" href="index.php">
                            <i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i>SALIR</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>    

    <!--barra lateral-->

    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <nav class="Menu d-flex d-sm-block justify-content-center flex-wrap">
                    <a href="Menu.php" ><i class="fa-sharp fa-solid fa-house "></i><span>INICIO</span></a>
                    <a href="MISCASOS.php"><i class="fa-sharp fa-solid fa-folder-tree"></i><span>MIS CASOS</span></a>
                    <a href="CALENDARIO.php" class="active"><i class="fa-sharp fa-solid fa-calendar-day"></i><span>CALENDARIO</span></a>
                    <a href="CONTACTAR.php"><i class="fa-sharp fa-solid fa-message"></i><span>CONTACTAR</span></a>
                </nav>
            </div>

            <!--CONTENIDO-->
            <main class="main col">
                <div class="row justify-content-center align-content-center text-center">
                    <div class="columna col-lg-6">
                        contenido
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/82deaf29c3.js" crossorigin="anonymous"></script>
</body>
</html>