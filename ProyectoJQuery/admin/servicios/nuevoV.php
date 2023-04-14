
<?php
    include '../headerA.php';
?>

<?php
    /*echo "Peticion al servidor mediante GET";
    
    get-->Localhost/admin/variables/nuevoV.php/ 
    Parametro-->Modelo vacio
    
    echo "<br>";
    echo "Respuesta del servidor VISTA nuevo.php";*/
?>

    <div class="row">
            <h1 class="text-center bg-info text-secondary">Registo de nuevo servicio o producto</h1>
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
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="nuevoPost.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $idservicio ?>" name="idservicio">
                <div class="form-group">
                    <label for="cNombreServicio">Nombre del servicio</label>
                    <input require class="form-control" name="cNombreServicio" type="text" placeholder="Ingrese el nombre del servicio">
                </div>

                <div class="form-group">
                    <label for="cDescripcion">Descripcion del Servicio</label>
                    <input require class="form-control" name="cDescripcion" type="text" placeholder="Ingrese la descripcion del servicio">                
                </div>

                <div class="form-group">
                    <label for="nPrecioServicio">Precio del Servicio</label><br>
                    <input require class="form-control" name="nPrecioServicio" type="number" placeholder="Ingrese el precio del servicio">
                </div>

                <div class="form-group">
                    <label for="image">Imagen del Servicio</label><br>
                    <input require class="form-control" name="image" type="file">
                </div>
                <hr>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Guardar</button><br><br>
                </div>
            </form>

        </div>
        <div class="col-md-3"></div>
        
    </div>

<?php
    include '../footerA.php';
?>

