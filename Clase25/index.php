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

    <h1 class="bg-dark text-light text-center">Clases y Objetos</h1>

    <?php
        class Perro{
            public $color;
            public $raza;
            public $peso;
            public function __construct($color, $raza, $peso){
                $this->color = $color;
                $this->raza = $raza;
                $this->peso = $peso;
            }

            public function Ladrar(){
                return "Guau Guau....";
            }

        }
        $Figo = new Perro("Negro/Marron","Pastor","45kg");
    ?>

    <h2 class="text-center text-warning bg-secondary">Figo realiza un ladrido <?php echo $Figo->Ladrar()?></h2>
    <h2 class="text-center text-warning bg-secondary">Figo es de color <?php echo $Figo->color?></h2>
    <h2 class="text-center text-warning bg-secondary">Figo es de raza <?php echo $Figo->raza?></h2>
    <h2 class="text-center text-warning bg-secondary">Figo pesa <?php echo $Figo->peso?></h2>

    <h1 class="bg-dark text-light text-center">Tipos de Datos</h1>

    <?php
        function ValidarEdad($edad){
            if($edad >= 18){
                if ($edad>=60) {
                    return "La persona es mayor de edad y de alto riesgo";
                }
                else{
                    return "La persona es mayor de edad";
                }
            }

            else{
                return "La persona es menor de edad";
            }
        }
        
    ?>
    <h2 class="text-center text-warning bg-secondary">Sentencia If</h2>
    <h2 class="text-center text-warning bg-secondary"><?php echo ValidarEdad(20); ?></h2>
    <h2 class="text-center text-warning bg-secondary"><?php echo ValidarEdad(15); ?></h2>
    <h2 class="text-center text-warning bg-secondary"><?php echo ValidarEdad(66); ?></h2>

    <h1 class="bg-dark text-light text-center">Sentencia SWITCH</h1>
    
    <?php
        function ValidarEstado($codigoEstado){
            switch ($codigoEstado) {
                case 1:
                    return "El estado del paciente es regular";
                    break;
                case 2:
                    return "El estado del paciente es grave";
                    break;
                case 3:
                    return "El estado del paciente es critica";
                    break;
                
                default:
                    return "El estado del paciente es sana";
                    break;
            }
        }

    ?>    
    <h2 class="text-center text-warning bg-primary"><?php echo ValidarEstado(1); ?></h2>
    <h2 class="text-center text-warning bg-primary"><?php echo ValidarEstado(2); ?></h2>
    <h2 class="text-center text-warning bg-primary"><?php echo ValidarEstado(3); ?></h2>
    <h2 class="text-center text-warning bg-primary"><?php echo ValidarEstado(4); ?></h2>

    <h1 class="bg-dark text-light text-center">Bucles</h1>
    <h2 class="text-center text-secondary bg-warning">Bucle FOR</h2>
    <?php
        for ($i=0; $i < 10 ; $i++) { 
    ?>
        <h2 class="text-center text-secondary bg-warning"><?php echo "Soy el numero " . $i ?></h2>        
    
    <?php
        }
    ?>

    <h2 class="text-center text-secondary bg-warning">Bucle While</h2>
    <?php
        $a = 10;
        while ($a >= 1) { 
    ?>
        <h2 class="text-center text-primary bg-dark"><?php echo "Soy el numero " . $a ?></h2>        
    <?php
            $a = $a - 1;
        }
    ?>

    <h1 class = "bg-dark text-light text-center">
        <?php
            $profesiones = array("Juan" => "Medico", "Jose" => "Carpintero", "Carlos" =>"Ingeniero", "Mariana" => "Abogada");
            var_dump($profesiones["Juan"]);
            var_dump($profesiones["Jose"]);
            var_dump($profesiones["Carlos"]);
            var_dump($profesiones["Mariana"]);
        ?>
    </h1>  
</body>
</html>