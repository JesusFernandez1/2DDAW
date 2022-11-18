function rellenar() {

    var parrafo = document.getElementById("parrafo");
    var select = document.getElementById("contenido");
    var arr = parrafo.innerHTML.split(' ');

      for (let i = 0; i < arr.length; i++) {
        
        var opti = document.createElement("option");
        var palabra = arr[i];
        var text = document.createTextNode(palabra);
        opti.appendChild(text);
        select.appendChild(opti);
        
    }

    
}