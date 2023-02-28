var integrantes = [];
var nCodigo = 0;

function GuardarIntegrante(){
    document.getElementById("txtValidacion").innerHTML = "";
    if (nCodigo == 0) {
        nCodigo = integrantes.length+1;
    }
    else{
        Eliminar(nCodigo, false);
    }

    let integrante;
    let cNombres = document.getElementById("txtNombres").value;
    let cCorreo = document.getElementById("txtCorreo").value;
    let cTelefono = document.getElementById("txtTelefono").value;
    let nNivel = document.getElementById("ddNivel").value;
    let cNivel ="";

////////////////////////////////////////////////////////////////////
    //El nombre como  minimo debe tener 6 caracteres
    if(cNombres.length <=6){
        document.getElementById("txtValidacion").innerHTML = "Los datos ingresasdos 'Nombre Completo' son incorrectos";
        return;
    }
///////////////////////////////////////////////////////////////////
    //Validacion Nivel
    if((parseInt(nNivel)) == 0){
        document.getElementById("txtValidacion").innerHTML = "Seleccione un nivel";
        return;
    }
/////////////////////////////////////////////////////////////////////
    //El correo tienen que contener el caracter @
    let validarCorreo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    if (!(validarCorreo.test(cCorreo))) {
        document.getElementById("txtValidacion").innerHTML = "Ingrese un correo valido";
        return;
    }
///////////////////////////////////////////////////////////////////////
    //El telefono solo tienen que tener numero
    let valorInt = parseInt(cTelefono);
    if (!Number.isInteger(valorInt)) {
        document.getElementById("txtValidacion").innerHTML = "Ingrese un numero valido";
        return;
    }
////////////////////////////////////////////////////////////////////

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
    let integrantesOrdenados = integrantes.sort();
    for (let index = 0; index < integrantesOrdenados.length; index++) {
        let integrante = integrantesOrdenados[index];

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
                         "<button class='btn btn-secondary' onclick='Buscar(" 
                        + integrante.Codigo + ");'>Actualizar</button>"
                +"</td>"  +
            "</tr>";
    }

    document.getElementById("tbAgenda").innerHTML = html;
}

function Eliminar(Codigo, MostrarDatos = true){
    let integrantesFiltrados = [];
    for (let index = 0; index < integrantes.length; index++) {
        let integrante = integrantes[index];

        if(integrante.Codigo != Codigo){
            integrantesFiltrados.push(integrante);
        }      
    }
    
    integrantes = integrantesFiltrados;

    if (MostrarDatos) {
        MostarDatos();
    }
    MostarDatos();
}

function Buscar(Codigo) {
    let integranteEncontrado;
    for (let index = 0; index < integrantes.length; index++) {        
        let integrante = integrantes[index];
        if (integrante.Codigo == Codigo) {
            integranteEncontrado = integrante;
        }
    }
    document.getElementById("txtNombres").value =integranteEncontrado.Nombres;
    document.getElementById("txtCorreo").value= integranteEncontrado.Correo;
    document.getElementById("txtTelefono").value= integranteEncontrado.Telefono;
    document.getElementById("ddNivel").value = integranteEncontrado.Nivel;
    nCodigo = Codigo;
}