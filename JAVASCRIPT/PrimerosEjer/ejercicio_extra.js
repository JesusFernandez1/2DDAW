palabra = prompt("Introduce una palabra");
var contador = 0;
const letras = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];      
var i = 0;

while(i < palabra.length){

var posicion = 0;

	if (palabra.charAt(i)==letras.charAt([posicion])) {

		contador++;
		i++;

	} 

	posicion++;

}
	
document.write(contador);