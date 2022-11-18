numero = prompt("Introduzca un numero");
random = Math.floor(Math.random() * (10 - 0) + 0);


while(numero!=random){

  if (numero<random) {

    alert("El numero es mas grande")

    numero = prompt("Introduzca otro numero")

  }else if(numero>random){

    alert("El numero es mas pequeño")

    numero = prompt("Introduzca otro numero")
  }

}

alert("Acertaste el numero");
