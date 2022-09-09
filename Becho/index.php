<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <title>Login</title>
    <style>
        body{
            background: #395B64;
            background: linear-gradient(to right, #395B64,#3F4E4F);
        }
        .bg{
    background-image: url(Img/abogados.jpg);
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
                <h2 class="fw-bold text-center py-5">Bienvenido</h2>
                <!--Login-->
                <form method="POST" action="ControllerInicio.php">
                    <div class="mb-4">
                        <label for="email" class="form-label">Usuario</label>
                        <input type="email" class="form-control" name="Usuario" placeholder="INGRESE CORREO DE USUARIO">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="Clave" placeholder="INGRESE CONTRASEÑA">
                    </div>
                    <div class="mb-4 form-check">
                        <input type="checkbox" name="connected" class="form-check-input" id="">
                        <label for="connected" class="form-check-label">Mantener conectado</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    </div>
                    <div class="my-3">
                        <span>Olvidaste tu contraseña?<br> <a href="#">Recuperar contraseña</a></span>
                    </div>
                    <div class="my-3">
                        <span>No tienes cuenta?<br> <a href="Registro.php">Registrarse</a></span>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>