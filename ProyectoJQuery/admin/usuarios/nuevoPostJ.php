<?php
    $cNombreUsuario = $_POST["cNombreUsuario"];
    $cContraseniaUsuario = $_POST["cContraseniaUsuario"];
    $cNombres = $_POST["cNombres"];
    $cApellidos = $_POST["cApellidos"];

    include '../configDB.php';

    $query = "call InsertarUsuario(?,?,?,?);";

    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("ssss", $cNombreUsuario, $cContraseniaUsuario, $cNombres,$cApellidos);
    $sentencia->execute();
    echo "El usuario fue registrado correctamente";
?>