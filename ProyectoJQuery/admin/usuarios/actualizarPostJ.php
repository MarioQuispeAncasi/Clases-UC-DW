<?php
    $idusuario = $_POST["idusuario"];
    $cNombreUsuario = $_POST["cNombreUsuario"];
    $cContraseniaUsuario = $_POST["cContraseniaUsuario"];
    $cNombres = $_POST["cNombres"];
    $cApellidos = $_POST["cApellidos"];

    include '../configDB.php';

    $query = "call ActualizarUsuario(?,?,?,?,?);";

    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("issss",$idusuario, $cNombreUsuario, $cContraseniaUsuario, $cNombres,$cApellidos);
    $sentencia->execute();
    echo "El usuario fue actualizado correctamente";
?>