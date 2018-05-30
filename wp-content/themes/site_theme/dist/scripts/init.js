var container = document.getElementById('container');
setTimeout(function() {
  container.classList.add('cerrar');
  document.body.style.overflowY= "visible";// despueés de cargar le devolvemos el scroll
}, 5000);
$("#eco").velocity({ translateX: "950px", }, 3500);
  $(".home__intro__logo svg").velocity({
  opacity: 0
},{
  delay: 1800,
  complete: function() {
    $(".middle").addClass('siko');
    /*$(".overlay").addClass('hidden');*/
}
});
/*-- Slider Customer (Clientes) --*/
$('.slider_customer').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

/*-- Slider TEam (Team) --*/
$('.js_team').slick({
  dots: false, 
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
$('.js_themes').slick({
    dots: false, 
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
/*-- Slider taller --*/
$('.slider_workshop').slick({
    infinite: true,
    speed: 300,
    adaptiveHeight: true
});

$('#js_search_content > .tab-pane:first-child').addClass( "active show" );
$('#js_search > li:first-child a').addClass( "active" );