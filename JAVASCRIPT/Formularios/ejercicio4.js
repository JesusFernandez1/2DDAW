var contadorSi = 0;
var contadorNo = 0;
var contadorNsnc = 0;

function comprobar() {
    
    var elementos = document.getElementsByName("pregunta");
    const valorSi = document.querySelector('#voto_si');
    const valorNo = document.querySelector('#voto_no');
    const valorNsnc = document.querySelector('#voto_nsnc');

    for(var i=0; i<elementos.length; i++) {

        if ((elementos[i].value == elementos[0].value) && (elementos[i].checked==true)) {

            contadorSi++;
            valorSi.textContent = contadorSi;
            
        }else if ((elementos[i].value == elementos[1].value) && (elementos[i].checked==true)) {

            contadorNo++;
            valorNo.textContent = contadorNo;

        }else if ((elementos[i].value == elementos[2].value) && (elementos[i].checked==true)) {
           
            contadorNsnc++;
            valorNsnc.textContent = contadorNsnc;

        }

    }

}
