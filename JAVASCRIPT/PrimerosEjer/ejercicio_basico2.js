frase = prompt("Introduzca su frase");
var contador = 0;
var cadenaFrase = frase.split(" ");
var cadenaFraseJunta = cadenaFrase.join("");
var suma = 0;

for (var i = 0; i < cadenaFraseJunta.length; i++) {
	
	if (!isNaN(cadenaFraseJunta.charAt(i))) {

		suma = parseInt(cadenaFraseJunta.charAt(i)) + suma;
	}

	else{

		contador++;

	}

	

}

document.write("La frase tiene " + contador + " letras y la suma de sus numeros es: " + suma + "");