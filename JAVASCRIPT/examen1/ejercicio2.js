var arr = [];

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

function areaTexto() {

    var lista = document.getElementById("contenido");
    var indiceSeleccionado = lista.selectedIndex;
    var opcionSeleccionada = lista.options[indiceSeleccionado];

    arr.push(opcionSeleccionada.text);

    var areaTexto = document.getElementById("areaTexto");

    areaTexto.textContent="";

    for (let i = 0; i < arr.length; i++) {
     
        areaTexto.append(arr[i]);
        salto = "-"
        areaTexto.append(salto);
    }
    
}

function crearLista() { 

    var div = document.getElementById("palabras");
    var ul = document.createElement("ul");
    for (let i = 0; i < arr.length; i++) {
     
        var li = document.createElement("li");
        li.innerHTML = arr[i];
        ul.appendChild(li);
        
    }
    div.appendChild(ul);
}

function palabraMax() {

    const resultado = arr.reduce((prev, cur) => ((prev[cur] = prev[cur] + 1 || 1), prev), {})

    document.getElementById("palabraRepetida").innerHTML=resultado;
    
}
