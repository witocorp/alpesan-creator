function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}
$(document).ready(function(){
	var langP = 0;
	if($('#polPri').is(':checked')){
		langP = 1;
		localStorage.setItem("web_dev_isCookieAccepted", "yes");
		cookieBanner = document.getElementsByClassName("nk-cookie-banner")[0];
    	cookieBanner.style.display = "none";
	}
	var color = $("body").data("color");
	$('.nk-cookie-banner').css({"background-color": color, "border-color": color});
	$('.banner_head').css({"background-color": color});
        $('.btn-outline-danger').css({"color": color, "border-color": color});
        $('.btn-outline-danger').hover(
           function() {
              $(this).css({"background-color": color, "color": "#fff"})
           }, function() {
              $(this).css({"color": color,"border-color": color, "background-color": "initial"})
           }
        );
        if($('#navbarTogglerDemo02 ul li a').length <= 1) {
             $('.navbar-toggler').hide();
        }
	$('footer a, .nk-cookie-banner a').on('click', function(){
			event.preventDefault();
			$($(this).attr("href")).modal('show');
	});
	$('#enviar_form').on('click', function(){
		var flag = 0;
		var options = "";	
		$("input[type=radio]:checked").each(function() {
			options = options+this.name+" : "+this.value+",";  
		});
		if(!$('#nombre_form').val()){
			$('#nombre_form').addClass('border-danger');
			flag = 1;
		}else{
			$('#nombre_form').removeClass('border-danger');	
		}
		if(!$('#apellido_form').val()){
			$('#apellido_form').addClass('border-danger');
			flag = 1;
		}else{
			$('#apellido_form').removeClass('border-danger');
		}
		if($('#polPri').is(':checked')){
			$('#polPri').removeClass('border-danger');
		}else{
			$('#polPri').addClass('border-danger');
			flag = 1;
		}
		if(!$('#telefono_form').val()){
			$('#telefono_form').addClass('border-danger');
			flag = 1;
		}else{
			$('#telefono_form').removeClass('border-danger');
		}
		if(!$('#email_form').val() || !validateEmail($('#email_form').val())){
			$('#email_form').addClass('border-danger');
			flag = 1;
		}else{
			$('#email_form').removeClass('border-danger');
		}
		if(!$('#direccion_form').val()){
			$('#direccion_form').addClass('border-danger');
			flag = 1;
		}else{
			$('#direccion_form').removeClass('border-danger');
		}
		if(flag === 0){
			$.ajax({
		      url: '../assets/emails.php',
		      type: 'POST',
		      data: { 
		      	nombre : $('#nombre_form').val(),
		      	apellido : $('#apellido_form').val(), 
		      	telefono : $('#telefono_form').val(), 
		      	email : $('#email_form').val(), 
		      	direccion : $('#direccion_form').val(), 
		      	idLanding: $("body").data("idLanding"),
		      	fnacimiento: $("#nacimiento_form").val(),
		      	opciones : options
		      },
		      success: function(output){
		      	console.log(output);
		      	$('#nombre_form').val('');
		      	$('#apellido_form').val(''); 
		      	$('#telefono_form').val(''); 
		      	$('#email_form').val(''); 
		      	$('#direccion_form').val('');
		      	$("#nacimiento_form").val('');
		      	$("#polPri").prop('checked', false);
		      	if(langP === 1){
					$('<div class="alert alert-success alert-dismissible fade show mt-3" role="alert"> E-Mail wurde erfolgreich Versendet.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>').insertAfter( "#enviar_form" );
				}else{
					$('<div class="alert alert-success alert-dismissible fade show mt-3" role="alert"> E-mail envoy?? avec succ??s.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>').insertAfter( "#enviar_form" );
				}		      	
		      }
		    });
		}
	})
})
