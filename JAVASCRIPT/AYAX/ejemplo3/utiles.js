$(document).ready(function () {
    $.ajax({
        url : 'damelibro.php',
        type : 'GET',
        dataType : 'text',
        success : function(datos) {
            datos = datos.substring(0, datos.length - 1);
           var datos2=datos.split(',')
           var libros='<table><tr><th>idlibro</td><td>Titulo</td><td>Autor</td><td>Editora</td><td>Paginas</td><td>Anios</td></tr>'
           $.each(datos2, function (idx, elem) {

            if (idx%6==0) {
                libros=libros+'</tr><tr>'
            }

            libros=libros+'<td>'+elem+'</td>'
            
           })
           libros = libros+'</table>';
        $('#contenido').html(libros);
        },
        error : function(xhr, status) {
            alert('Disculpe, existió un problema');
        },
        complete : function(xhr, status) {
            //alert('Petición realizada');
        }
    });
})
