function comprobar() {
    var elementos = document.getElementsByName("pregunta");

    for(var i=0; i<elementos.length; i++) {
    alert(" Elemento: " + elementos[i].value + "\n Seleccionado: " + elementos[i].checked);
    }
}
