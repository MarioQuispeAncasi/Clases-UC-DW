
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
            <h1 class="text-center bg-info text-secondary">Registo de nuevo Usuario del Sistema</h1>
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
                    <label for="cNombreUsuario">Nombre del Usuario</label>
                    <input require class="form-control" name="cNombreUsuario" type="text" placeholder="Ingrese el nombre del usuario">
                </div>

                <div class="form-group">
                    <label for="cContraseniaUsuario">Contrasenia del Usuario</label>
                    <input require class="form-control" name="cContraseniaUsuario" type="password" placeholder="Ingrese la contrasenia del usuario">                
                </div>

                <div class="form-group">
                    <label for="cNombres">Nombres</label><br>
                    <input require class="form-control" name="cNombres" type="text" placeholder="Ingrese nombres">
                </div>

                <div class="form-group">
                    <label for="cApellidos">Apellidos</label><br>
                    <input require class="form-control" name="cApellidos" type="text" placeholder="Ingrese apellidos">
                </div>
                <hr>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Guardar</button><br><br>
                </div>
            </form>

        </div>
        <div class="col-md-3"></div>
        
    </div>

    
    <script>
        function AlertJquery() {
            var cNombreUsuario = $("#cNombreUsuario");
            console.log(cNombreUsuario.val());
            alert(cNombreUsuario.val());
        }
    </script>

<?php
    include '../footerA.php';
?>

