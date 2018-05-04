console.log(Cookies.get('oldenough'));
if(Cookies.get('oldenough')=='1'){
	$('#agegate').fadeOut();
	$('.contenido').removeClass('invisible');
}



$.autotab({ tabOnSelect: true });
$('.number').autotab('filter', 'number');
$('input#DD4').focusout(function(e) {
    var code = e.keyCode || e.which;
  	dd1 = $('#DD1').val();
  	dd2 = $('#DD2').val();
  	dd3 = $('#DD3').val();
  	dd4 = $('#DD4').val();
  	dateString = dd1+dd2+dd3+dd4;
  	//alert(dateString);
  
  	// Return today's date and time
	var currentTime = new Date()
	
	// returns the month (from 0 to 11)
	var month = currentTime.getMonth() + 1
	
	// returns the day of the month (from 1 to 31)
	var day = currentTime.getDate()
	
	// returns the year (four digits)
	var year = currentTime.getFullYear()
  
  	edad = year - dateString;
  	//alert(edad);
  	if(edad>17 && edad<100){
	  	Cookies.set('oldenough', '1', { expires: 7, path: '' });
	  	$('#agegate').fadeOut();
	$('.contenido').removeClass('invisible');
  	}else if(edad>=100){
	  	alert('Debes ingresar un año válido');
		$('#DD1').val('');
		$('#DD2').val('');
		$('#DD3').val('');
		$('#DD4').val('');
  	}else{
	  	alert('Debes ser mayor de 18 años para ingresar.');
		$('#DD1').val('');
		$('#DD2').val('');
		$('#DD3').val('');
		$('#DD4').val('');
  	}
});


$('#btn-entrar').on('click',function(){
  	dd1 = $('#DD1').val();
  	dd2 = $('#DD2').val();
  	dd3 = $('#DD3').val();
  	dd4 = $('#DD4').val();
  	dateString = dd1+dd2+dd3+dd4;
  	//alert(dateString);
  
  	// Return today's date and time
	var currentTime = new Date()
	
	// returns the month (from 0 to 11)
	var month = currentTime.getMonth() + 1
	
	// returns the day of the month (from 1 to 31)
	var day = currentTime.getDate()
	
	// returns the year (four digits)
	var year = currentTime.getFullYear()
  
  	edad = year - dateString;
  	//alert(edad);
  	if(edad>17){
	  	Cookies.set('oldenough', '1', { expires: 7, path: '' });
	  	$('#agegate').fadeOut();
  	}else{
	  	alert('Debes ser mayor de 18 años para ingresar.');
  	}
});


$(".owl-carousel").owlCarousel({
	 items:1,
	 loop: true,
	 autoplay: true,
	 nav: true,
	 dots: false,
	 navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>']
});


	$('#form_datos').on("submit", function(e) {
	  	e.preventDefault();
	  
		$("#btn-enviar").html('<i class="fa fa fa-spinner fa-spin"></i>');
		$('#form_datos .alert').addClass('hide');
		
		$('#progreso').removeClass('hide');
		
	  	nombre 		= $('#nombre').val();
	  	rut 		= $('#rut').val();
	  	codigo 		= $('#codigo').val();
	  	telefono 	= $('#fono').val();
	  	email 		= $('#mail').val();
	
		if(nombre==''){
			$('#nombre').addClass('invalid');
			error = 1;
		}
	
	
		if(rut==''){
			$('#rut').addClass('invalid');
			error = 1;
		}	
	
		if(telefono==''){
			$('#fono').addClass('invalid');
			error = 1;
		}
	
		if(email==''){
			$('#mail').addClass('invalid');
			error = 1;
		}
	  
		if($('#rut').hasClass('invalid')){
			$('#rut').addClass('invalid');
			error = 1;
		}
		
/*
		if(dia==''){
			$('#dia1').addClass('invalid');
			error = 1;
		}
*/
/*
	
	
		if(tour==''){
			$('#tour1').addClass('invalid');
			error = 1;
		}	
*/
	  
	  
	  	if(error==0){  
		    $.ajax({
			    url: "ajax/graba.php",
				type: "POST",
	            data: $('#form_datos').serialize(),
	            success: function(data) {		   
				    console.log(data);  
					error = 0;
			    	if(data=='error'){
						$('#form_datos .alert-danger').removeClass('hide');
						$("#btn-enviar").html('enviar');
			    	}else{
						$('#form_datos .alert-warning').removeClass('hide');
						$('#form_datos')[0].reset();
						$("#btn-enviar").html('enviar');
						gtag('config', 'UA-114415903-1', {'page_path': '/envio-formulario'});
			    	} 
				    
		    	}
		    });	  	
	  	}else{ 	
		  	$('#form_datos .alert-danger').removeClass('hide');
			$("#btn-enviar").html('enviar');
			error = 0;
		  	return;
		}
	});

	$(".rut")
	  .rut({formatOn: 'keyup', validateOn: 'keyup'})
	  .on('rutInvalido', function(){ 
	    $(this).removeClass("valid");
	    $(this).addClass("invalid");
	    error = 1;
	  })
	  .on('rutValido', function(){ 
	    $(this).removeClass("invalid");
	    $(this).addClass("valid");
	    error = 0;
	  });
    
    $('.alert-warning .close').on('click',function(){
	    $('.alert-warning').addClass('hide');
    });
    
    $('.alert-danger .close').on('click',function(){
	    $('.alert-danger').addClass('hide');
    });




	$('#form_datos2').on("submit", function(e) {
	  	e.preventDefault();
	  
		$("#btn-enviar2").html('<i class="fa fa fa-spinner fa-spin"></i>');
		$('#form_datos2 .alert').addClass('hide');
		
		$('#progreso2').removeClass('hide');
		
	  	nombre 		= $('#nombre2').val();
	  	rut 		= $('#rut2').val();
	  	telefono 	= $('#fono2').val();
	  	email 		= $('#mail2').val();
	
		if(nombre==''){
			$('#nombre').addClass('invalid');
			error = 1;
		}
	
	
		if(rut==''){
			$('#rut').addClass('invalid');
			error = 1;
		}	
	
		if(telefono==''){
			$('#fono').addClass('invalid');
			error = 1;
		}
	
		if(email==''){
			$('#mail').addClass('invalid');
			error = 1;
		}
	  
		if($('#rut').hasClass('invalid')){
			$('#rut').addClass('invalid');
			error = 1;
		}
	  
	  
	  	if(error==0){  
		    $.ajax({
			    url: "ajax/graba2.php",
				type: "POST",
	            data: $('#form_datos2').serialize(),
	            success: function(data) {		   
				    console.log(data);  
					error = 0;
			    	if(data=='error'){
						$('#form_datos2 .alert-danger').removeClass('hide');
						$("#btn-enviar2").html('enviar');
			    	}else{
						$('#form_datos2 .alert-warning').removeClass('hide');
						$('#form_datos2')[0].reset();
						$("#btn-enviar2").html('enviar');
						gtag('config', 'UA-114415903-1', {'page_path': '/envio-formulario'});
			    	} 
				    
		    	}
		    });	  	
	  	}else{ 	
		  	$('#form_datos2 .alert-danger').removeClass('hide');
			$("#btn-enviar2").html('enviar');
			error = 0;
		  	return;
		}
	});
