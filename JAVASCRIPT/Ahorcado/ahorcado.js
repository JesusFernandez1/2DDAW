let winAudio = new Audio('Win.mp3'); //inicializo los audios para usarlos cuando ocurra x evento
let Acierto = new Audio('Acierto.mp3');
let error = new Audio('error.mp3');
let GameOver = new Audio('GameOver.mp3');
let Start = new Audio('Musica.mp3');
var vidas = 6; //numero de vidas restantes(cuenta los errores)
var aciertos = 0; //aciertos realizados(cuenta los aciertos)
var porcetajeImagen = 38;
var imagenes = ["letras/A.png", "letras/B.png", "letras/C.png", "letras/D.png", "letras/E.png",
    "letras/F.png", "letras/G.png", "letras/H.png", "letras/I.png", "letras/J.png", "letras/K.png",
    "letras/L.png", "letras/M.png", "letras/N.png", "letras/O.png", "letras/P.png", "letras/Q.png",
    "letras/R.png", "letras/S.png", "letras/T.png", "letras/U.png", "letras/V.png", "letras/W.png",
    "letras/X.png", "letras/Y.png", "letras/Z.png",]; //array que contiene todas las imagenes de los botones en una carpeta

function opcionSeleccionada() { //aqui tras escoger una categoria se escoge una palabra al azar de dicha categoria y creo los guiones junto a las letras

    Start.play();
    arr = [["Leon", "Cabra", "Tigre"], ["Lavadora", "Frigorifico", "Tostadora"], ["Raton", "Telefono", "Ordenador"]];
    var pos1 = document.getElementById("catego").value;
    var pos2 = Math.trunc(Math.random() * 3);
    palabra = arr[pos1][pos2].split("");
    obtenerGuiones(palabra);
    generarLetras(palabra);
    var opcion = document.getElementById("jugar");
    opcion.style.display = "none"; //oculto el boton para que no se accione por accidente este metodo de nuevo
}

function obtenerGuiones(palabraObtenida) { //creo y muestro una serie de spans con guiones bajos por cada letra de la palabra oculta

    var div = document.getElementById("DivGuiones");

    for (let i = 0; i < palabraObtenida.length; i++) {

        var span = document.createElement("span");
        span.id = i;
        span.innerHTML = "_ ";
        div.appendChild(span);
    }
}

function generarLetras(palabra) { //genero todos los botones con las letras automaticamente y les asigno una funcion que se activara al pulsar dicho boton

    var letra = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    var div = document.getElementById("letras");
    var palabraSeleccionada = palabra;
    var bajadaMax = 30/palabraSeleccionada.length; //esta variable simboliza el numero en % que baja Mario por cada acierto, 35(que es un numero el cual yo he estimado para que cuadre bien la bajada) lo divido entre la longitud de la palabra
                                                   //para asi ir bajando segun los aciertos del usuario, llegando siempre al mismo sitio abajo independientemente del numero de aciertos totales

    for (let i = 0; i < letra.length; i++) {

        if (i % 9 == 0) { //cada 9 botones un salto de linea para que sea mas visual y "bonito"
            div.appendChild(document.createElement('br'));
        }
        var boton = document.createElement("button");
        boton.id = letra[i];
        boton.className = "boton";
        boton.innerHTML = `<img class="letras" src="${imagenes[i]}" alt="">`; //aqui cambio el contenido de los botones haciendo que sean las imagenes anteriormente declaradas en mi array
        boton.onclick = function pulsarBoton() {

            var contador = 0;

            for (let i = 0; i < palabraSeleccionada.length; i++) {

                if (this.id == palabraSeleccionada[i].toUpperCase()) {
                    var span = document.getElementById(i);
                    var imagen = document.getElementById("mario");
                    span.innerHTML = this.id;
                    porcetajeImagen = porcetajeImagen + bajadaMax;
                    imagen.style.top = porcetajeImagen + '%';
                    contador++;
                    aciertos++;
                    Acierto.play();
                }
                this.disabled = true;
                this.style.opacity=0.7;

                if (aciertos == palabraSeleccionada.length) {
                    apagarBotones();
                    Start.pause();
                    winAudio.play();
                }

            } if (contador == 0) {
                vidas--;
                comprobarPartida();
            }
        }
        div.appendChild(boton);
    }

    function comprobarPartida() { //cada vez se pierde una vida/hay un fallo, llamo a esta funcion para realizar los cambios convenientes

        switch (vidas) {
            case 5:
                var vida6 = document.getElementById("vida6");
                vida6.hidden = true;
                error.play();
                break;
            case 4:
                var vida5 = document.getElementById("vida5");
                vida5.hidden = true;
                error.play();
                break;
            case 3:
                var vida4 = document.getElementById("vida4");
                vida4.hidden = true;
                error.play();
                break;
            case 2:
                var vida3 = document.getElementById("vida3");
                vida3.hidden = true;
                error.play();
                break;
            case 1:
                var vida2 = document.getElementById("vida2");
                vida2.hidden = true;
                error.play();
                break;
            case 0:
                var vida1 = document.getElementById("vida1");
                vida1.hidden = true;
                apagarBotones();
                Start.pause();
                GameOver.play();
                break;
        }
    }
}
function jugarAgain() { //al pulsar el boton de jugar otra vez refresco la pagina para volver al incio del todo
    location.reload() //Nota: Esto se puede hacer asi debido a que se hace todo en una sola vista, si se hiciese con mas simplemente se tendria que volver a la vista inicial
}
function apagarBotones() { //cuando se pieder o se gana, llamo a esta funcion y me desactiva todos los botones
    const boton = document.querySelectorAll(".boton");
    boton.forEach(boton => {
        boton.disabled = true;
        boton.style.opacity=0.7;
        //esto era para realizar una accion en distintos elementos con una misma clase
    });
}