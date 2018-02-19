console.log(Cookies.get('oldenough'));
if(Cookies.get('oldenough')=='1'){
	$('#agegate').hide();
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

/*
$('#form_datos')
    .formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            rut: {
                validators: {
                    id: {
                        country: 'CL',
                        message: 'Rut Invalido'
                    }
                }
            }
        }
    })
    .on('err.field.fv', function(e, data) {
            data.element
                .data('fv.messages')
                .find('.help-block[data-fv-for="' + data.field + '"]').hide();
    })
    .on('success.form.fv', function(e) {
		e.preventDefault();
		$("#btn-enviar").html('<i class="fa fa fa-spinner fa-spin"></i>');
		$('.alert').addClass('hide');
		$.ajax({
		    type: "POST",
		    url: "ajax/graba.php",
		    data: $("#form_datos").serialize(),
		    success: function(msg) {
		    	console.log(msg);
		    	if(msg=='error'){
					$('.alert-danger').removeClass('hide');
					$('#btn-enviar').prop('disabled', false);
					$('#btn-enviar').removeClass('disabled');
		    	}else{
					$('.alert-warning').removeClass('hide');
					$('#btn-enviar').prop('disabled', false);
					$('#btn-enviar').removeClass('disabled');
					$('#form_datos').data('formValidation').resetForm();
					$('#form_datos')[0].reset();
		    	}
				$("#btn-enviar").html('enviar');
		    },
		    error: function(xhr, status, error) {
				//alert(status);
			}
		});

		 
    })
    .find('[name="rut"]').mask('99999999-A');
  
*/  

	$('#form_datos').on("submit", function(e) {
	  	e.preventDefault();
	  
		$("#btn-enviar").html('<i class="fa fa fa-spinner fa-spin"></i>');
		$('.alert').addClass('hide');
		
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
	
		if(codigo==''){
			$('#codigo').addClass('invalid');
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
			    url: "ajax/graba.php",
				type: "POST",
	            data: $('#form_datos').serialize(),
	            success: function(data) {		   
				    console.log(data);  
					error = 0;
			    	if(data=='error'){
						$('.alert-danger').removeClass('hide');
						$("#btn-enviar").html('enviar');
			    	}else{
						$('.alert-warning').removeClass('hide');
						$('#form_datos')[0].reset();
						$("#btn-enviar").html('enviar');
			    	} 
				    
		    	}
		    });	  	
	  	}else{ 	
		  	$('.alert-danger').removeClass('hide');
			//Materialize.toast('Debes completar el formulario', 4000);
			$("#btn-enviar").html('enviar');
			error = 0;
		  	return;
		}
	});

	$("#rut")
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
