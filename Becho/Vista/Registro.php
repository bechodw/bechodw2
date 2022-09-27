<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            background: #395B64;
            background: linear-gradient(to right, #395B64,#3F4E4F);
        }
        .bg{
    background-image: url(https://i.pinimg.com/550x/da/94/65/da9465538a5c592733b49ee24625e601.jpg);
    background-position: center center;
    }
    </style>
</head>
<body>
    <div class="container w-75 bg-white mt-5 rounded-5 shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded-5">
            </div>
            <div class="col bg-white p-5 rounded-end">

                <div class="text-end">
                    <img src="Img/logo4.jfif" width="100px" alt="">
                </div>
                <h2 class="fw-bold text-center py-5">REGISTRO</h2>

                <form method="POST" action="../Controlador/controllerRegistro.php">

                    <div class="mb-4">
                        <label for="Nombres" class="form-label">NOMBRES</label>
                        <input class="form-control" name="Nombres" type="text" id="Nombres" placeholder="Escribe tus Nombres">
                    </div>

                    <div class="mb-4">
                        <br><label for="Apellidos" class="form-label">APELLIDOS</label>
                        <input class="form-control" name="Apellidos" type="text" id="Apellidos" placeholder="Escribe tus Apellidos">
                    </div>

                    <div class="mb-4">
                        <br><label for="DPI" class="form-label">DPI</label>
                        <input class="form-control" name="DPI" type="text" id="DPI" placeholder="Escribe tu DPI">
                    </div>

                    <div class="mb-4">
                        <br><label for="Direccion" class="form-label">Direccion</label>
                        <input class="form-control" name="Direccion" type="text" id="Direccion" placeholder="Escribe tu Direccion">
                    </div>

                    <div class="mb-4">
                        <fieldset>
                            <legend>COMO TE IDENTIFICAS</legend>
                            <div>
                            <input type="radio" id="Demandado" name="Tipo" value="1"checked>
                            <label for="huey">DEMANDADO</label>
                            </div>
                            <div>
                            <input type="radio" id="Demandante" name="Tipo" value="2">
                            <label for="dewey">DEMANDANTE</label>
                            </div>
                        </fieldset>
                    </div>
                    
                    <div class="mb-4">
                        <br><label for="Correo" class="form-label">Correo</label>
                        <input class="form-control" name="Email" type="email" id="Correo" placeholder="Escribe tu Correo">
                    </div>

                    <div class="mb-4">
                        <br><label for="Contraseña" class="form-label">Contraseña</label>
                        <input class="form-control" name="Contraseña" type="password" id="Contraseña" placeholder="Escribe tu Direccion">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">REGISTRAR</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>