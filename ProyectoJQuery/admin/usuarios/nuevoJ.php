
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <form action="nuevoPost.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $idservicio ?>" name="idservicio">
                <div class="form-group">
                    <label for="cNombreUsuario">Nombre del Usuario</label>
                    <input id="cNombreUsuario" require class="form-control" name="cNombreUsuario" type="text" placeholder="Ingrese el nombre del usuario">
                </div>

                <div class="form-group">
                    <label for="cContraseniaUsuario">Contrasenia del Usuario</label>
                    <input id="cContraseniaUsuario" require class="form-control" name="cContraseniaUsuario" type="password" placeholder="Ingrese la contrasenia del usuario">                
                </div>

                <div class="form-group">
                    <label for="cNombres">Nombres</label><br>
                    <input id="cNombres" require class="form-control" name="cNombres" type="text" placeholder="Ingrese nombres">
                </div>

                <div class="form-group">
                    <label for="cApellidos">Apellidos</label><br>
                    <input id="cApellidos" require class="form-control" name="cApellidos" type="text" placeholder="Ingrese apellidos">
                </div>
                <hr>

                <div class="form-group">
                    <button class="btn btn-success" onclick="GuardarUsuario();">Guardar</button><br><br>
                </div>
            </form>

        </div>
        <div class="col-md-1"></div>
        
    </div>

    
    <script>
        function GuardarUsuario() {
            var cNombreUsuario = $("#cNombreUsuario").val();
            var cContraseniaUsuario = $("#cContraseniaUsuario").val();
            var cNombres = $("#cNombres").val();
            var cApellidos = $("#cApellidos").val();

            var formData = {
                "cNombreUsuario": cNombreUsuario,
                "cContraseniaUsuario": cContraseniaUsuario,
                "cNombres": cNombres,
                "cApellidos": cApellidos
            }

            $.post("/admin/usuarios/nuevoPostJ.php", formData , function (data) {
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

