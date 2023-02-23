/*Ejercicio
1 Implementar un metodo que valide un cuadro de texto del tipo contrasenia
	que no admita espacios en blanco y que requiera de como minimo 1 
	letra y un numero */
var lEspacio = true;
var lLetra = false;
var lNumero = false;
var mensaje = "";

function Validar(){
    if(lEspacio){
        mensaje = "El campo contrasenia posee un espacio en blanco";
    }
    if (!lLetra) {
        mensaje = "El campo contrasenia no posee una letra";
    }
    if(!lNumero){
        mensaje = "El campo contrasenia no posee un numero";
    }
    document.getElementById("lblValidacion").innerHTML = mensaje;
}