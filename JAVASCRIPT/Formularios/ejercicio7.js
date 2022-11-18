<<<<<<< HEAD
var arr = [];

function añadir() {

  var total = document.getElementById("total");
  var tabla = document.getElementById("Tabla");
  var codigo = document.getElementById("codigo");
  var descripcion = document.getElementById("descripcion");
  var cantidad = document.getElementById("cantidad");
  var precio = document.getElementById("precio");
  var subtotal = precio.value * cantidad.value;
  arr.push(subtotal);

  if (!isNaN(precio.value) || !isNaN(cantidad.value)) {

    for (var i = 0; i < 1; i++) {

      var tr = document.createElement("tr");

      for (var j = 0; j < 7; j++) {

        if (j == 0) {

          añadirFila(codigo.value, tr);

        } else if (j == 1) {

          añadirFila(descripcion.value, tr);

        } else if (j == 2) {

          añadirFila(cantidad.value, tr);

        } else if (j == 3) {

          añadirFila(precio.value, tr);

        } else if (j == 4) {

          añadirFila(subtotal, tr);

        } else if (j == 5) {

          var totalPrecio = 0;

          for (var u = 0; u < arr.length; u++) {

            totalPrecio = totalPrecio + arr[u];

          }

          total.innerHTML = totalPrecio;

        } else {

          var td = document.createElement("td");
          var boton = document.createElement("button");
          boton.innerHTML = "Borrar";
          var boton2 = document.createElement("button");
          boton2.innerHTML = "Modificar";
          boton2.onclick = function modificar() {

            document.getElementById("añadir").hidden = true;
            document.getElementById("mod").hidden = false;
            fila = boton2.parentNode.parentNode;
            var valores = fila.getElementsByTagName("td");
            document.getElementById("codigo").value = valores[0].innerHTML;
            document.getElementById("descripcion").value = valores[1].innerHTML;
            document.getElementById("cantidad").value = valores[2].innerHTML;
            document.getElementById("precio").value = valores[3].innerHTML;
            var indice = fila.rowIndex;
            document.getElementById("mod").onclick = function () {

              guardarEdit(indice)
              var obtenerFila = boton2.parentNode.parentNode;
              var obtenerDato = obtenerFila.getElementsByTagName("td");
              total.innerHTML = total.innerHTML - obtenerDato[4].innerHTML;
              fila = boton.parentNode.parentNode.rowIndex;
              arr.splice(fila - 1, 1);
            };

          }
          boton.onclick = function borrar() {

            var obtenerFila = boton.parentNode.parentNode;
            var obtenerDato = obtenerFila.getElementsByTagName("td");
            total.innerHTML = total.innerHTML - obtenerDato[4].innerHTML;
            fila = boton.parentNode.parentNode.rowIndex; //obtengo el indice de la fila que pulso el boton
            arr.splice(fila - 1, 1); //las filas se cuentan desde 1 a x filas, y estan se guardan en el array pero la primera fila esta en la posicion 0, la segunda en la 1...
            //Si quiero borrar la primera fila que esta en el array tengo que coger el indice de la fila seleccionada y restarle 1 para que se corresponda con el indice de esa fila en el array
            document.getElementById("Tabla").deleteRow(fila);
          }
          td.appendChild(boton);
          td.appendChild(boton2);
          tr.appendChild(td);

        }
        tabla.appendChild(tr);
      }
      codigo.value = "";
      descripcion.value = "";
      cantidad.value = "";
      precio.value = "";
    }

  }

}

function añadirFila(variable, tr) {

  var td = document.createElement("td");
  var textotd = document.createTextNode(variable);
  td.appendChild(textotd);
  tr.appendChild(td);

}

