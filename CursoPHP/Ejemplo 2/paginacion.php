<?php
/** 
 * EJEMPLO GENERICO SOBRE COMO PAGINAR UN CONJUNTO DE RESULTADOS EN PHP
 * 
 * solo nos centraremos en la páginación. El resto del código dependerá de lo que estemos realizando
 * 
 * Utilizaremos paginación indicando el número de página por $_GET
 * 
 * La URl tendrá el siguiente formato: lista.php?pag=X
 *  
 **/


$tabla_a_listar="XXXX";

// Ruta URL desde la que ejecutamos el script
$myURL='xxxxxxxx.php'; 

//
// --SENTENCIAS PHP -- Sentencias PHP de incio - Las que se precisen
//

$nElementosxPagina=20;

// Calculamos el número de página que mostraremos
if (isset($_GET['pag']))
{
	// Leemos de GET el número de página
	$nPag=$_GET['pag'];
}
else 
{
	// Mostramos la primera página
	$nPag=1;
}

//
// --SENTENCIAS PHP -- Leemos resultado en $reg
//

// Calculamos el total de registros que tenemos
$sqlCont="select count(*) as total from $tabla_a_listar";

$rsCont=mysqli_query($conex, $sqlCont);
$reg=mysql_fetch_array($conex, $rsCont);

$totalRegistros=$reg['total'];
$totalPaginas=floor($totalRegistros/$nElementosxPagina);


// Calculamos el registro por el que se empieza en la sentencia LIMIT
$nReg=($nPag-1)*$nElementosxPagina;

// Obtenemos la lista de registros
$sqlReg="select * from $tabla_a_listar LIMIT $nReg, $nElementosxPagina";

// Aquí incluimos la el resultado de ejecutar la sentencia
$rs=mysqli_query($conex, $sqlTotal);
while ($reg=mysqli_fetch_array($rs) {
	// Mostramos registro
}

//
// --SENTENCIAS PHP -- Mostramos los elementos de la consulta como deseemos
//

MuestraPaginador($nPag, $totalPaginas, $myURL);


//
// --SENTENCIAS PHP -- Cerramos la página
//

// -----------------------------------------------------------------------

/**
 * Muestra un paginador para una lista de elementos
 * 
 * @param int $pag_actual
 * @param unknown $nPags
 * @param unknown $url
 */
function MuestraPaginador($pag_actual, $nPags, $url)
{
	// Mostramos paginador
	echo '<div style="text-align=center">';
	echo EnlaceAPagina($url, 1, 'Inicio');
	echo EnlaceAPagina($url, $pag_actual-1, 'Anterior', $pag_actual>1);
	for($pag=1; $pag<=$nPags; $pag++)
	{
		echo EnlaceAPagina($url, $pag, $pag, $pag_actual!=$pag);
	}
	echo EnlaceAPagina($url, $pag_actual+1, 'Anterior', $pag_actual<$nPags);
	echo EnlaceAPagina($nPags, 1, 'Fin');
	echo "</div>";
}

/**
 * Devuelve el texto de un enlace (etiqueta <a>) a la página $url si el enlace está activo,
 * en otro caso solo devuelve el texto 
 * 
 * @param string $url		URL de la página que muestra la lista
 * @param int $pag			Nº de página al cual enlazamos
 * @param string $texto		Texto del enlace
 * @param bool $activo		Se muestra enlace (true) o no (false)	
 * @return string
 */
function EnlaceAPagina($url, $pag, $texto, $activo=true)
{
	if ($activo)
		return '<a href="'.$url.'?pag='.$pag.'">'.$texto.'</a> ';
	else 
		return $texto;
}