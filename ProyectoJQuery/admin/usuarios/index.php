<?php
    include '../headerA.php';
?>

<?php 
    /* 
    Peticion
    GET --> http://localhost/admin/variables/ 
    Parametro -- modelo vacio
    */
    include '../configDB.php';

    $datos = "";
    $query = "call MostrarUsuarios();";

    $sentencia = $conn->prepare($query);
    $sentencia->execute();
    $result = $sentencia->get_result();
    
    while ($resultA = $result->fetch_assoc()) {
        $datos = $datos . "<tr> 
                                <td>" . $resultA["idusuario"] . " </td>
                                <td>" . $resultA["cNombreUsuario"] . " </td>
                                <td>" . $resultA["cNombres"] . " </td>
                                <td>" . $resultA["cApellidos"] . " </td>
                                <td>
                                    <button class='btn btn-success' onclick=AbrirFormularioEditar(" . $resultA["idusuario"] . ");>Actualizar</button>
                                    <button class='btn btn-danger' onclick=EliminarUsuario(" . $resultA["idusuario"] . ");>Eliminar</button>
                                </td>
                            </tr>";
    }
    /*var_dump($resultA);*/
    /*                           <td>" . $resultA["cContraseniaUsuario"] . " </td>*/

?>

<div class="row">
    <h1 class="text-center bg-warning text-secondary">Mantenimiento de Usuarios</h1>
</div>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="row">
            <button onclick="AbrirFormularioNuevo();" class="btn btn-success">Nuevo</button>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>

<table class="table text-center">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nombre de Usuario</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php echo $datos ?>
    </tbody>

</table>

<script>
    function AbrirModal() {
        $("#MiModal").modal("show");
    }

    function CerrarModal() {
        $("#MiModal").modal("hide");
    }

    function AbrirFormularioNuevo() {
        $.get("/admin/usuarios/nuevoJ.php", function (data) {
                $("#MiModalHeaderT").html("Registro de Nuevo Usuarios del Sistema")
                $("#MiModalBody").html(data);
                $("#MiModal").modal("show");
            });
    }

    function AbrirFormularioEditar(idusuario) {
        $.get("/admin/usuarios/actualizarJ.php?idusuario=" + idusuario, function (data) {
                $("#MiModalHeaderT").html("Actualizar Usuario del Sistema")
                $("#MiModalBody").html(data);
                $("#MiModal").modal("show");
            });
    }

    function EliminarUsuario(idusuario) {
        Swal.fire({
            title: 'Eliminar Usuario',
            text: "Esta seguro de realizar la eliminacion?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirmar'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.get("/admin/usuarios/eliminarJ.php?idusuario=" + idusuario, function (data) {
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
        });  
    }
</script>

<?php
    include '../footerA.php';
?>