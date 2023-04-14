<?php 
    if (isset($_SESSION["NombreUsuario"])){
        echo $_SESSION["NombreUsuario"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital@1&family=Press+Start+2P&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="icon" href="img/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Login</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row bg-info" style="height: 795px;">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="padding: 150px;">
                <div class="row">
                    <h1 class="text-info text-center" style="background-color: rgb(164, 242,81);">Ingreso al sistema de Administracion</h1>
                    <form action="ValidarCredenciales.php" method="POST">
                        <h1 class="text-center text-danger" style="font-size:20px">
                            <?php   
                                if (isset($_GET["mensajeLogin"])){
                                    echo $_GET["mensajeLogin"];
                                }    
                            ?>
                        </h1>

                        <div class="form-group">
                            <label for="">Usuario</label>
                            <input type="text" name="cNombreUsuario" class="form-control" placeholder="Ingrese su usuario"
                                style="font-weight: bold;" required>
                        </div>
                        <div class="form-group">
                            <label for="">Contrasenia</label>
                            <input type="password" name="cContraseniaUsuario" class="form-control" placeholder="Ingrese su password"
                                style="font-weight: bold;" required>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>