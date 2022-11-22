$(document).ready(function () {
    $.ajax({
        url : 'damelibro.php',
        type : 'GET',
        dataType : 'text',
        success : function(datos) {
           console.log(datos);
        },
        error : function(xhr, status) {
            alert('Disculpe, existió un problema');
        },
        complete : function(xhr, status) {
            //alert('Petición realizada');
        }
    });
})
