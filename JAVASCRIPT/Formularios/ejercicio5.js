function lista() {
    
    var lista = document.getElementById("provincias");
    var indiceSeleccionado = lista.selectedIndex;
    var opcionSeleccionada = lista.options[indiceSeleccionado];
    
    const ciudad = document.querySelector('#ciudad');
    ciudad.textContent = opcionSeleccionada.text;
    
    }
    
    function introducir() {

        var elemento = document.getElementById("condiciones");
        var lista = document.getElementById("provincias");
        var opti = document.createElement("option");
        var palabra = document.getElementById("palabra").value;
        var text = document.createTextNode(palabra);

        if (!elemento.checked) {

            opti.appendChild(text);
            lista.appendChild(opti);

        } else if (elemento.checked) {

            var count = 0;

            for (let i = 0; i < lista.length; i++) {

                if (lista.options[i].innerHTML==palabra) {
                    
                    count++;

                }

                console.log(count);
                console.log(lista.options[i].innerHTML);
                console.log(palabra);
                
            }

            if (count == 0) {

                opti.appendChild(text);
                lista.appendChild(opti);

            }

         }
        
    }

    function mostrar() {

        var lista = document.getElementById("provincias");

        for (let i = 0; i < lista.length; i++) {
            
            //console.log(lista[i]);
            
        }
    }