var integrantes = [];
var ncodigo = 0;
function GuardarIntegrante(){
    codigo = integrantes.length+1;
    let integrante;
    let cNombres = document.getElementById("txtNombres").value;
    let cCorreo = document.getElementById("txtCorreo").value;
    let cTelefono = document.getElementById("txtTelefono").value;
    let nNivel = document.getElementById("ddNivel").value;
    let cNivel ="";

    //El nombre como  minimo debe tener 6 caracteres
    if(cNombres.length <=6){
        document.getElementById("txtValidacion").innerHTML = "Los datos ingresasdos 'Nombre Completo' son incorrectos";
        return;
    }
    //El correo tienen que contener el caracter @
    //El telefono solo tienen que tener numero
    integrante={
        Codigo: ncodigo,
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
    ncodigo=0;
}

function MostarDatos(){
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
                "<td></td>" +
            "</tr>";
    }

    document.getElementById("tbAgenda").innerHTML = html;
}
