<?php 
	require_once("ajax/_lib/config.php");
	require_once("ajax/_lib/MysqliDb.php");	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tuborg - Galería Weekend Santiago</title>

	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="assets/css/formValidation.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/css/tuborg.css?v=1.2">
	<link rel="icon" type="image/png" href="favicon.png" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114415903-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-114415903-1');
	</script>

  </head>
  <body>
		<section id="agegate">
		  	<div class="container">
		  		<div class="row">
		  			<div class="col-xs-8 col-xs-offset-2 col-sm-2 col-sm-offset-5">
			  			<img src="assets/img/logo-tuborg.png" class="img-responsive">
		  			</div>	
		  		</div>
		  		<div class="row">
		  			<div class="col-sm-10 col-sm-offset-1 text-center">
		  				<div class="pwag-birthday-group pwag-birthday-group--visible  pwag-current " style="">
			  				<p class="agegate-txt">Año de nacimiento</p>
			  									
			  				<div class="pwag-date-box pwag-date-box--0 ">						
				  				<span class="pwag-date-box__value"></span>						
				  				<span class="pwag-date-box__placeholder">_</span>						
				  				<input type="number" class="pwag-date-box__input number" id="DD1"  maxlength="1" size="1"> 					
				  			</div>					
				  			<div class="pwag-date-box pwag-date-box--1">						
					  			<span class="pwag-date-box__value"></span>						
					  			<span class="pwag-date-box__placeholder">_</span>						
					  			<input type="number" class="pwag-date-box__input number" id="DD2"  maxlength="1" size="1">					
					  		</div>					
					  		<div class="pwag-date-box pwag-date-box--2">						
						  		<span class="pwag-date-box__value"></span>						
						  		<span class="pwag-date-box__placeholder">_</span>						
						  		<input type="number" class="pwag-date-box__input number" id="DD3"  maxlength="1" size="1">					
						  	</div>					
						  	<div class="pwag-date-box pwag-date-box--3">						
							  	<span class="pwag-date-box__value"></span>						
							  	<span class="pwag-date-box__placeholder">_</span>						
							  	<input type="number" class="pwag-date-box__input number" id="DD4"  maxlength="1" size="1">					
							</div>				
						</div>
		  				<div class="row">
		  					<div class="form-group text-center">
		  						<button type="submit" class="btn btn-default" id="btn-entrar">Entrar</button>
		  					</div>
		  				</div>
		  			</div>	
		  		</div>
		  	</div>
		</section>
		<section class="contenido invisible" id="slider">
	  		<div class="container">
		  		<div class="row">
		  			<div class="col-sm-10 col-sm-offset-1">
		  				<img src="assets/img/banner.jpg" class="img-responsive">
		  			</div>
		  		</div>
	  		</div>
		</section>
		<section class="contenido invisible" id="formulario1">
	  		<div class="container">
		  		<div class="row">
		  			<div class="col-sm-10 col-sm-offset-1">
			  			<div class="formulariobox">
				  			<div class="row">
					  			<div class="col-sm-10 col-sm-offset-1">
						  			
						  			<h1>Jumping Bus</h1>
						  			<p>Inscríbete aquí por uno de los cupos<br>para el Jumping Bus.</p>
						  			
					  				<form class="form-horizontal" role="form" id="form_datos">
						  				
						  				<div class="row">
						  					<div class="form-group col-sm-12">
						  						<input type="text" class="form-control" id="nombre1" name="nombre" placeholder="NOMBRE" required> 
						  					</div>
						  				</div>
						  				<div class="row">
						  					<div class="form-group col-sm-6">
						  						<input type="text" class="form-control rut" id="rut1" name="rut" placeholder="RUT" required> 
						  					</div>
						  					<div class="form-group col-sm-6">
						  						<input type="text" class="form-control" id="fono1" name="fono" placeholder="TELÉFONO" required> 
						  					</div>
						  				</div>
						  				<div class="row">
						  					<div class="form-group col-sm-12">
						  						<input type="email" class="form-control" id="mail1" name="mail" placeholder="CORREO" required> 
						  					</div>
						  				</div>
						  				<div class="row">
						  					<div class="col-sm-6 col-sm-offset-3">
								  				<div class="alert alert-warning alert-dismissible fade in text-center hide" role="alert">
									  				<button type="button" class="close" aria-label="Close">
										  				<span aria-hidden="true">×</span>
										  			</button> 
										  			<strong>Excelente!</strong><br>Hemos registrado tu inscripción. 
										  		</div>
								  				<div class="alert alert-danger alert-dismissible fade in text-center hide" role="alert">
									  				<button type="button" class="close" aria-label="Close">
										  				<span aria-hidden="true">×</span>
										  			</button> 
										  			<strong>Oh oh!</strong><br>Ha ocurrido un error, por favor vuelve a intentarlo. 
										  		</div>
						  					</div>
						  				</div>
					  					<div class="form-group text-center">
					  						<button type="submit" class="btn btn-default" id="btn-enviar">Enviar</button>
					  					</div>
					  				</form>
					  			</div>
				  			</div>
			  			</div>
		  			</div>
		  		</div>
	  		</div>
		</section>
		<section class="contenido invisible" id="formulario2">
	  		<div class="container">
		  		<div class="row">
		  			<div class="col-sm-10 col-sm-offset-1">
			  			<div class="formulariobox">
				  			<div class="row">
					  			<div class="col-sm-10 col-sm-offset-1">
						  			<div class="row">
						  				<div class="col-xs-3">
						  					<img src="assets/img/logo_daw.png" class="img-responsive">
						  				</div>
						  				<div class="col-xs-9">
						  					<p>inscríbete aquí por uno<br>de los cupos a Drink and Write<br><small>para el viernes 11 de Mayo a las 20:00 horas.</small></p>
						  				</div>
						  			</div>
					  			</div>
				  			</div>
				  			<div class="row">
					  			<div class="col-sm-10 col-sm-offset-1">
						  			
					  				<form class="form-horizontal" role="form" id="form_datos2">
						  				
						  				<div class="row">
						  					<div class="form-group col-sm-12">
						  						<input type="text" class="form-control" id="nombre2" name="nombre" placeholder="NOMBRE" required> 
						  					</div>
						  				</div>
						  				<div class="row">
						  					<div class="form-group col-sm-6">
						  						<input type="text" class="form-control rut" id="rut2" name="rut" placeholder="RUT" required> 
						  					</div>
						  					<div class="form-group col-sm-6">
						  						<input type="text" class="form-control" id="fono2" name="fono" placeholder="TELÉFONO" required> 
						  					</div>
						  				</div>
						  				<div class="row">
						  					<div class="form-group col-sm-12">
						  						<input type="email" class="form-control" id="mail2" name="mail" placeholder="CORREO" required> 
						  					</div>
						  				</div>
						  				<div class="row">
						  					<div class="col-sm-6 col-sm-offset-3">
								  				<div class="alert alert-warning alert-dismissible fade in text-center hide" role="alert">
									  				<button type="button" class="close" aria-label="Close">
										  				<span aria-hidden="true">×</span>
										  			</button> 
										  			<strong>Excelente!</strong><br>Hemos registrado tu inscripción. 
										  		</div>
								  				<div class="alert alert-danger alert-dismissible fade in text-center hide" role="alert">
									  				<button type="button" class="close" aria-label="Close">
										  				<span aria-hidden="true">×</span>
										  			</button> 
										  			<strong>Oh oh!</strong><br>Ha ocurrido un error, por favor vuelve a intentarlo. 
										  		</div>
						  					</div>
						  				</div>
						  				<div class="row">
						  					<div class="col-sm-4 col-sm-offset-4">
							  					<div class="form-group text-center">
							  						<button type="submit" class="btn btn-default" id="btn-enviar2">Enviar</button>
							  					</div>
						  					</div>
						  					<div class="col-sm-3 col-sm-offset-1">
							  					<img src="assets/img/logo-madhaus.png" class="img-responsive" id="madhaus">
						  					</div>
						  				</div>
					  				</form>
					  			</div>
				  			</div>
			  			</div>
		  			</div>
		  		</div>
	  		</div>
		</section>
		<footer  class="contenido invisible">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="row">
							<div class="col-sm-4 col-sm-offset-2">
								<div class="row">
									<div class="col-sm-10 col-sm-offset-1">
										<img src="assets/img/logo-tuborg.png" class="img-responsive">
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="row">
									<div class="col-sm-10 col-sm-offset-1">
										<img src="assets/img/logo_galeria.png" class="img-responsive">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.autotab.min.js"></script>
	<script src="assets/js/js.cookie.js"></script>
    <script src="assets/js/jquery.mask.min.js"></script> 
    <script src="assets/js/jquery.rut.min.js"></script>
	<script src="assets/js/tuborg.js"></script>
  </body>
</html>