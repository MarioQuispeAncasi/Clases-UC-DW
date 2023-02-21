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