<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1 class="bg-dark text-light text-center">PHP</h1>
    <h2 class= "text-center">Titulo Nro2</h2>
    <h2 class = "text-center text-warning bg-info" ><?php echo  "Escritura de texto" ?></h2>
    <?php echo  "<h2 class = 'text-center text-warning bg-info'> Otra manera de escribir </h2>"?>
    <?php 
        $Mensaje = "Soy una variable con un mensaje";
        $Numero1 = 1;
        $Numero2 = 2;
        $Suma = $Numero1 + $Numero2;
    ?>
    <h2 class = "text-center text-warning bg-info" ><?php echo $Mensaje ?></h2>
    <h2 class = "text-center text-warning bg-info" ><?php echo "Soy la suma de dos variables " . $Suma ?></h2>

    <?php
        function miMetodo(){
            $Mensaje = "Soy una variable dentro de un metodo";
            echo "<h2 class = 'text-center text-warning bg-info>" . $Mensaje . "</h2>";
        }

        function miMetodoGlobal(){
            global $Mensaje;
            echo "<h2 class = 'text-center text-secondary bg-info'>" . $Mensaje . " global</h2>";
        }
        miMetodo();
        miMetodoGlobal();
    ?>
    
    <h1 class="bg-dark text-light text-center">Tipo de Datos</h1>
    <?php
        $cadena = "Soy una cadena";
        $entero = 100;
        $flotante = 100.22;
        $booleano = false;

        echo "<h2 class = 'text-center text-light bg-warning'>" . $cadena  . "</h2>";
        echo "<h2 class = 'text-center text-light bg-warning'>" . $entero   . "</h2>";
        echo "<h2 class = 'text-center text-light bg-warning'>" . $flotante   . "</h2>";
        /*echo "<h2 class = 'text-center text-light bg-warning'>" . <?php var_dump($boleano) ?>  . "</h2>";*/
    ?>
    <h2 class="text-center text-warning bg-info"> <?php var_dump($booleano) ?></h2>

    <?php
        $frutas = array("plantano","manzana","papaya");
    ?>

    <h2 class="text-center text-warning bg-secondary"> <?php var_dump($frutas) ?></h2>

    

    
    
</body>
</html>