/* Variables */
    /*Construccion */
var numero1;
var numero2;

numero1 = 12;
numero2 =21;

var miVariable;
var miVariableCompleta;

    /*Asignacion de valor --> Operador */
miVariable = "Soy una Variable";
miVariableCompleta = miVariable + " Completa";

function Suma(){
    var suma = numero1 + numero2;
    alert("La suma del numero 1 y del numero 2 es " + suma
    + " La suma del numero 1 y del numero 2 es " + suma);
}

function Mostrar(){
    document.getElementById("textoMostrar").innerHTML = miVariableCompleta;
}