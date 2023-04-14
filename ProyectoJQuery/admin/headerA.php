<?php
    $nombreEmpresa = "Nano Tours";
    $anioAplicacion = 2023;
    $primerMensajeCar = "Primer mensaje de la aplicacion";
    $segundoMensajeCar = "Segundo mensaje de la aplicacion";
    $tercerMensajeCar = "Tercer mensaje de la aplicacion";
?>

<?php 
    $mysqli = new mysqli("localhost:3306","root","Bodyglove1$","dulcecafe");
    if ($mysqli->connect_errno) {
        echo "No se pudo realizar la conexion con la base de datos";
    }

    $query = "select * from variables A";

    $resultado = $mysqli->query($query);
    $resultado->data_seek(0);

    while ($resultadoA = $resultado->fetch_assoc()) {

        if ($resultadoA["cNombreVariable"] == "cNombreEmpresa") {
            $nombreEmpresa = $resultadoA["cValorVariable"];
        }
        else if ($resultadoA["cNombreVariable"] == "cAnioAplicacion") {
            $anioAplicacion = $resultadoA["cValorVariable"];
        }
        else if ($resultadoA["cNombreVariable"] == "cTituloBan1") {
            $primerMensajeCar = $resultadoA["cValorVariable"];
        }
        else if ($resultadoA["cNombreVariable"] == "cTituloBan2") {
            $segundoMensajeCar = $resultadoA["cValorVariable"];
        }
        else if ($resultadoA["cNombreVariable"] == "cTituloBan3") {
            $tercerMensajeCar = $resultadoA["cValorVariable"];
        }
        /*else if ($resultadoA["cNombreVariable"] == "cLogoEmpresa") {
            $nombreEmpresa = $resultadoA["cValorVariable"];
        }*/
        else{        }    
        /*var_dump($resultadoA["cValorVariable"]);
        echo "<br>";
        */
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <title>Document</title>
    <script>
        function EliminarVariable(idvariable) {
            Swal.fire({
                title: 'Desea Eliminar el Registro?',
                text: "Eliminar Variable del Sistema",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "/admin/variables/eliminar.php?idvariable=" + idvariable;                        
                    }
            })
        }

        function EliminarServicio(idservicio) {
            Swal.fire({
                title: 'Desea Eliminar el Registro?',
                text: "Eliminar Servicio del sistema",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "/admin/servicios/eliminar.php?idservicio=" + idservicio;                        
                    }
            })
        }
    

        function ConfirmarEliminacion(){
            Swal.fire(
                'Eliminado!',
                'El registro fue eliminado.',
                'success'
                );
        }


        
    </script>
</head>
<body>
    <div id="MiModal" class="modal fade" rol="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" id="MiModalHeaderT">
                    <h1>Soy la cabecera</h1>
                </div>
                <div class="modal-body" id="MiModalBody">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore inventore, modi corrupti expedita optio maiores repellendus enim tempora obcaecati, dolore consectetur. Porro, harum! Temporibus, cupiditate. Doloremque, repudiandae! Eligendi, iste itaque.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" onclick="CerrarModal();">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row navPrincipal">
        <div class="col-md-3 bgImgLogo">
            <a href="http://localhost/index.php">
                <img src="/img/Imagen1.png" class="img-fluid" alt="Nano Tours">
            </a>
        </div>
        <div class="col-md-3 bgTitulo">
            <h1 class="text-center titulo"> Administracion <?php echo $nombreEmpresa ?></h1>
        </div>
        <div class="col-md-6 bgNav">
            <ul class="nav row">
                <div class="col-md-3">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="/admin/variables/index.php">Mant. Variables</a>
                    </li>
                </div>
                <div class="col-md-3">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="/admin/servicios/index.php">Mant. Servicios</a>
                    </li>
                </div>
                <div class="col-md-3">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="/admin/usuarios/index.php">Mant. Usuarios</a>
                    </li>
                </div>
                <div class="col-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/index.php" style="padding-top:40px;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-off" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#6f32be" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M14.274 10.291a4 4 0 1 0 -5.554 -5.58m-.548 3.453a4.01 4.01 0 0 0 2.62 2.65" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 1.147 .167m2.685 2.681a4 4 0 0 1 .168 1.152v2" />
                                <line x1="3" y1="3" x2="21" y2="21" />
                            </svg>
                        </a>
                    </li>
                </div>
            </ul>
        </div>
    </div>