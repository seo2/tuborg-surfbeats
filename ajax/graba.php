<?php
$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
if ($ajax) {
	require_once("_lib/config.php");
	require_once("_lib/MysqliDb.php");
	$db 	= new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
	
	$nombre		= filter_var($_POST["nombre"], FILTER_SANITIZE_STRING);
	$rut		= filter_var($_POST["rut"], FILTER_SANITIZE_STRING);
	$codigo		= filter_var($_POST["codigo"], FILTER_SANITIZE_STRING);
	$mail 		= filter_var($_POST["mail"], FILTER_SANITIZE_EMAIL);
	$fono		= filter_var($_POST["fono"], FILTER_SANITIZE_STRING);


/*
	$existe = 0;
	$participante = $db->rawQuery('select * from postulantes where posRut LIKE "'.$rut.'"');
	if($participante){
		foreach ($participante as $p) {
			$existe = 1;
		}
	}  
*/

//	if($existe == 0){
			
		$ua		= $_SERVER['HTTP_USER_AGENT'];
		$ip		= $_SERVER['REMOTE_ADDR'];	
			
		date_default_timezone_set('America/Santiago');
		$ahora 	= date("Y-m-d H:i:s");
		
		$data = Array (
			"surfNom" 	=> $nombre,
			"surfRut" 	=> $rut,
			"surfMail" 	=> $mail,
			"surfFono" 	=> $fono,
			"surfCod" 	=> $codigo,
			"surfTS" 	=> $ahora
		);
		
		$id = $db->insert ('surfbeats', $data);
		
		
		if($id){
			echo $id;
		}else{
			echo 'error';
		}
/*
	}else{
		echo 'existe';
	}
*/
}else{
	echo 'error';
}
?>