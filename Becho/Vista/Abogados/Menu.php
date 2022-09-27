<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>INICIO</title>

</head>
<body>

    <input type="checkbox" name="" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"> </span><span>Bufete Olivos</span></h2>
        </div>
        <!--MENU-->
        <div class="sidebar-menu">
            <ul>
                <li><a href="Menu.php" class="active"><span class="bi bi-house"></span><span>INICIO</span></a></li>
                <li><a href="CASOS.php"><span class="bi bi-briefcase"></span><span>CASOS</span></a></li>
                <li><a href="CALENDARIO.php"><span class="bi bi-calendar3"></span><span>CALENDARIO</span></a></li>
                <li><a href="CONTACTAR.php"><span class="bi bi-chat-right-dots"></span><span>CONTACTAR</span></a></li>
            </ul>
        </div>
    </div>
    <!--CONTENIDO-->
    <div class="main-content">
        <!--TITULO-->
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                DASHBOARD
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Buscar">
            </div>
            <div class="user-wrapper">
                <img src="iconos/person-circle.svg" width="40px" height="40px" alt="">
                <div>
                    <h4><?php echo $_SESSION['user'][0]," ", $_SESSION['user'][1]?></h4>
                    <small>ABOGADO</small>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>CASOS</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>TIPOS DE CASOS</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>CASOS GANADOS</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>64</h1>
                        <span>CASOS PERDIDOS</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
            </div>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h2>CASOS GANADOS</h2>
                            <button>VER MÁS <span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>No. caso</td>
                                            <td>Tipo caso</td>
                                            <td>Demandante</td>
                                            <td>Demandado</td> 
                                            <td>Ver</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>maltrato</td>
                                            <td>karina</td>
                                            <td>Jose</td>
                                            <td><span class="status"></span>review</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>maltrato</td>
                                            <td>karina</td>
                                            <td>Jose</td>
                                            <td><span class="status"></span>review</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>maltrato</td>
                                            <td>karina</td>
                                            <td>Jose</td>
                                            <td><span class="status"></span>review</td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td>maltrato</td>
                                            <td>karina</td>
                                            <td>Jose</td>
                                            <td><span class="status"></span>review</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </main>
    </div>
</body>
</html>