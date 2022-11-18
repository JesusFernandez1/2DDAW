var palabra = prompt("Introduce una palabra");
let arr = palabra.split('');
var contador = 0;
var contadorAux = 0;
var recorrido = 0;
var cont = 1;
var posicionLetra = 0;
var letraRep = arr[posicionLetra];

for (var i = 0; i <= arr.length; i++) {

	while(recorrido < arr.length){

		if (arr[posicionLetra] != arr[cont]) {

			cont++;
			recorrido++;

		}else if ((arr[posicionLetra] == arr[cont]) && (contadorAux > 0)) {

				cont++;
				contadorAux++;
				recorrido++;

			} else {

				cont++;
				recorrido++;
				contador++;

			}

		}

		if (contadorAux > contador) {

			contador = contadorAux;
			letraRep = arr[posicionLetra];

		}

	posicionLetra = posicionLetra + 1;
	recorrido = 0;
	contadorAux = 1;

}

document.write("La letra que mas se repite es la " + letraRep + " y se repite un total de " + contador + " veces!");