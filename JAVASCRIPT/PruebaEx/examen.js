var tabla = document.getElementById("tabla");
var elementosTd = tabla.getElementsByTagName("td");
var elemento = [];
var digito = 0;

function comprobarCeldas() {
    for (let i = 0; i < elementosTd.length; i++) {
    
        elemento[i] = document.getElementsByTagName("td")[i];
        if (elemento[i].innerHTML == '' || elemento[i].innerHTML == 0) {

            elemento[i].style.backgroundColor='#9b9b9b';
        } else if (elemento[i].innerHTML <= 5) {

            elemento[i].style.backgroundColor='#FF0000';
        } else {
            
            elemento[i].style.backgroundColor='#ffffff';
        }
        
    }    
}

function copiar(numero) {
    digito = numero.innerHTML;
}

function pegar(celda) {
    celda.innerHTML = digito;
}

function cambiarColor(celda) {
    celda.style.backgroundColor='#b2ffff'
}
function cambiarColor2(celda) {
    celda.style.backgroundColor='#ffffff'
}