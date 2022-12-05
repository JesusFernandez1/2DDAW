<?php
include "conex_bbdd.inc.php";

// Leemos CCAA
$rsCCAA=SelectQuery($conex, 'select * from tbl_comunidadesautonomas');

// Para cada CCAA leemos las provincias que tiene y las guardamos en un array
$comunidades=[];
/* Comunidades tendrá la siguiente estructura
 *    $comunidades=array(
 *    	array('nombre'=>'....', 'provincias'=>array(....)),
 *      ...
 *    );
 */

while ($regCCAA=mysqli_fetch_assoc($rsCCAA)) {
	$sqlProvCCAA='select * from tbl_provincias where comunidad_id='.$regCCAA['id'];
	$rsProv=SelectQuery($conex, $sqlProvCCAA);

	// Recorro las provincias de cada comunidad autonoma
	$provincias=[];
	while ($regProv=mysqli_fetch_assoc($rsProv)) {
		$provincias[]=$regProv['nombre'];
	}
	
	$comunidades[]=array(
			'nombre'=>$regCCAA['nombre'],
			'provincias'=>$provincias,	
	);	
}

//echo "<pre>"; print_r($comunidades); echo "</pre>";

// En comunidades tengo toda la información de las comunidades y las provincias que tiene

// REcorro array y muestro en formato tabla
/* tengo que conseguir un formato como este
 *   <table>
 *      <tr rowspan="x">
 *         <td>CCAA</td><td>prov1</td>
 *      </tr>
 *      <tr>
 *         <td>prov2</td>
 *      </tr>
 *      ....
 *  
 */



echo "\n<table border=1>\n";
foreach($comunidades as $comunidad) {
	echo "\n<tr>
			<td rowspan=\"".count($comunidad['provincias'])."\">{$comunidad['nombre']}</td>";
	$primeraVez=true;
	foreach($comunidad['provincias'] as $provincia) {
		//echo "<!-- sacando provincia -->";
		if ($primeraVez) {
			//echo "<!-- sacando provincia 1 -->";
			echo "\n\t<td>$provincia</td>\n</tr>";
			$primeraVez=false;
		}
		else {
			//echo "<!-- sacando provincia 2-->";
				
			echo "\n<tr>\n\t<td>$provincia</td>\n</tr>";
		}
	}
}
echo "\n</table>";


/**
 * Función que podemos reutilizar para no tener que ensuciar el código con 
 * comprobaciones
 * @param unknown $conex
 * @param unknown $sql
 */
function SelectQuery($conex, $sql) {
	
	$rs = mysqli_query ($conex, $sql );
	
	/*
	 * Después de cada consulta podemos utilizar las funciones msqli_errno y mysqli_error
	 * para obtener información sobre el error
	 */
	if (! $rs) {
		echo "<p>Error en sentencia SQL:</p><pre>$sql</pre>";
		echo "<p>Error Nº: ". mysqli_errno($conex)."</p>";
		echo "<p>Error Desc: ".mysqli_error($conex)."</p>";
		die('<p><strong>Finalizado programa</strong></p>');
	}
	
	return $rs;
}