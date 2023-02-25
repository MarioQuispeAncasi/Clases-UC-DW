var integrantes = [];
var ncodigo = 0;
function GuardarIntegrante(){
    codigo = integrantes.length+1;
    let integrante;
    let cNombres = document.getElementById("txtNombres").value;
    let cCorreo = document.getElementById("txtCorreo").value;
    let cTelefono = document.getElementById("txtTelefono").value;
    //El nombre como  minimo debe tener 6 caracteres
    if(cNombres.length <=6){
        alert("El nombre contiene datos erroneos");
        return;
    }
    //El correo tienen que contener el caracter @
    //El telefono solo tienen que tener numero
    integrante={
        Codigo: ncodigo,
        Nombres: cNombres,
        Correo: cCorreo,
        Telefono: cTelefono,
    }
    integrantes.push(integrante);
    console.log(integrantes);

    document.getElementById("txtNombres").value ="";
    document.getElementById("txtCorreo").value="";
    document.getElementById("txtTelefono").value="";
    ncodigo=0;
    
}

