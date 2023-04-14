<?php
    $cNombreVariable = $_POST["cNombreVariable"];
    $cValorVariable = $_POST["cValorVariable"];
    $cDescripcion = $_POST["cDescripcion"];

    include '../configDB.php';

    $query = "call InsertarVariable(?,?,?);";

    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("sss", $cNombreVariable, $cValorVariable, $cDescripcion);
    $sentencia->execute();
    header("location:/admin/variables/index.php");
?>