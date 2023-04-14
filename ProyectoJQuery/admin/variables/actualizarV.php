
<?php
    include '../headerA.php';
?>

<?php
    /*echo "Peticion al servidor mediante GET";*/
    /*
    get-->Localhost/admin/variables/nuevoV.php/ 
    Parametro-->Modelo vacio
    */
    /*echo "<br>";
    echo "Respuesta del servidor VISTA nuevo.php";*/
?>
<?php
    $idvariable = $_GET["idvariable"];
    include '../configDB.php';
    $datos = "";
    $query = "call MostrarVariable(?);";
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("i", $idvariable);
    $sentencia->execute();
    $result = $sentencia->get_result();

    $cNombreVariable = "";
    $cValorVariable = "";
    $cDescripcion = "";

    while ($resultA = $result->fetch_assoc()){
        $cNombreVariable = $resultA["cNombreVariable"];
        $cValorVariable = $resultA["cValorVariable"];
        $cDescripcion = $resultA["cDescripcion"];
    }

?>
    <div class="row">
            <h1 class="text-center bg-info text-primary">Actualizacion de variables del Sistema</h1>
    </div>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="row">
                <a href="index.php" class="btn btn-primary">Regresar</a>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="actualizarPost.php" method="POST">
                <input type="hidden" name="idvariable" value="<?php  echo $idvariable ?>">
                <div class="form-group">
                    <label for="cNombreVariable">Nombre de la Variable</label>
                    <input require class="form-control" name="cNombreVariable" 
                        type="text" placeholder="Ingrese el nombre de la variable" 
                        value="<?php echo $cNombreVariable?>" disabled>
                </div>

                <div class="form-group">
                    <label for="cValorVariable">Valor de la Variable</label>
                    <input require class="form-control" name="cValorVariable" 
                        type="text" placeholder="Ingrese el valor de la variable" 
                        value="<?php echo $cValorVariable?>">                
                </div>

                <div class="form-group">
                    <label for="cDescripcion">Descripcion de la Variable</label><br>
                    <input require class="form-control" name="cDescripcion" 
                        type="text" placeholder="Ingrese la descripcion de la variable" 
                        value="<?php echo $cDescripcion?>">
                
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Actualizar</button><br><br>
                </div>
            </form>

        </div>
        <div class="col-md-3"></div>
        
    </div>

<?php
    include '../footerA.php';
?>

