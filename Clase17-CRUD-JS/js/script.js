var integrantes = [];
var nCodigo = 0;
function GuardarIntegrante(){
    nCodigo = integrantes.length+1;
    let integrante;
    let cNombres = document.getElementById("txtNombres").value;
    let nNivel = document.getElementById("ddNivel").value;
    let cNivel ="";

    //variables para validar el correo
    let cCorreo = document.getElementById("txtCorreo").value;
    let cCorreoDesglosado = [];
    let lArroba = true;
    cCorreoDesglosado = cCorreo.split("");
    let cMensajeCorreo = "";

    //Variables para la validacion del telefono
    let cTelefono = document.getElementById("txtTelefono").value;
    let cTelefonoDesglosado = [];
    cTelefonoDesglosado = cTelefono.split("");
    let cMensajeTelefono = "";
    let lNumero = false;

    //El nombre como  minimo debe tener 6 caracteres
    if(cNombres.length <=6){
        document.getElementById("txtValidacion").innerHTML = "Los datos ingresasdos 'Nombre Completo' son incorrectos";
        return;
    }
    //El correo tienen que contener el caracter @
    for (let index = 0; index < cCorreoDesglosado.length; index++) {
        if (cCorreoDesglosado[index]!="@") {
            lArroba = false;
        }
    }

    if (lArroba = false) {
        cMensajeCorreo = "El correo no posee el caracter '@'";
        document.getElementById("txtValidacion").innerHTML = cMensajeCorreo;   
    }

    //El telefono solo tienen que tener numero
    for (let index = 0; index < cTelefonoDesglosado.length; index++) {
        if(!(isNaN(cTelefonoDesglosado[index]))){
            lNumero = true;
        }
        else{
            lNumero = false;
        }
    }
    if (!lNumero) {
        //cMensajeTelefono = "El telefono solo debe contener numeros";
        //document.getElementById("txtValidacion").innerHTML = cMensajeTelefono;
        document.getElementById("txtValidacion").innerHTML = "El telefono solo debe contener numeros";
    }



    integrante={
        Codigo: nCodigo,
        Nombres: cNombres,
        Correo: cCorreo,
        Telefono: cTelefono,
        Nivel: nNivel,
    }

    integrantes.push(integrante);
    MostarDatos();

    document.getElementById("txtValidacion").innerHTML = "";
    document.getElementById("txtNombres").value ="";
    document.getElementById("txtCorreo").value="";
    document.getElementById("txtTelefono").value="";
    nCodigo=0;
    lArroba = true;
    cMensajeCorreo = "";
}

function MostarDatos(){
    let cNivel = "";
    let html = "";
    for (let index = 0; index < integrantes.length; index++) {
        let integrante = integrantes[index];

        switch (integrante.Nivel) {
            case "1":
                cNivel = "Basico";
                break;
            case "2":
                cNivel = "Intermedio";
                break;
            case "3":
                cNivel = "Avanzado";
                break;
        
            default:
                break;
        }
        html = html +
            "<tr>" +
                "<th scope='row'>" + integrante.Codigo + "</th>" +
                "<td>" + integrante.Nombres + "</td>" +
                "<td>" + integrante.Correo + "</td>" +
                "<td>" + integrante.Telefono + "</td>" +
                "<td>" + cNivel + "</td>" +
                "<td>" + "<button class='btn btn-danger' onclick='Eliminar(" 
                        + integrante.Codigo + ");'>Eliminar</button>" +
                        "<button class='btn btn-secondary'>Actualizar</button>"
                +"</td>"  +
            "</tr>";
    }

    document.getElementById("tbAgenda").innerHTML = html;
}

function Eliminar(Codigo){
    let integrantesFiltrados = [];
    for (let index = 0; index < integrantes.length; index++) {
        let integrante = integrantes[index];

        if(integrante.Codigo != Codigo){
            integrantesFiltrados.push(integrante);
        }      
    }
    
    integrantes = integrantesFiltrados;
    MostarDatos();
}