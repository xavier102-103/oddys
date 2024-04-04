/** Mobile menu */
$( document ).ready(function() {
   
  
    $('.menu-mobile #openBtn').on( "click", function(e) {
        $('.menu-mobile').addClass('open');
        $('html').addClass('open');
      } );

    $('.menu-mobile #closeBtn').on( "click", function(e) {
        $('.menu-mobile').removeClass('open');
        $('html').removeClass('open');
      } );
    
      $(window).on( "resize", function() {
        $('.menu-mobile').removeClass('open');
      } );

      // Get the navbar element
    const navbar = $("#navbar");

    // Get the initial position of the navbar
    const initialOffset = navbar.offset().top;

    // Function to add or remove the "sticky" class
    function toggleStickyNavbar() {
        if ($(window).scrollTop() >= initialOffset) {
            navbar.addClass("sticky");
        } else {
            navbar.removeClass("sticky");
        }
    }

    // Listen for the "scroll" event and call the function
    $(window).scroll(toggleStickyNavbar);

    $('.owl-carousel').owlCarousel({
      // Owl Carousel options
      loop: true,
     center:true,
      nav: false, // Hide default navigation
      // Responsive settings
    responsive: {
      0: {
        items: 1, // Number of items to display on small screens (width < 576px)
      },
      576: {
        items: 2, // Number of items to display on screens between 576px and 768px
      },
      768: {
        items: 3, // Number of items to display on screens between 768px and 992px
      },
      992: {
        items: 4, // Number of items to display on screens between 992px and 1200px
      },
      1200: {
        items: 5, // Number of items to display on screens larger than 1200px
      }
    },
      navText: [
        '<div class="custom-prev-button"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"><g id="Groupe_47705" data-name="Groupe 47705" transform="translate(1793 4855) rotate(180)"><circle id="Ellipse_259" data-name="Ellipse 259" cx="30" cy="30" r="30" transform="translate(1733 4795)" fill="#f5f5f5"/><path id="keyboard_arrow_down_FILL0_wght400_GRAD0_opsz48" d="M14.239,16.79,0,2.551,2.551,0,14.239,11.688,25.927,0l2.551,2.551Z" transform="translate(1754.604 4839.239) rotate(-90)" fill="#fff"/></g></svg></div>',
        '<div class="custom-next-button"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"><g id="Groupe_47704" data-name="Groupe 47704" transform="translate(-1733 -4795)"><circle id="Ellipse_259" data-name="Ellipse 259" cx="30" cy="30" r="30" transform="translate(1733 4795)" fill="#f5f5f5"/><path id="keyboard_arrow_down_FILL0_wght400_GRAD0_opsz48" d="M14.239,16.79,0,2.551,2.551,0,14.239,11.688,25.927,0l2.551,2.551Z" transform="translate(1754.604 4839.239) rotate(-90)" fill="#fff"/></g></svg></div>',
      ],
    });
   
    var btn = $('#back-to-top');
   
$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

new WOW().init();
});