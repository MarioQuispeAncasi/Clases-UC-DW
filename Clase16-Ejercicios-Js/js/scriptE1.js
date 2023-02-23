/*Ejercicio
1 Implementar un metodo que valide un cuadro de texto del tipo contrasenia
	que no admita espacios en blanco y que requiera de como minimo 1 
	letra y un numero */
var lEspacio = true;
var lLetra = false;
var lNumero = false;
var cMensaje = "";

function Validar(){
    let cContrasenia = document.getElementById("txtPassword").value;
    let cConstraseniaDesglosada = [];
    cConstraseniaDesglosada = cContrasenia.split("");
    cMensaje = "Correcto";

    for (let index = 0; index < cConstraseniaDesglosada.length; index++) {
        if (cConstraseniaDesglosada[index]==" ") {
            lEspacio = true;
        }
    }
    for (let index = 0; index < cConstraseniaDesglosada.length; index++) {
        //para saber el tipo de dato typeof
        //para saber si es numero entero Number.isInteger
        /*if (cConstraseniaDesglosada[index]=="") {
            console.log(cConstraseniaDesglosada[index]);
            console.log(Number.isInteger(parseInt(cConstraseniaDesglosada[index])));
        }*/
        if(!(isNaN(cConstraseniaDesglosada[index]))){
            lNumero = true;
        }
        else{
            lLetra = true;
        }
    }

    if(lEspacio){
        cMensaje = "El campo contrasenia posee un espacio en blanco";
    }
    if (!lLetra) {
        cMensaje = "El campo contrasenia no posee una letra";
    }
    if(!lNumero){
        cMensaje = "El campo contrasenia no posee un numero";
    }

    document.getElementById("lblValidacion").innerHTML = cMensaje;

    var lEspacio = true;
    var lLetra = false;
    var lNumero = false;
    var cMensaje = "";
}
