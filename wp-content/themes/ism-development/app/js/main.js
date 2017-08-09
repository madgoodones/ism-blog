$( document ).ready(function() {

	$(".button-nav").attr({
		'data-toggle': 'modal',
		'data-target': '#myModal'
	});

	// Inicia o AOS
	AOS.init({
		offset: 0,
		delay: 0,
	});

    // Adiciona efeitos aos titulos
    $(".go-title").attr({
    	'data-aos': 'fade-down',
    	'data-aos-offset': '50',
    });

    // Adiciona efeitos nos posts em destaque
    $(".go-featured").attr({
    	'data-aos': 'fade-up',
    	'data-aos-offset': '50'
    });

	//Altera margem do wrapper
	var navbar_height = $(".go-navbar").outerHeight();
	console.log(navbar_height);
	$("#navbar-space").css('padding-top', navbar_height);
	

	// Ajusta o tamanho das thumbnails
	var fullblock_height = $(".item-full").height();
	$(".thumb-full").height(fullblock_height);

	// $( window ).resize(function() {
 // 		var fullblock_height = $(".item-full").height();
	// 	$(".thumb-full").height(fullblock_height);
	// });


	// Inicia o Owl
	$('.owl-featured').owlCarousel({
		loop:true,
		margin:0,
		nav:false,
		autoplay:true,
		autoplayTimeout: 4000,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:2
			}
		}
	});

	$('.owl-slider').owlCarousel({
		loop:true,
		margin:0,
		nav:false,
		autoplay:true,
		autoplayTimeout: 3000,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});

	var $form = $('.forms');

	$form.each(function() {

	  $(this).validate({
	    submitHandler: function(form, event) {
	      event.preventDefault();
	      var $this = $(form),
	      $message = $this.find('.message'),
	      $waiting =  $this.find('.waiting'),
	      $success =  $this.find('.success'),
	      $error =  $this.find('.error'),
	      $response = $this.find('#response');
	      console.log('form submit debug');
	      $response.css('display', 'block');
	      $waiting.css('display', 'block');
	      $this.ajaxSubmit({
	      type: 'POST',
	      url: 'http://localhost/blog/wp-content/themes/ism-development/inc/mail/mail.php',

	      success: function(response) {
	        $this[0].reset();
	        $waiting.css('display', 'none');
	        $success.css('display', 'block');
	        console.log(response);

	      },

	      error: function(response) {
	        $waiting.css('display', 'none');
	        $error.css('display', 'block');
	        console.log(response);

	      }

	      });

	      setTimeout(function(){
	      	$message.css('display', 'none');
	        $success.css('display', 'none');
	        $error.css('display', 'none');
	        $response.css('display', 'none')

	      }, 10000);
	     }
	  });
	});

	$.extend($.validator.messages, {

	    required: "Campo obrigatório.",
	    email: "E-mail inválido.",
	    tel: "Telefone inválido."

	});

});