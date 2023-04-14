<?php
    $cNombreServicio = $_POST["cNombreServicio"];
    $cDescripcion = $_POST["cDescripcion"];
    $nPrecioServicio = $_POST["nPrecioServicio"];
    $cRutaImagenServicio = "../../img/" . $_FILES['image']['name'];
    /*$cRutaImagenServicio = "/img/" . date('Y_m_d_h_m_s');*/
    /* */
    move_uploaded_file($_FILES['image']['tmp_name'], $cRutaImagenServicio);

    $cRutaImagenServicio = "/img/" . $_FILES['image']['name'];
    
    /*$_FILES['image']['name'];

    */

    include '../configDB.php';

    $query = "call InsertarServicio(?,?,?,?);";

    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("ssis", $cNombreServicio, $cDescripcion, $nPrecioServicio, $cRutaImagenServicio);
    $sentencia->execute();
    header("location:/admin/servicios/index.php");
?>