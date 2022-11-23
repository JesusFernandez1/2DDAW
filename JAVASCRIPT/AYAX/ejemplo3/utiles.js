$(document).ready(function () {
  $("#contenido").on("click", ".borrar", function () {
    var id = $(this).parent().siblings().eq(0).html();
    console.log(id);
  });

  $.ajax({
    url: "borrarlibro.php=" + id,
    type: "GET",
    dataType: "text",
    success: function (datos) {
      $(this).parent().parent().delete();
    },

    error: function (xhr, status) {
      alert("Disculpe, existió un problema");
    },
    complete: function (xhr, status) {
      //alert('Petición realizada');
    },
  });
});

$(document).ready(function () {

  $.ajax({
    url: "damelibro.php",
    type: "GET",
    dataType: "text",
    success: function (datos) {
      datos = datos.substring(0, datos.length - 1);
      var datos2 = datos.split(",");
      var libros =
        '<table border=1 class="table table-stripped"><tr><th>idlibro</td><td>Titulo</td><td>Autor</td><td>Editora</td><td>Paginas</td><td>Anios</td><td>Acciones</td></tr>';
      $.each(datos2, function (idx, elem) {
        if (idx % 6 == 0) {
          libros =
            libros + '<td><button class="Borrar">Borrar</button></td></tr><tr>';
        }

        libros = libros + "<td>" + elem + "</td>";
      });
      libros = libros + "</table>";
      $("#contenido").html(libros);
    },

    error: function (xhr, status) {
      alert("Disculpe, existió un problema");
    },
    complete: function (xhr, status) {
      //alert('Petición realizada');
    },
  });
});
