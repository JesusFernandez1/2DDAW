<?php
include "utilsforms.php";
include "../Objetos/GestorErrores.php";
$ge=new GestorErrores('<span style="color:red">', '</span>');

if ( ! $_POST ) 
{ // Si no han enviado el fomulario
	include 'fomulario.php';
}
else 
{
	if (isset($_POST['edad']))
	{
		$edad=$_POST['edad'];
	}
	else
	{
		$edad='';
	}
	
	if (! is_numeric($edad) || $edad<18)
	{
		$ge->AnotaError('edad', 'Edad > 18');
	}
	
	if (ValorPost('curso')=='')
	{
		$ge->AnotaError('curso', 'Introduzca curso');
	}
	
	if ($errores)
	{
		// Hay error
		include 'fomulario.php';
	}
	else 
	{ // NO hay error
		echo "<h1>Pagina resultados</h1>";
		echo "<p>Has enviado los datos</p>";
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
	}
}
