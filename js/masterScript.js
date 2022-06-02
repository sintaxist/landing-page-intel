$('#hamburguer_menu').click( function() {
  $(this).toggleClass("active");
  $('#menu-mobile').toggleClass("open");
});

$('#menu-mobile li a').click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight-5;
  $('html, body').stop().animate({
      scrollTop: offsetTop
  }, 850);
  $('#hamburguer_menu').removeClass("active");
  $('#menu-mobile').removeClass("open");
  e.preventDefault();
});

// Cache selectors
var lastId,
 topMenu = $("header"),
 topMenuHeight = topMenu.outerHeight()+1,
 // All list items
 menuItems = topMenu.find("nav a, nav a ul.dropdown-mwnu li a"),
 // Anchors corresponding to menu items
 scrollItems = menuItems.map(function(){
   var item = $($(this).attr("href"));
    if (item.length) { return item; }
 });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight-10;
  $('html, body').stop().animate({
      scrollTop: offsetTop
  }, 850);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight+15;

   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";

	// Set/remove active class
	console.log(id)
	menuItems.removeClass("active");
	$('#'+id+'-link').addClass('active')
});


var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
	autoplay: {
		delay: 3000,
	  },
    // Navigation arrows
    //navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', },

  })

//$('.HQxj66t_dUa5yiZ9H9b4kA').hide();

//--- SWIPPER ----
/*var galleryThumbs = new Swiper('.gallery-thumbs', {
  spaceBetween: 10,
  slidesPerView: 4,
  loop: true,
  freeMode: true,
  loopedSlides: 5,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  autoplay: {
    delay: 3000,
  },
});
var galleryTop = new Swiper('.gallery-top', {
  spaceBetween: 10,
  loop:true,
  loopedSlides: 5,
  autoplay: {
    delay: 3000,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
},
  thumbs: {
  swiper: galleryThumbs,
},
});


$('.ctaportada').on('click', function(){
	$('html,body').animate({
        scrollTop: $('#portada').offset().top-topMenuHeight+2
    }, 'slow');
  appearModal()
	return false;
});

$('.overlay').on('click', function(){
	$('body').removeClass('no-scroll');
	$(this).fadeOut();
	$('.modal:visible').fadeOut();
});

$('.close').on('click', function(){
	$('body').removeClass('no-scroll');
	$(this).parents('.modal').fadeOut();
	$('.overlay').fadeOut();
});

$('.trigger-aviso').on('click', function(){
	$('body').addClass('no-scroll');
	$('.overlay').fadeIn();
	$('#privacy-policy').fadeIn();
	return false;
});

function appearModal(){
	$('#rockvspop').fadeIn();
	$('.overlay').fadeIn();
}
function graciasModal(){
  $('#gracias').fadeIn();
  $('.overlay').fadeIn();
}

//graciasModal();

// Set the date we're counting down to
var countDownDate = new Date("Dec 10, 2019 14:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("contador").innerHTML = days + " dias " + hours + " horas " + minutes + " minutos y " + seconds + " segundos ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("contador").innerHTML = "Ya inició";
  }
}, 1000);

///////  VOTAR ////////////
votar = $(".opciones-votos a");
$(".opciones-votos a").on("click", function(){
  votar.removeClass("selected");
  $(this).addClass("selected");
	$('input[name="voto"]').val($(this).attr('data'));
});

$('.submit').on('click', function(e){
	e.preventDefault();
	//var email = $('.input-text').val();
	var voto = $('input[name="voto"]').val();

	if(voto == ''){
		!$('.opciones-votos').siblings('.error').is(':visible') ? $('.opciones-votos').before('<p class="error">*Debes elegir una opción<p>') : '';
		return false;
	}else{
		$('.opciones-votos').siblings('.error').remove();
	}

	

	$.ajax({
		type: "POST",
		url: 'save-data.php',
		data: {
			//'email': email,
			'voto': voto
		},
		beforeSend: function(){
			$('.submit').before('<p class="envio-process">Enviando...<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></p>');
		},
		success: function(data){
			$('.submit').fadeIn();
			if(data == 'email repetido'){
				$('.envio-process').text('*El email ya fue utilizado.');
			}else if(data == 'error guardando en la base de datos'){
				$('.envio-process').text('*Hubo un error, intenta más tarde.');
			}else{
				$('.envio-process').text('¡Gracias! Tu votación fue registrada con éxito.');
        $("#rockvspop a p").fadeIn("slow");
        $('.submit').fadeOut();
			}

			setTimeout(function(){
				$('.lds-roller').remove();
			}, 500);
			setTimeout(function(){
				$('.modal').fadeOut();
				$('.envio-process').remove();
				$('form')[0].reset();

				$('body').removeClass('no-scroll');
				$('.modal').fadeOut();
				$('.overlay').fadeOut();
			}, 8000);

		}
	});

});

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

var mailenter = document.getElementById('mail-entrance')

mailenter.onblur = function(){
  appearAmonos();
};
$(mailenter).one('keyup', function() {
  setTimeout(function(){ 
      appearAmonos(); 
    }, 
  3000);
});

function appearAmonos(){
  if(!mailenter.value == ''){
    $('.amonos').fadeIn(300);
  }
  
}

$('.email-validator').on('click', function(){
  var email = $('input[name="mail-dones"]').val();
  if(validateEmail(email.trim()) == ''){
    alert('Debes poner un correo valido');
    return false;
  }else{
    $.ajax({
      url: 'functions.php',
      type: 'GET',
      data: {
        'email_check' : 1,
        'email' : email,
      },
      success: function(response){

        if(response == 'Puedes votar'){
          window.location='encuesta/?email='+email+'';
        }else{
          alert(response);
        }
      },error: function (xhr, ajaxOptions, thrownError) {
      alert(xhr.status);
      alert(thrownError);
    }
    });
  }
});*/
