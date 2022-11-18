function eliminarElemento(){

    var usuario = prompt("Que elemento quieres borrar?")-1;
    var lista = document.getElementsByTagName("li");
    lista[usuario].parentNode.removeChild(lista[usuario]);

}