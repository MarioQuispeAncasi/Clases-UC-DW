<?php  
    $idvariable = $_GET["idvariable"];

    include '../configDB.php';

    $query = "call EliminarVariable(?);";

    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("i",$idvariable);
    $sentencia->execute();
    header("location:/admin/variables/index.php");
?>