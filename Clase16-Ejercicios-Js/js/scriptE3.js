function Mover(){
    for (let index = 0; index <=7; index++) {
        document.getElementById("btnProcesar").style.top=(Math.random()*66) + "px";
        document.getElementById("btnProcesar").style.left=(Math.random()*133) + "px";
    }
}

function Retornar() {
    document.getElementById("btnProcesar").style.top="50px";
    document.getElementById("btnProcesar").style.left="300px";
    alert("Ganaste");
}