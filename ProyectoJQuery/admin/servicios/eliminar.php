<?php
    $idservicio = $_GET["idservicio"];
    include '../configDB.php';
    $query = "Call EliminarServicio(?);";
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("i", $idservicio);
    $sentencia->execute();
    header("location:/admin/servicios/index.php");
?>