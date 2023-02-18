/*Variables Globales */

    /*Valor string 
    
    caracter 'x', "XXXXXXXXXXXX"*/
var textoPrincipal = "";

/*function Saludar(){
    let caracter1 = 'H';
    let caracter2 = 'O';
    let caracter3 = 'L';
    let caracter4 = 'A';
    
    textoPrincipal = 'H'+'O'+'L'+'A';
    alert(textoPrincipal);
}
*/

function CapturarValor(){
    let cadenaCapturada = document.getElementById("txtCaptura").value;
    document.getElementById("lblCaptura").innerHTML = cadenaCapturada;
}

function CantidadCaracteres(){
    let cadenaCapturada = document.getElementById("txtCaptura").value;
    textoPrincipal = cadenaCapturada.length;
    document.getElementById("lblLength").innerHTML = textoPrincipal
}