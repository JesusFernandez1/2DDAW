$(document).ready(function () {
  $.ajax({
    url: "damelibro.php",
    type: "GET",
    dataType: "text",
    success: function (datos) {
      datos = datos.substring(0, datos.length - 1);
      var datos2 = datos.split(",");
      var libros =
        '<table border=1 class="table table-stripped"><tr><th>idlibro</td><th>Titulo</th><th>Autor</th><th>Editora</th><th>Paginas</th><th>Anios</th><th>Acciones</th></tr>';
      $.each(datos2, function (idx, elem) {
        if (idx % 6 == 0 && idx != 0) {
          libros =
            libros + '<td><button class="borrar">Borrar</button></td></tr><tr>';
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

$(document).ready(function () {
  $("#contenido").on("click", ".borrar", function () {
    var id = $(this).parent().siblings().eq(0).html();
    console.log(id);
    var fila = $(this).parent().parent();
  });

  $.ajax({
    url: "borrarlibro.php?id=" + id,
    type: "GET",
    dataType: "text",
    success: function (datos) {
      fila.remove();
    },

    error: function (xhr, status) {
      alert("Disculpe, existió un problema");
    },
    complete: function (xhr, status) {
      //alert('Petición realizada');
    },
  });
  $("#insertar").click(function () {
    $.ajax({
      url: "insertarlibro.php",
      type: "POST",
      dataType: "text",
      data: {
        titulo: $("#titulo").val(),
        autor: $("#autor").val(),
        editorial: $("#editorial").val(),
        paginas: $("#paginas").val(),
        anno: $("#anno").val(),
      },
      success: function (datos) {},
      error: function (xhr, status) {
        alert("Disculpe, existió un problema");
      },
      complete: function (xhr, status) {
        //alert('Petición realizada');
      },
    });
  });
});