function comprobar() {

  var tabla = document.getElementById("TablaOculta");
  var elementosTd = tabla.getElementsByTagName("td");
  var codigo = document.getElementById("codigo");
  var descripcion = document.getElementById("descripcion");
  var precio = document.getElementById("precio");

  for (let i = 0; i < elementosTd.length; i++) {

    if (codigo.value == elementosTd[i].innerHTML) {

      descripcion.value = elementosTd[i + 1].innerHTML;

      precio.value = elementosTd[i + 2].innerHTML;

    } else if (codigo.value == elementosTd[i].innerHTML) {

      descripcion.value = elementosTd[i + 1].innerHTML;
      precio.value = elementosTd[i + 2].innerHTML;

    } else if (codigo.value == elementosTd[i].innerHTML) {

      descripcion.value = elementosTd[i + 1].innerHTML;
      precio.value = elementosTd[i + 2].innerHTML;

    }

  }

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
  celdas[4].innerHTML = precioTotal;

  document.getElementById("añadir").hidden = false;
  document.getElementById("mod").hidden = true;
=======
var arr = [];

function añadir() {

  var total = document.getElementById("total");
  var tabla = document.getElementById("Tabla");
  var codigo = document.getElementById("codigo");
  var descripcion = document.getElementById("descripcion");
  var cantidad = document.getElementById("cantidad");
  var precio = document.getElementById("precio");
  var subtotal = precio.value * cantidad.value;
  arr.push(subtotal);

  if (!isNaN(precio.value) || !isNaN(cantidad.value)) {

    for (var i = 0; i < 1; i++) {

      var tr = document.createElement("tr");

      for (var j = 0; j < 7; j++) {

        if (j == 0) {

          añadirFila(codigo.value, tr);

        } else if (j == 1) {

          añadirFila(descripcion.value, tr);

        } else if (j == 2) {

          añadirFila(cantidad.value, tr);

        } else if (j == 3) {

          añadirFila(precio.value, tr);

        } else if (j == 4) {

          añadirFila(subtotal, tr);

        } else if (j == 5) {

          var totalPrecio = 0;

          for (var u = 0; u < arr.length; u++) {

            totalPrecio = totalPrecio + arr[u];

          }

          total.innerHTML = totalPrecio;

        } else {

          var td = document.createElement("td");
          var boton = document.createElement("button");
          boton.innerHTML = "Borrar";
          var boton2 = document.createElement("button");
          boton2.innerHTML = "Modificar";
          boton2.onclick = function modificar() {

            document.getElementById("añadir").hidden = true;
            document.getElementById("mod").hidden = false;
            fila = boton2.parentNode.parentNode;
            var valores = fila.getElementsByTagName("td");
            document.getElementById("codigo").value = valores[0].innerHTML;
            document.getElementById("descripcion").value = valores[1].innerHTML;
            document.getElementById("cantidad").value = valores[2].innerHTML;
            document.getElementById("precio").value = valores[3].innerHTML;
            var indice = fila.rowIndex;
            document.getElementById("mod").onclick = function () {

              guardarEdit(indice)
              var obtenerFila = boton2.parentNode.parentNode;
              var obtenerDato = obtenerFila.getElementsByTagName("td");
              total.innerHTML = total.innerHTML - obtenerDato[4].innerHTML;
              fila = boton.parentNode.parentNode.rowIndex;
              arr.splice(fila - 1, 1);
            };

          }
          boton.onclick = function borrar() {

            var obtenerFila = boton.parentNode.parentNode;
            var obtenerDato = obtenerFila.getElementsByTagName("td");
            total.innerHTML = total.innerHTML - obtenerDato[4].innerHTML;
            fila = boton.parentNode.parentNode.rowIndex; //obtengo el indice de la fila que pulso el boton
            arr.splice(fila - 1, 1); //las filas se cuentan desde 1 a x filas, y estan se guardan en el array pero la primera fila esta en la posicion 0, la segunda en la 1...
            //Si quiero borrar la primera fila que esta en el array tengo que coger el indice de la fila seleccionada y restarle 1 para que se corresponda con el indice de esa fila en el array
            document.getElementById("Tabla").deleteRow(fila);
          }
          td.appendChild(boton);
          td.appendChild(boton2);
          tr.appendChild(td);

        }
        tabla.appendChild(tr);
      }
      codigo.value = "";
      descripcion.value = "";
      cantidad.value = "";
      precio.value = "";
    }

  }

}

function añadirFila(variable, tr) {

  var td = document.createElement("td");
  var textotd = document.createTextNode(variable);
  td.appendChild(textotd);
  tr.appendChild(td);

}

function comprobar() {

  var tabla = document.getElementById("TablaOculta");
  var elementosTd = tabla.getElementsByTagName("td");
  var codigo = document.getElementById("codigo");
  var descripcion = document.getElementById("descripcion");
  var precio = document.getElementById("precio");

  for (let i = 0; i < elementosTd.length; i++) {

    if (codigo.value == elementosTd[i].innerHTML) {

      descripcion.value = elementosTd[i + 1].innerHTML;

      precio.value = elementosTd[i + 2].innerHTML;

    } else if (codigo.value == elementosTd[i].innerHTML) {

      descripcion.value = elementosTd[i + 1].innerHTML;
      precio.value = elementosTd[i + 2].innerHTML;

    } else if (codigo.value == elementosTd[i].innerHTML) {

      descripcion.value = elementosTd[i + 1].innerHTML;
      precio.value = elementosTd[i + 2].innerHTML;

    }

  }

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
  celdas[4].innerHTML = precioTotal;

  document.getElementById("añadir").hidden = false;
  document.getElementById("mod").hidden = true;
>>>>>>> e38a152dc35bd1cad84173d322d23cad58cd7fbe
}