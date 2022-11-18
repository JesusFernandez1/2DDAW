
function buscar() {
var letra = document.getElementById("letra").value;
var palabra = document.getElementById("palabra").value;

var contador = 0;

for (var i = 0; i <= palabra.length; i++) {
	
	if (letra==palabra.charAt(i)) {

		contador++;
	}
}

var resultado = document.getElementById("result");
resultado.value = contador;

}
