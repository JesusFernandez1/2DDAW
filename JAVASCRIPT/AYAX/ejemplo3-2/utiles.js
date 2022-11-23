$(document).ready(function(){

    $('#insertar').click(function(){
        $.ajax({
            url : 'insertalibro.php',
            type : 'POST',
            dataType : 'text',
            data: {
                titulo: $('#titulo').val(),
                autor: $('#autor').val(),
                editorial: $('#editorial').val(),
                paginas: $('#paginas').val(),
                anno: $('#anno').val(),
            },
            success : function(datos) {
                fila='<tr><td>dddd</td><td>'+$('#titulo').val()+'</td><td>'+$('#autor').val()+'</td><td>'+$('#editorial').val()+'</td><td>'+$('#paginas').val()+'</td><td>'+$('#anno').val()+'</td><td><button class="borrar">Borrar</button></td>';
                $('#tablalibros').append(fila);
            },
            error : function(xhr, status) {
                alert('Disculpe, existió un problema');
                
            },
            complete : function(xhr, status) {
                //alert('Petición realizada');
            }
        });
    });

    $('#contenido').on('click','.borrar',function(){
        var id = $(this).parent().siblings().eq(0).html();
        console.log(id);
        var fila = $(this).parent().parent();
        $.ajax({
            url : 'borralibro.php?id='+id,
            type : 'GET',
            dataType : 'text',
            success : function(datos) {
                fila.remove();
            },
            error : function(xhr, status) {
                alert('Disculpe, existió un problema');
                
            },
            complete : function(xhr, status) {
                //alert('Petición realizada');
            }
        });
    })

    $.ajax({
        url : 'damelibros.php',
        type : 'GET',
        dataType : 'text',
        success : function(datos) {
            var libros='<table id="tablalibros" border=1 class="table table-stripped"><tr><th>Codigo</th><th>Titulo</th><th>Autor</th><th>Editorial</th><th>Paginas</th><th>Año</th><th>Acciones</th></tr>'
            var datos2 = datos.split(',');
            datos2.pop();
            $.each(datos2,function(i,elemento){
                //console.log('hola');
                if (i%6==0 && i!=0){
                    libros=libros+'<td><button class="borrar"'+'>Borrar</button></td></tr><tr>';} 
                
                libros=libros+'<td>'+elemento+'</td>';
                            
            })
            libros=libros+'<td><button class="borrar">Borrar</button></tr></table>'
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