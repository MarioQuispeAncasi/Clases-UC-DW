<?php
    $idvariable = $_POST["idvariable"];
    $cNombreVariable = $_POST["cNombreVariable"];
    $cValorVariable = $_POST["cValorVariable"];
    $cDescripcion = $_POST["cDescripcion"];

    include '../configDB.php';

    $query = "call ActualizarVariable(?,?,?);";

    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("iss",$idvariable, $cValorVariable, $cDescripcion);
    $sentencia->execute();
    header("location:/admin/variables/index.php");
?>