<?php 
	include 'connect.php';
 
	/*Departamento	
	Peaje	
	Coordenadas	
	Categoria I	
	Categoria II	
	Categoria III	
	Categoria IV	
	Categoria V	
	Categoria VI	
	Categoria VII*/

	$getData = 'SELECT * FROM listar_peajes';

	$res = $conn->query($getData);

	while ($r = mysqli_fetch_row($res)) {
		

		$aux[] = array(
			'departamento' => $r[0], 
			'nombre_peaje' => $r[1], 
			'latitud' => $r[2], 
			'longitud' => $r[3], 
			'cat_I' => $r[4], 
			'cat_II' => $r[5], 
			'cat_III' => $r[6], 
			'cat_IV' => $r[7],
			'cat_V' => $r[8],
			'cat_VI' => $r[9],
			'cat_VII' => $r[10]
			);

	}

	$json = $aux;

	//echo var_dump($json);
	echo json_encode($json,JSON_UNESCAPED_UNICODE);

	@mysqli_close($conn);

 ?>