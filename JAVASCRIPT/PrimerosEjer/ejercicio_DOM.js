function crearParrafo(){
    var parrafo = document.createElement("p");
    var contenido = document.createTextNode("Hola Mundo!");
    parrafo.appendChild(contenido);
    document.body.appendChild(parrafo);

}

function crearParrafoDiv(){

    var contenido = document.createTextNode("Hola Mundo!");
    var cadena = document.getElementById("contenido");
    cadena.appendChild(contenido);
}