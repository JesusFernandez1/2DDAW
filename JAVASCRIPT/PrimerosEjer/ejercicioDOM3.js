function eliminarElemento(){

    var lista = document.getElementsByTagName("li");
    lista[lista.length-1].parentNode.removeChild(lista[lista.length-1]);

}