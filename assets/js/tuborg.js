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