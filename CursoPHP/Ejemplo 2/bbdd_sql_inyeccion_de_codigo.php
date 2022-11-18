<?php
/*
 * Mostramos formulario si no han enviado datos
 */
if (! $_GET ) {
    ?>
<form action="" method="GET">
	Inicial nombre: <input name="ini" type="text" />
	<p>
		<input name="enviar" type="submit" />
	</p>
</form>
<?php
} else {
    ?>
<HEAD>
<TITLE>lectura.php</TITLE>
</HEAD>
<BODY>
	<h1>
		<div align="center">Lectura de la tabla</div>
	</h1>
	<br>
	<br>
<?php
    // Conexion con la base
    $conex=mysqli_connect("localhost", "root", "", "provincias");

    // selección de la base de datos con la que vamos a trabajar
    //mysql_select_db("provincias");

    $ini = $_GET['ini'];
    
    // Protegemos la sentencia SQL
    //$ini = mysqli_escape_string($conex, $_GET['ini']);

    
    $sql = "select * from tbl_provincias where nombre like '$ini%'";
    echo "<pre>" . $sql;
    // print_r($_GET);
    echo "</pre>";
    $result = mysqli_query($conex, $sql);
    ?>
<table align="center">
		<tr>
			<th>Cod</th>
			<th>Nombre</th>
		</tr>
<?php
    // Mostramos los registros
    while ($row = mysqli_fetch_array($conex, $result)) {
        echo '<tr><td>' . $row["cod"] . '</td>';
        echo '<td>' . $row["nombre"] . '</td></tr>';
    }

    ?>
</table>

	<div align="center">
		<a href="https://educacionadistancia.juntadeandalucia.es/centros/huelva/pluginfile.php/95154/mod_folder/content/0/ejemplo/insertar.html">Añadir un nuevo registro</a><br> <a
			href="https://educacionadistancia.juntadeandalucia.es/centros/huelva/pluginfile.php/95154/mod_folder/content/0/ejemplo/actualizar1.php">Actualizar un registro existente</a><br> <a
			href="https://educacionadistancia.juntadeandalucia.es/centros/huelva/pluginfile.php/95154/mod_folder/content/0/ejemplo/borrar1.php">Borrar un registro</a><br>
	</div>

</BODY>
</HTML>
<?php 
}
?>