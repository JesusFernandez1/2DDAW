var palabra = prompt("Introduce una palabra");
let arr = palabra.split('')
var contador = 0;
var recorrido = 0;
var letraRep = arr[0];

for (var i = 0; i < arr.length; i++) {

	var contadorAux = 0;

	while(recorrido < arr.length){

		if (arr[i] != arr[recorrido]) {

			recorrido++;

		}
		else if (arr[i] == arr[recorrido]) {

				contadorAux++;
				recorrido++;

			} 

	}
		
		if (contadorAux > contador) {

			contador = contadorAux;
			letraRep = arr[i];

		}

	recorrido = 0;
}

document.write("La letra que mas se repite es la " + letraRep + " y se repite un total de " + contador + " veces!");