function Mostrar() {
    document.getElementById("docentesMore").style.display = "grid";
}

function Ocultar() {
    document.getElementById("docentesMore").style.display = "none";
    
}

function Mostrar_Ocultar() {
    var caja = document.getElementById("docentesMore");
    if (caja.style.display == "none") {
        Mostrar();
        document.getElementById("btn-docentesMore").value = "Ocultar";
    }
    else {
        Ocultar();
        document.getElementById("btn-docentesMore").value = "Mostrar más docentes";

    }
}