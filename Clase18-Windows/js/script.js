function RecargarPagina() {
    window.location.reload(); 
}

function RecargaPausada() {
    setTimeout(RecargarPagina,2000);
}

function RedireccionarNosotros() {
    window.location.href = "/Nosotros.html";
}

function MoverObjeto(){
    let numRandom1 = Math.random()*1440;
    let numRandom2 = Math.random()*700;
    document.getElementById("objetoJ").style.left = numRandom1 + "px";
    document.getElementById("objetoJ").style.top = numRandom2 + "px";
    numRandom1 = Math.random()*1440;
    numRandom2 = Math.random()*700;
    document.getElementById("objetoK").style.left = numRandom1 + "px";
    document.getElementById("objetoK").style.top = numRandom2 + "px";
    numRandom1 = Math.random()*1440;
    numRandom2 = Math.random()*700;
    document.getElementById("objetoL").style.left = numRandom1 + "px";
    document.getElementById("objetoL").style.top = numRandom2 + "px";
}

setInterval(MoverObjeto,500);