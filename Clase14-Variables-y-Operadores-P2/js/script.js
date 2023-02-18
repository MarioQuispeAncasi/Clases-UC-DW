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

    let cadenaCapturada = document.getElementById("txtCaptura").value;
}*/


function CapturarValor(){
    let cadenaCapturada = document.getElementById("txtCaptura").value;
    document.getElementById("lblCaptura").innerHTML = cadenaCapturada;
}

function CantidadCaracteres(){
    let cadenaCapturada = document.getElementById("txtCaptura").value;
    textoPrincipal = cadenaCapturada.length;
    document.getElementById("lblLength").innerHTML = textoPrincipal
}


function CortarSlide(){
    let cadenaCapturada = document.getElementById("txtCaptura").value;
    textoPrincipal = cadenaCapturada.slice(3,5);
    document.getElementById("lblSlide").innerHTML = textoPrincipal;
}

function CortarSubstring(){
    let cadenaCapturada = document.getElementById("txtCaptura").value;
    textoPrincipal = cadenaCapturada.substring(3,7);
    document.getElementById("lblSubstring").innerHTML = textoPrincipal;
}

function CortarSubstr(){
    let cadenaCapturada = document.getElementById("txtCaptura").value;
    textoPrincipal = cadenaCapturada.substr(3,5);
    document.getElementById("lblSubstr").innerHTML = textoPrincipal;
}

function Reemplazar(){
    let cadenaCapturada = document.getElementById("txtCaptura").value;
    textoPrincipal = cadenaCapturada.replace("AX","AM");
    document.getElementById("lblReplace").innerHTML = textoPrincipal;
}

function LimpiarTexto(){
    let cadenaCapturada = document.getElementById("txtCaptura").value;
    textoPrincipal = cadenaCapturada.trim();
    //textoPrincipal = cadenaCapturada.replaceAll(" ","");
    document.getElementById("lblTrim").innerHTML = textoPrincipal;
}

function ConcatenarTexto(){
    let cadenaCapturada = document.getElementById("txtCaptura").value;
    let saludo = "Hola";
    textoPrincipal = cadenaCapturada.concat(" ",saludo);
    document.getElementById("lblConcatenar").innerHTML = textoPrincipal;
}

function MostrarComidaRoco(){
    let roco = {
        tipoAnimal:"Perro",
        color:"Negro",
        colorOjos:"Verdes",
        comida: function(){
            return "Roco comer 3 kg de carne al dia"
        }
    };

    document.getElementById("lblComida").innerHTML = roco.comida();
    
}