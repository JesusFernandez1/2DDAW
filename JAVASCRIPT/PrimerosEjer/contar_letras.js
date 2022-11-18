var palabra = prompt("Introduce una palabra");
let arr = palabra.split('')
let arrCount =[];
var contador = 0;
var max = 0;


for (var i = 0; i < arr.length; i++) {

	contador = 0;

	for (let u = 0; u < arr.length; u++) {
        
        if (arr[i] == arr[u]) {

            contador++;
            
        }
        
    }

    arrCount[i] = contador;

}

for (var i = 0; i < arrCount.length; i++) {
	

	if (arrCount[i] > arrCount[i+1]) {

		max = arrCount[i];

		var posicion = i;

	}

}

document.write("La letra que mas se repite es la " + arr[posicion] + " y se repite un total de " + max + " veces!");