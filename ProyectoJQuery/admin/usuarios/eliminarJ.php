<?php
    $MensajeFinal="";
    try{
        $idusuario = $_GET["idusuario"];
        include '../configDB.php';
        $datos = "";
        $query = "call EliminarUsuario(?);";
        $sentencia = $conn->prepare($query);
        $sentencia->bind_param("i", $idusuario);
        $sentencia->execute();
        $MensajeFinal = "Proceso Correcto";
    } catch(\Throwable $th){
        $MensajeFinal = "Ocurrio un error en la base de datos";
    }finally{
        echo $MensajeFinal;
    }
?>