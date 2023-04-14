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
    $query = "call MostrarServicios();";

    $sentencia = $conn->prepare($query);
    $sentencia->execute();
    $result = $sentencia->get_result();
    
    while ($resultA = $result->fetch_assoc()) {
        $datos = $datos . "<tr> 
                                <td>" . $resultA["idservicio"] . " </td>
                                <td>" . $resultA["cNombreServicio"] . " </td>
                                <td>" . $resultA["cDescripcion"] . " </td>
                                <td>" . $resultA["nPrecioServicio"] . " </td>
                                <td>
                                    <a href='actualizarV.php?idservicio=" . $resultA["idservicio"] . "' class='btn btn-success'>Actualizar</a>
                                    <button class='btn btn-danger' onclick=EliminarServicio(" . $resultA["idservicio"] . ");>Eliminar</button>
                                </td>
                            </tr>";
    }
    /*var_dump($resultA);*/

?>

<div class="row">
    <h1 class="text-center bg-warning text-secondary">Mantenimiento de Servicios Y Productos</h1>
</div>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="row">
            <a href="nuevoV.php" class="btn btn-primary">Nuevo</a>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>

<table class="table text-center">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nombre del Servicio</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php echo $datos ?>
    </tbody>

</table>
<?php
    include '../footerA.php';
?>