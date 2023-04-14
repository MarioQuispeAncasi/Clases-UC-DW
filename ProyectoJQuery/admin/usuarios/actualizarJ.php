<?php
    $idusuario = $_GET["idusuario"];
    include '../configDB.php';
    $datos = "";
    $query = "call MostrarUsuario(?);";
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("i", $idusuario);
    $sentencia->execute();
    $result = $sentencia->get_result();

    $cNombreUsuario = "";
    $cContraseniaUsuario = "";
    $cNombres = "";
    $cApellidos = "";

    while ($resultA = $result->fetch_assoc()){
        $cNombreUsuario = $resultA["cNombreUsuario"];
        $cContraseniaUsuario = $resultA["cContraseniaUsuario"];
        $cNombres = $resultA["cNombres"];
        $cApellidos = $resultA["cApellidos"];
    }

?>


<div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <form action="nuevoPost.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" id="idusuario" value="<?php echo $idusuario ?>">
                <div class="form-group">
                    <label for="cNombreUsuario">Nombre del Usuario</label>
                    <input id="cNombreUsuario" require class="form-control" name="cNombreUsuario" type="text" 
                        placeholder="Ingrese el nombre del usuario" value="<?php echo $cNombreUsuario ?>">
                </div>

                <div class="form-group">
                    <label for="cContraseniaUsuario">Contrasenia del Usuario</label>
                    <input id="cContraseniaUsuario" require class="form-control" name="cContraseniaUsuario" type="password" 
                        placeholder="Ingrese la contrasenia del usuario" value="<?php echo $cContraseniaUsuario ?>">                
                </div>

                <div class="form-group">
                    <label for="cNombres">Nombres</label><br>
                    <input id="cNombres" require class="form-control" name="cNombres" type="text" placeholder="Ingrese nombres"
                        value="<?php echo $cNombres ?>">
                </div>

                <div class="form-group">
                    <label for="cApellidos">Apellidos</label><br>
                    <input id="cApellidos" require class="form-control" name="cApellidos" type="text" placeholder="Ingrese apellidos"
                        value="<?php echo $cApellidos ?>">
                </div>
                <hr>

                <div class="form-group">
                    <button class="btn btn-success" onclick="ActualizarUsuario();">Guardar</button><br><br>
                </div>
            </form>

        </div>
        <div class="col-md-1"></div>
        
    </div>

    
    <script>
        function ActualizarUsuario() {
            var idusuario = $("#idusuario").val();
            var cNombreUsuario = $("#cNombreUsuario").val();
            var cContraseniaUsuario = $("#cContraseniaUsuario").val();
            var cNombres = $("#cNombres").val();
            var cApellidos = $("#cApellidos").val();

            var formData = {
                "idusuario": idusuario,
                "cNombreUsuario": cNombreUsuario,
                "cContraseniaUsuario": cContraseniaUsuario,
                "cNombres": cNombres,
                "cApellidos": cApellidos
            }

            $.post("/admin/usuarios/actualizarPostJ.php" , function (data) {
                Swal.fire(
                'Proceso Correcto',
                data,
                'success'
                );
                
                setTimeout(() => {
                    window.location.reload();
                }, 2000);  
            });
        }
    </script>

