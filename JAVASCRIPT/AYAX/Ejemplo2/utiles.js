$(document).ready(function(){
    $('#botoncargar').click(function(){
        //id = $('#articulo').val();
        $.ajax({
            url : 'https://jsonplaceholder.typicode.com/photos/',
            //data : { id : 123 },
            type : 'GET',
            dataType : 'json',
            success : function(datos) {
                console.log(datos);
                //alert(datos.title);
                for (let i = 0; i < 10; i++) {
                $('#contenido').append('<h1>'+datos[i].title+'</h1>');
                $('#contenido').append('<img src='+datos[i].url+'>');
                }
            },
            error : function(xhr, status) {
                alert('Disculpe, existió un problema');
            },
            complete : function(xhr, status) {
                //alert('Petición realizada');
            }
        });
    })
});