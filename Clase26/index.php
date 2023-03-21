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
    <h1 class="text-center bg-dark text-light">Cadenas PHP</h1>
    <?php
        $cantidadCaracteres = strlen("Hola Mundo");
    ?>
    <h2 class="text-center bg-info text-primary"> <?php echo $cantidadCaracteres ?> </h2>

    <?php 
        $reversa = strrev("Hola Mundo");
    ?>
    <h2 class="text-center bg-info text-primary"> <?php echo $reversa ?> </h2>

    <?php 
        $palabra = "Hola Mundo";
        $palabraReves = "";
        $palabraReves1 = "";
        for ($i=0; $i < strlen($palabra); $i++) { 
            echo $palabra[$i];
        }
        for ($i=strlen($palabra); $i > 0; $i--) { 
            $palabraReves1 = $palabraReves1 . $palabra[$i-1];
        }

        for ($i=0; $i < strlen($palabra); $i++) { 
            $palabraReves = $palabraReves . $palabra[strlen($palabra) - $i - 1]; 
        }
    ?>
    <h2 class="text-center bg-info text-primary"> <?php echo $palabraReves ?> </h2>
    <h2 class="text-center bg-info text-primary"> <?php echo $palabraReves1 . "aaa" ?> </h2>

    <?php
        $saludo = "Hola Mundo";
        $saludo = str_replace("Mundo", "Mario", $saludo);
    ?>
    <h2 class="text-center bg-info text-primary"> <?php echo $saludo ?> </h2>

    <?php
        $primeraPalabra = "Hola";
        $segundaPalabra = "Johan";
        $letrasComun = "";
        for ($i=0; $i < strlen($primeraPalabra); $i++) { 
            for ($j=0; $j < strlen($segundaPalabra); $j++) { 
                if($primeraPalabra[$i] == $segundaPalabra[$j]){
                    $letrasComun = $letrasComun . $primeraPalabra[$i];
                }
            }
        }
    ?>
    <h2 class="text-center bg-info text-primary">Las letras en comun son: <?php echo $letrasComun ?> </h2>

    <?php
        $palabraPos = "Hola Mundo";
        $letraPos = "m";
        $posicion = strpos($palabraPos, $letraPos);
    ?>
    <h2 class="text-center bg-info text-primary"><?php echo $posicion ?> </h2>
    
    <?php
        $palabraIncial = "Hola Mundo";
        $palabraExtraida = substr($palabraIncial, 0, 4);
    ?>
    <h2 class="text-center bg-info text-primary"><?php echo $palabraExtraida ?> </h2>

    <?php
        $frase = "Hola Mundo";
        $palabraaCambiar = "Mario";
        $fraseCambiada = "";
        $fraseCambiadaFinal = "";
        for ($i=0; $i < strlen($frase); $i++) {
            $fraseCambiada = $fraseCambiada . $frase[$i];
            switch (strlen($fraseCambiada)) {
                case '5':
                    $fraseCambiadaFinal = $fraseCambiada . $palabraaCambiar;
                    break;
            }   
        }
    ?>
    <h2 class="text-center bg-info text-primary">Frase Incicial:<?php echo $frase?>, Frase Cambiada: <?php echo $fraseCambiadaFinal?> </h2>

    <h1 class="text-center bg-dark text-light">Numeros PHP</h1>

    <?php
        $numero1 = 200;
        $numero2 = 50;

        $resSuma = 200 + 50;
        $resResta = 200 - 50;
        $resMultiplicacion = 200 * 50;
        $resDivision = 200 / 50;
    ?>

    <h2 class = "text-center bg-secondary text-light"> La suma de <?php echo $numero1?> y <?php echo $numero2?> es <?php echo $resSuma?></h2>
    <h2 class = "text-center bg-secondary text-light"> La resta de <?php echo $numero1?> y <?php echo $numero2?> es <?php echo $resResta?></h2>
    <h2 class = "text-center bg-secondary text-light"> La multiplicacion de <?php echo $numero1?> y <?php echo $numero2?> es <?php echo $resMultiplicacion?></h2>
    <h2 class = "text-center bg-secondary text-light"> La division de <?php echo $numero1?> y <?php echo $numero2?> es <?php echo $resDivision?></h2>
    
    <?php
        $numeroCadena = "100.00";
        $numeroConvertido = intval($numeroCadena);
    ?>
    <h2 class = "text-center bg-secondary text-light"><?php var_dump($numeroConvertido)?></h2>

    <?php
        $numeroNormal = 100.00;
        $numeroConvertidoC = strval($numeroNormal);
    ?>
    <h2 class = "text-center bg-secondary text-light"><?php var_dump($numeroConvertidoC)?></h2>

    <?php 
    $numeroBinario = "1011";
    $numeroConvertidoB = 0;
    for ($i=0; $i < strlen($numeroBinario) ; $i++) { 
        $numeroConvertidoB = $numeroConvertidoB + intval($numeroBinario[$i] * (2**(strlen($numeroBinario) - 1 - $i)));
    }   
    ?>
    <h2 class = "text-center bg-secondary text-light">El numero binario: <?php echo $numeroBinario?> convertido a decimal es 
        <?php echo $numeroConvertidoB?></h2>

    <?php
        $numeroDecimal = 29;
        $residuo = 0;
        $numConvertidoB ="";

        while ($numeroDecimal!=0) {
            $residuo = $numeroDecimal%2;
            $numeroDecimal = intval($numeroDecimal/2);
            $numConvertidoB = $numConvertidoB . $residuo;
        }
        $numeroDecimal = 29;
    ?>
    <h2 class = "text-center bg-secondary text-light">El numero decimal <?php echo $numeroDecimal?> en binario es <?php echo strrev($numConvertidoB); ?></h2>
</body>
</html>