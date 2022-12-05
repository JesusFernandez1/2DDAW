<?php
/**
 * Mostrar errores que se producen en consultas
 *
 */
$conex = mysqli_connect('localhost', 'root', '', 'provincias');

if ($conex) {
    echo "<p>Se ha conectado con exito</p>";
} else {
    echo "<p>ERROR EN la conexión</p>";
}

//
// PROPUESTA 1
//

$rs = mysqli_query($conex, 'select * from tbl_provinciasa');

/*
 * Después de cada consulta podemos utilizar las funciones msqli_errno y mysqli_error
 * para obtener información sobre el error
 */
if (! $rs) {
    echo "<p>Error Nº: " . mysqli_errno($conex) . "</p>";
    echo "<p>Error Desc: " . mysqli_error($conex) . "</p>";
    die("<p><strong>Finalizamos el programa ...</strong></p>");
}

//
// PROPUESTA 2
//


// Quedaría mejor utilizando una función que comprobará todas las consultas
// que se realizan
$sql = 'select * from tbl_provinciass';
$rs = SelectQuery($conex, $sql);

echo "<p>Numero de provincias: " . mysqli_num_rows($rs) . "</p>";

echo "<table>";
while ($reg = mysqli_fetch_assoc($rs)) {
    echo "<tr><td>Código: {$reg['cod']}</td>";
    echo "<td>Nombre: {$reg['nombre']}</td></tr>";
}
echo "</table>";

echo "<pre>";
print_r($reg);
echo "</pre>";

mysqli_close($conex);

/**
 * Función que podemos reutilizar para no tener que ensuciar el código con
 * comprobaciones
 *
 * @param unknown $conex
 * @param unknown $sql
 */
function SelectQuery($conex, $sql)
{
    $rs = mysqli_query($conex, $sql);

    /*
     * Después de cada consulta podemos utilizar las funciones msqli_errno y mysqli_error
     * para obtener información sobre el error
     */
    if (! $rs) {
        echo "<p>Error Nº: " . mysqli_errno($conex) . "</p>";
        echo "<p>Error Desc: " . mysqli_error($conex) . "</p>";
        
        // Esto es ser un poco drástico ...
        die('<p><strong>Finalizado programa</strong></p>');
    }
}