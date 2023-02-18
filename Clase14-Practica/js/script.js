var textoPrincipal = "";
function FormatoSerie(){
    let cadenaCapturada = document.getElementById("txtCaptura").value;
    while(cadenaCapturada.length<4){
        cadenaCapturada = '0' + cadenaCapturada;
    }
    textoPrincipal = cadenaCapturada.substring(cadenaCapturada.length, cadenaCapturada.length-4)
    document.getElementById("lblFS").innerHTML = textoPrincipal;
}

function FormatoNumero(){
    let cadenaCapturada = document.getElementById("txtCaptura2").value;
    while(cadenaCapturada.length<8){
        cadenaCapturada = '0' + cadenaCapturada;
    }
    textoPrincipal = cadenaCapturada.substring(cadenaCapturada.length, cadenaCapturada.length-8);
    document.getElementById("lblFN").innerHTML = textoPrincipal;
}
