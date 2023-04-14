<?php
    $cNombreUsuario = $_POST["cNombreUsuario"];
    $cContraseniaUsuario = $_POST["cContraseniaUsuario"];

    /*var_dump($cNombreUsuario);
    var_dump($cContraseniaUsuario);*/

    include '../configDB.php';
    $datos = "";
    $query = "call ValidarCredenciales(?,?);";
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("ss", $cNombreUsuario,$cContraseniaUsuario);
    $sentencia->execute();
    $result = $sentencia->get_result();

    $cNombres = "";
    $cApellidos = "";

    while ($resultA = $result->fetch_assoc()){
        $cNombres = $resultA["cNombres"];
        $cApellidos = $resultA["cApellidos"];
    }

    /*var_dump($cNombres);*/
    if($cNombres!=""){
        header("location:/admin/");
    }
    else{
        $mensajeLogin = "Usuario o contrasenia incorrecta";
        $_SESSION["NombreUsuario"] = $cNombreUsuario;
        header("location:/admin/login/index.php?mensajeLogin=".$mensajeLogin);
    }

?>