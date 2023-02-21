var texto = "Hola";

var frutas = ["platano", "naranja", "durazno"];

/*
function Saludar(){
    console.log("Enviando texto...");
}*/

function Mostrar(){
    console.log(frutas[0]);
}

function Comparar(){
    let numero1 = document.getElementById("txtNumero1").value; 
    let numero2 = document.getElementById("txtNumero2").value; 
    let mensaje = "";

    if (numero1>numero2) {
        mensaje = numero1 + " es mayor que " + numero2;
    }

    if (numero1<numero2) {
        mensaje = numero2 + " es mayor que " + numero1;
    }

    if (numero1==numero2) {
        mensaje = "Ambos numeros non iguales";
    }
    document.getElementById("lblResultado").innerHTML = mensaje;
}

function Rangos(){
    let numero = document.getElementById("txtNumero").value; 
    let mensaje = "";

    if(numero=>100 && numero>0){
        mensaje = "El numero es positivo y mayor o igual a 100";
    }
    else if(numero<100){
        mensaje = "El numero es positivo y menor que 100";
    }
    else{
        mensaje = "El numero no se encuentra en ningun rango";
    }
    document.getElementById("lblResultadoV").innerHTML = mensaje;
}

function HallarPremio(){
    let opcionSeleccionada =parseInt(document.getElementById("ddPremio").value); 
    let mensaje = "Premio";

    if(opcionSeleccionada != 0){
        switch (opcionSeleccionada) {
            case 1: 
                mensaje = "Te ganaste un viaje";
                break;
            case 2: 
                mensaje = "Te ganaste una camioneta";
                break;
            case 3: 
                mensaje = "Te ganaste una casa";
                break;
        
            default:
                mensaje = "";
                break;
        }
    }
    document.getElementById("lblResultadoS").innerHTML = mensaje;
}

function Contar(){
    for (let i = 0; i < 11; i++) {
        console.log(i);
    }
}

function Imprimir(){
    let relleno = "";
    let numeroTope= document.getElementById("txtNumeroFor").value;
    
    for (let i = 0; i <= numeroTope; i++) {
        relleno = relleno + "<h2 class='text-center text-light bg-secondary'>" + i + "</h2><br>";
    }
    document.getElementById("resultadoFor").innerHTML = relleno;
}

function ImprimirWhile(){
    let relleno = "";
    let numeroTope= document.getElementById("txtNumeroWhile").value;
    let i = 0;

    while (i<=numeroTope) {
        relleno = relleno + "<h2 class='text-center text-info'>" + i + "</h2><br>";
        i++;
    }
    document.getElementById("resultadoWhile").innerHTML = relleno;
}