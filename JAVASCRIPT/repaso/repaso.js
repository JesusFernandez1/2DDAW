<<<<<<< HEAD
function editarFila(boton) {
    document.getElementById("añadir").hidden = true;
    document.getElementById("mod").hidden = false;
    var fila = boton.parentNode.parentNode;
    var valores = fila.getElementsByTagName("td");
    document.getElementById("codigo").value = valores[0].innerHTML;
    document.getElementById("descripcion").value = valores[1].innerHTML;
    document.getElementById("cantidad").value = valores[2].innerHTML;
    document.getElementById("precio").value = valores[3].innerHTML;
    var indice = fila.rowIndex;
    document.getElementById("mod").onclick = function () { 
        guardarEdit(indice) 
    };
}
function guardarEdit(indice) {
    var filas = document.getElementById("Tabla").rows;
    var celdas = filas[indice].cells;

    var codigo = document.getElementById("codigo");
    var descripcion = document.getElementById("descripcion");
    var cantidad = document.getElementById("cantidad");
    var precio = document.getElementById("precio");
    var precioTotal = precio.value * cantidad.value;

    celdas[0].innerHTML = codigo.value;
    celdas[1].innerHTML = descripcion.value;
    celdas[2].innerHTML = cantidad.value;
    celdas[3].innerHTML = precio.value;
    celdas[4].innerHTML = precioTotal.toFixed(2);

    calculaTotal();
    limpiarCampos();

    document.getElementById("añadir").hidden = false;
    document.getElementById("mod").hidden = true;
=======
function editarFila(boton) {
    document.getElementById("añadir").hidden = true;
    document.getElementById("mod").hidden = false;
    var fila = boton.parentNode.parentNode;
    var valores = fila.getElementsByTagName("td");
    document.getElementById("codigo").value = valores[0].innerHTML;
    document.getElementById("descripcion").value = valores[1].innerHTML;
    document.getElementById("cantidad").value = valores[2].innerHTML;
    document.getElementById("precio").value = valores[3].innerHTML;
    var indice = fila.rowIndex;
    document.getElementById("mod").onclick = function () { 
        guardarEdit(indice) 
    };
}
function guardarEdit(indice) {
    var filas = document.getElementById("Tabla").rows;
    var celdas = filas[indice].cells;

    var codigo = document.getElementById("codigo");
    var descripcion = document.getElementById("descripcion");
    var cantidad = document.getElementById("cantidad");
    var precio = document.getElementById("precio");
    var precioTotal = precio.value * cantidad.value;

    celdas[0].innerHTML = codigo.value;
    celdas[1].innerHTML = descripcion.value;
    celdas[2].innerHTML = cantidad.value;
    celdas[3].innerHTML = precio.value;
    celdas[4].innerHTML = precioTotal.toFixed(2);

    calculaTotal();
    limpiarCampos();

    document.getElementById("añadir").hidden = false;
    document.getElementById("mod").hidden = true;
>>>>>>> e38a152dc35bd1cad84173d322d23cad58cd7fbe
}