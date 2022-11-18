<?php

//Ejemplo de funciones Insert y Update en capa de abstracción de BBDD

class BD {
	//.... Resto funciones
	
	/**
	 * 
	 * @param unknown $tabla
	 * @param array $registro formato ('campo'=>valor, 'campo'=>valor,...)
	 */
	public function insert($tabla, $registro)
	{
		$nombres=array();
		$valores=array();
		foreach($registro as $campo=>$valor)
		{
			$nombres[]='`'.$campo.'`';
			$valores[]='"'.addslashes($valor).'"';
		}
		
		$sql="insert into $table (".implode(',', $nombres).") ".
			 "values (".implode(',', $valores).");"
			 		
	   	$this->consulta($sql);
	}
	
	
	public function update($tabla, $registro, $cond)
	{
		$valores=array();
		foreach($registro as $campo=>$valor)
		{
			$valores[]= $campo.' ="'.addslashes($valor).'"';
		}
		
		$sql="update $table SET ".
				implode(',', $valores).
			  "where ".$cond;
		
		$this->consulta($sql);
	}
}


$db->insert('tareas', 
		array('nombre'=>'Tarea 1', 'fecha'=>'fecha'));
		
$db->update('tareas', array('nombre'=>'La nueva tarea'), 'id='.$id);