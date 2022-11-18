var palabra = prompt("Introduce una palabra");
let arr = palabra.split('')
let arrCount =[];
var contador = 0;
var max = 0;


for (var i = 0; i < arr.length; i++) {

	for (let u = 0; u < arr.length; u++) {
        
        if (arr[i] == arr[u]) {

            contador++;
            
        }
        
    }

    arr[i] = contador;

    if(contador)

}

document.write("La letra que mas se repite es la " + letraRep + " y se repite un total de " + contador + " veces!");