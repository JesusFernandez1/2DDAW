function mover_elemento(){

    var usuario = prompt("Introduzca la provincia");
    var contenido = document.createTextNode(usuario);
    var cadena = document.getElementById("lista");
    var li = document.createElement("li");
    li.appendChild(contenido);
    cadena.appendChild(li);


}