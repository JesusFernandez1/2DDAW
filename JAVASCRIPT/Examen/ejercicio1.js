var div = document.getElementById("inputs");
var input = div.getElementsByTagName("input");

var cuadroTexto1 = document.getElementById("cuadroTexto1");
var cuadroTexto2 = document.getElementById("cuadroTexto2");
var cuadroTexto3 = document.getElementById("cuadroTexto3");
var cuadroTexto4 = document.getElementById("cuadroTexto4");
var cuadroTexto5 = document.getElementById("cuadroTexto5");

for (let i = 0; i < input.length; i++) {

    var numAleatorio = getRandomInt();

    if (i==0) {

        cuadroTexto1.value=numAleatorio;
  
      } else if (i==1) {
  
        cuadroTexto2.value=numAleatorio;
  
      } else if (i==2) {
  
        cuadroTexto3.value=numAleatorio;
  
      } else if (i==3) {

        cuadroTexto4.value=numAleatorio;
        
      } else if (i==4) {
        
        cuadroTexto5.value=numAleatorio;

      }
    
}

function getRandomInt() {
    return Math.floor(Math.random() * 10);
  }

function intercambiar1() {

    var intercambiar1 = cuadroTexto1.value;
    var intercambiar2 = cuadroTexto2.value;

    cuadroTexto1.value = intercambiar2;
    cuadroTexto2.value = intercambiar1;
    
}
function intercambiar2() {

    var intercambiar2 = cuadroTexto2.value;
    var intercambiar3 = cuadroTexto3.value;

    cuadroTexto2.value = intercambiar3;
    cuadroTexto3.value = intercambiar2;
    
}
function intercambiar3() {

    var intercambiar3 = cuadroTexto3.value;
    var intercambiar4 = cuadroTexto4.value;

    cuadroTexto3.value = intercambiar4;
    cuadroTexto4.value = intercambiar3;
    
}
function intercambiar4() {

    var intercambiar4 = cuadroTexto4.value;
    var intercambiar5 = cuadroTexto5.value;

    cuadroTexto4.value = intercambiar5;
    cuadroTexto5.value = intercambiar4;
    
}

function comprobar() {

var copy1 = document.getElementById("cuadroTexto1");
var copy2 = document.getElementById("cuadroTexto2");
var copy3 = document.getElementById("cuadroTexto3");
var copy4 = document.getElementById("cuadroTexto4");
var copy5 = document.getElementById("cuadroTexto5");

    if ((copy1.value <= copy2.value) && (copy2.value<=copy3.value) && (copy3.value<=copy4.value) && (copy4.value<=copy5.value)) {

        alert("Los numeros estan ordenados de menor a mayor");

        document.getElementById("invertir").hidden=false;
        
    } else {

        alert("Los numeros NO estan ordenados de menor a mayor");
    }
    
}

function invertir() {

var copy1 = document.getElementById("cuadroTexto1");
var copy2 = document.getElementById("cuadroTexto2");
var copy4 = document.getElementById("cuadroTexto4");
var copy5 = document.getElementById("cuadroTexto5");

var intercambiar1 = copy1.value;
var intercambiar2 = copy2.value;
var intercambiar4 = copy4.value;
var intercambiar5 = copy5.value;

copy1.value = intercambiar5;
copy2.value = intercambiar4;
copy4.value = intercambiar2;
copy5.value = intercambiar1;

    
}

function ordenar() {

var copy1 = document.getElementById("cuadroTexto1");
var copy2 = document.getElementById("cuadroTexto2");
var copy3 = document.getElementById("cuadroTexto3");
var copy4 = document.getElementById("cuadroTexto4");
var copy5 = document.getElementById("cuadroTexto5");

var numeros = [copy1.value, copy2.value, copy3.value, copy4.value, copy5.value];

numeros.sort(function(a, b){return a - b});

copy1.value = numeros[0];
copy2.value = numeros[1];
copy3.value = numeros[2];
copy4.value = numeros[3];
copy5.value = numeros[4];
    
}