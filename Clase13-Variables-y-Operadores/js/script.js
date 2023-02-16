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

//Tipos de Variables
    //Variable Global
var resultado;
//Funcional: con return en las funciones

//Constante: const
const nroContinentes = 5;


function Suma(){
    var suma = numero1 + numero2;
    alert("La suma del numero 1 y del numero 2 es " + suma
    + " La suma del numero 1 y del numero 2 es " + suma);
    nroContinentes = 19;
    result = Restar();
    alert(result);
}

function Mostrar(){
    document.getElementById("textoMostrar").innerHTML = miVariableCompleta;
}

function Restar(){
    //Variables Encapsulada
    let a = 100;
    let b = 50;
    resultado = a - b;
    return resultado;
}

/*Declaracion de una variable */
var variable;

/*Declaracion de una variable */
variableResultado = "Soy una Variable";
variableResultado = 0;



/*Tipos de Datos */
    //Numericos
        /*Enteros int*/
        /*Flotantes-->decimales, numericos, float,..... */

    //Cadena = Caracteres
        /*Caracter --> char '' */
        /*Cadena --> string 'caulquier texto'*/


/*Operadores */
    /*Aritmerico 
        +
        -
        /
        **
        %
        ++
        --
    */
    //Adicion
function Adicion(){
    let op1 = parseInt(document.getElementById("numero1S").value);
    let op2 = parseInt(document.getElementById("numero2S").value);
    variableResultado = op1 + op2;
    document.getElementById("resultadoS").innerHTML = variableResultado;
    variableResultado;
}

function Restar(){
    let op1 = parseInt(document.getElementById("numero1R").value);
    let op2 = parseInt(document.getElementById("numero2R").value);
    variableResultado = op1 - op2;
    document.getElementById("resultadoR").innerHTML = variableResultado;
    variableResultado;
}

function Multiplicar(){
    let op1 = parseInt(document.getElementById("numero1M").value);
    let op2 = parseInt(document.getElementById("numero2M").value);
    variableResultado = op1 * op2;
    document.getElementById("resultadoM").innerHTML = variableResultado;
    variableResultado;
}

function Dividir(){
    let op1 = parseInt(document.getElementById("numero1D").value);
    let op2 = parseInt(document.getElementById("numero2D").value);
    variableResultado = op1 / op2;
    document.getElementById("resultadoD").innerHTML = variableResultado;
    variableResultado;
}

function Residuo(){
    let op1 = parseInt(document.getElementById("numero1MR").value);
    let op2 = parseInt(document.getElementById("numero2MR").value);
    variableResultado = op1 % op2;
    document.getElementById("resultadoMR").innerHTML = variableResultado;
    variableResultado;
}

function Potencia(){
    let op1 = parseInt(document.getElementById("numero1P").value);
    let op2 = parseInt(document.getElementById("numero2P").value);
    variableResultado = op1 ** op2;
    document.getElementById("resultadoP").innerHTML = variableResultado;
    variableResultado;
}

function Raiz(){
    let op1 = parseInt(document.getElementById("numero1Raiz").value);
    let op2 = parseInt(document.getElementById("numero2Raiz").value);
    variableResultado = op1 ** op2;
    document.getElementById("resultadoRaiz").innerHTML = variableResultado;
    variableResultado;
}

var nroDecimal = 99.888;
var nroDecimal1 = 1;
function mRedondear(){
    let numRedondo = Math.round(nroDecimal);
    document.getElementById("resultadoRe").innerHTML = numRedondo;
}

function mAbsoluto(){
    nroDecimal = nroDecimal* -1;
    let numRedondo = Math.abs(nroDecimal);
    document.getElementById("resultadoAbs").innerHTML = numRedondo;
    nroDecimal = nroDecimal* -1;
}

function mTruncar(){
    let oResultado = Math.trunc(nroDecimal);
    document.getElementById("resultadoMT").innerHTML = oResultado;
}

function mAleatorio(){
    let oResultado = Math.round(Math.random(nroDecimal1)*100);
    document.getElementById("resultadoAL").innerHTML = oResultado;
}

function Bool(){
    let nro1B = 100;
    let nro2B = "100";

    let ebool = nro1B == nro2B;
    //let ebool = nro1B === nro2B;
    alert(ebool);
}





