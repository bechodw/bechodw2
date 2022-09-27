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
    background-image: url(https://www.unionguanajuato.mx/wp-content/uploads/2021/07/DIA_DEL_ABOGADO_2021_FRASES_MEMES_IMAGENES-1024x576.jpg);
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
                <h2 class="fw-bold text-center py-5">RECUPERAR CONTRASEÑA</h2>

                <form method="POST" action="../Controlador/controllerRecuperacion.php">
                    <div class="mb-4">
                        <br><label for="Correo" class="form-label">Correo</label>
                        <input class="form-control" name="Email" type="email" id="Correo" placeholder="Escribe tu Correo">
                    </div>
                    <div class="mb-4">
                        <br><label for="Contraseña" class="form-label">Contraseña</label>
                        <input class="form-control" name="Contraseña" type="password" id="Contraseña" placeholder="Escribe tu nueva Contraseña">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">RECUPERAR</button>
                    </div>
                    
                </form>

            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>