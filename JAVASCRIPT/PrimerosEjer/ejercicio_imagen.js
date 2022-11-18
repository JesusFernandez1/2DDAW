function aumentar() {
    
   var imagen = document.getElementsByTagName("img");
   var change = parseInt(imagen[0].getAttribute("width"));
   imagen[0].setAttribute("width", change + 5);

}


function disminuir() {
    
    var imagen = document.getElementsByTagName("img");
   var change = parseInt(imagen[0].getAttribute("width"));
   imagen[0].setAttribute("width", change -5);

}