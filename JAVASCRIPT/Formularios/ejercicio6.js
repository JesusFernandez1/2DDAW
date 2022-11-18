<<<<<<< HEAD
function pueblos() {

    arr = [["Araceba", "Niebla", "Cortegana"], ["Alcala", "Ecija", "Estepa"], ["Conil", "Jerez", "Puerto real"], ["Alcaracejos", "Belmez", "Cabra"]];

    var lista = document.getElementById("provincias");
    console.log(lista)
    var municipios = lista.selectedIndex;
    var posicion = arr[municipios];
    var lista_municipios = document.getElementById("pueblos");
    lista_municipios.innerHTML = "";
      for (let i = 0; i < posicion.length; i++) {
        
        var opti = document.createElement("option");
        var palabra = arr[municipios][i];
        var text = document.createTextNode(palabra);
        opti.appendChild(text);
        lista_municipios.appendChild(opti);
        
    }
=======
function pueblos() {

    arr = [["Araceba", "Niebla", "Cortegana"], ["Alcala", "Ecija", "Estepa"], ["Conil", "Jerez", "Puerto real"], ["Alcaracejos", "Belmez", "Cabra"]];

    var lista = document.getElementById("provincias");
    console.log(lista)
    var municipios = lista.selectedIndex;
    var posicion = arr[municipios];
    var lista_municipios = document.getElementById("pueblos");
    lista_municipios.innerHTML = "";
      for (let i = 0; i < posicion.length; i++) {
        
        var opti = document.createElement("option");
        var palabra = arr[municipios][i];
        var text = document.createTextNode(palabra);
        opti.appendChild(text);
        lista_municipios.appendChild(opti);
        
    }
>>>>>>> e38a152dc35bd1cad84173d322d23cad58cd7fbe
}