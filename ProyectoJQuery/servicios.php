<?php
    include 'header.php';
?>

<?php
    $datosHTML = "";
    include 'admin/configDB.php';
    $datos = "";
    $query = "Call MostrarServicios();";
    $sentencia = $conn->prepare($query);
    $sentencia->execute();
    $result = $sentencia->get_result();
?>

<?php
    function RetornarColor(){
        $numeroBG = rand(1,6);
        $colorFondo = "";
        if ($numeroBG == 1) {
            return $colorFondo = "bg-warning";
        }
        if ($numeroBG == 2) {
            return $colorFondo = "bg-danger";
        }
        if ($numeroBG == 3) {
            return $colorFondo = "bg-primary";
        }
        if ($numeroBG == 4) {
            return $colorFondo = "bg-success";
        }
        if ($numeroBG == 5) {
            return $colorFondo = "bg-info";
        }
        if ($numeroBG == 6) {
            return $colorFondo = "bg-warning-subtle";
        }

    }
?>

<?php
    while ($resultA = $result->fetch_assoc()) {
        $cNombreServicio = $resultA["cNombreServicio"];
        $cDescripcion = $resultA["cDescripcion"];
        $nPrecioServicio = $resultA["nPrecioServicio"];
        $cRutaImagen = $resultA["cRutaImagenServicio"];
        $datosHTML = $datosHTML .  "
            <div class='col-md-4 " . RetornarColor() . "'>
                <div class=row style='padding:50px'>
                    <div class='col-md-12'>
                        <img src='" . $cRutaImagen . "' alt='Productos y Servicios'
                            class='img-fluid img-fluidPri fluidPriH'>
                    </div>
                    <h2 class='TituloServicio text-center'>" . $cNombreServicio . 
                        "</h2>
                    <hr>
                    <h3 class='DescripcionServicio'>" . $cDescripcion . "</h3>
                    <hr>
                    <h3 class='PrecioServicio'> S/. " . $nPrecioServicio . "</h3>
                </div>
            </div>";
    }
?>

<div class="row">
    <h1 class="bg-success text-center text-light" style="padding:15px; margin-bottom:0px">Productos y Servicios</h1>

    <?php echo $datosHTML; ?>

</div>

    
<?php
    include 'footer.php';
?>