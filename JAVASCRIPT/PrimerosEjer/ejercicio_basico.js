letra = prompt('Introduce una letra');

var palabra = "casa";
var contador = 0;

for (var i = 0; i <= palabra.length; i++) {
	
	if (letra==palabra.charAt(i)) {

		contador++;
	}

}

document.write(contador);