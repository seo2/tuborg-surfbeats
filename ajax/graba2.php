<?php
$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
if ($ajax) {
	require_once("_lib/config.php");
	require_once("_lib/MysqliDb.php");
	$db 	= new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
	
	$nombre		= filter_var($_POST["nombre"], 	FILTER_SANITIZE_STRING);
	$rut		= filter_var($_POST["rut"], 	FILTER_SANITIZE_STRING);
	$mail 		= filter_var($_POST["mail"], 	FILTER_SANITIZE_EMAIL);
	$fono		= filter_var($_POST["fono"], 	FILTER_SANITIZE_STRING);


	$total = 0;
	$participante = $db->rawQuery('select count(*) as total from drinking');
	if($participante){
		foreach ($participante as $p) {
			$total = $p['total'];
		}
	}  

	if($total <= 100){
			
		$ua		= $_SERVER['HTTP_USER_AGENT'];
		$ip		= $_SERVER['REMOTE_ADDR'];	
			
		date_default_timezone_set('America/Santiago');
		$ahora 	= date("Y-m-d H:i:s");
		
		$data = Array (
			"drinkNom" 	=> $nombre,
			"drinkRut" 	=> $rut,
			"drinkMail" => $mail,
			"drinkFono" => $fono,
			"drinkTS" 	=> $ahora
		);
		
		$id = $db->insert ('drinking', $data);
		
		
		if($id){
	
			$message   = "<!DOCTYPE html>";
			$message  .= "<html lang='en' style='box-sizing: border-box; color: rgba(0, 0, 0, 0.87);  font-size: 14px; font-weight: normal; height: 100%; line-height: 1.5; width: 100%; '>";
			$message  .= "<head style='box-sizing: inherit;'>";
			$message  .= "<meta content='text/html; charset=UTF-8' http-equiv='Content-Type' style='box-sizing: inherit;' />";
			$message  .= "<meta content='width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no' name='viewport' style='box-sizing: inherit;' />";
			$message  .= "</head>";
			$message  .= '<body height="100%" width="100%" bgcolor="#F0F0F0" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;margin:0 auto !important;padding:0 !important;height:100% !important;width:100% !important;text-align: center;">';
			$message  .= '<table style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;border-spacing:0 !important;border-collapse:collapse !important;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;background-color:#f3f3f3; display:inline-table; text-align: left;" border="0" cellpadding="0" cellspacing="0" width="700" height="1080">';
			$message  .= '<tr style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;">';
			$message  .= '<td colspan="5" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;padding:0;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;">';
			$message  .= '<img src="http://promotuborg.cl/v2/assets/img/mail1.jpg" width="700" height="1080" alt="Ya eres parte del taller Drink and Write" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;border:0;-ms-interpolation-mode:bicubic;display:block;">';
			$message  .= "</td></tr></table></body></html>";
			$message  .= "</div>";
			$message  .= "</body>";
			$message  .= "</html>";			
	
			$subject = 'Ya eres parte del taller Drink and Write';
			
			$headers  = "From: Galería Weekend Santiago <no-contestar@promotuborg.cl>\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
			mail($mail, $subject, $message, $headers);			
			
			echo $id;
		}else{
			echo 'error';
		}
	}else{
		echo 'existe';
	}
}else{
	echo 'error';
}
?>