
<?php
    include '../headerA.php';
?>

<?php
    $idservicio = $_GET["idservicio"];
    include '../configDB.php';
    $datos = "";
    $query = "call MostrarServicio(?);";
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("i", $idservicio);
    $sentencia->execute();
    $result = $sentencia->get_result();

    $cNombreServicio = "";
    $cDescripcion = "";
    $nPrecioServicio = 0;
    $cRutaImagenServicio = "";

    while ($resultA = $result->fetch_assoc()){
        $cNombreServicio = $resultA["cNombreServicio"];
        $cDescripcion = $resultA["cDescripcion"];
        $nPrecioServicio = $resultA["nPrecioServicio"];
        $cRutaImagenServicio = $resultA["cRutaImagenServicio"];
    }

?>
    <div class="row">
        <h1 class="text-center bg-info text-primary">Actualizacion Servicio o Producto</h1>
    </div>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="row">
                <a href="index.php" class="btn btn-primary">Regresar</a>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="actualizarPost.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" value=<?php echo $idservicio ?> name="idservicio">
                <div class="form-group">
                    <label for="cNombreServicio">Nombre del servicio</label>
                    <input require class="form-control" name="cNombreServicio" type="text" 
                        placeholder="Ingrese el nombre del servicio" value="<?php echo $cNombreServicio ?>" >
                </div>

                <div class="form-group">
                    <label for="cDescripcion">Descripcion del Servicio</label>
                    <input require class="form-control" name="cDescripcion" type="text" 
                        placeholder="Ingrese la descripcion del servicio" value="<?php echo $cDescripcion ?>" >                
                </div>

                <div class="form-group">
                    <label for="nPrecioServicio">Precio del Servicio</label><br>
                    <input require class="form-control" name="nPrecioServicio" type="number" 
                        placeholder="Ingrese el precio del servicio" value="<?php echo $nPrecioServicio ?>" >
                </div>

                <div class="form-group">
                    <label for="image">Imagen del Servicio</label><br>
                    <input require class="form-control" name="image" type="file">
                </div>
                <hr>

                <div class="form-group">
                    <img class="img-fluid" src="<?php echo $cRutaImagenServicio ?>" alt="Imagen para actualizar">
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Guardar</button><br><br>
                </div>
            </form>

        </div>
        <div class="col-md-4"></div>
        
    </div>

<?php
    include '../footerA.php';
?>

