var texto = "Hola";


/*
function Saludar(){
    console.log("Enviando texto...");
}*/

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
