  jQuery(document).ready(function($) {
  
  $('#team-carousel').owlCarousel({
  loop: true,
  nav: true,
  navText: [
    "<i class='fa fa-caret-left '></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    },
  }
});

  $('#works-carousel').owlCarousel({
    loop:true,
    responsive: {
       0: {
      items: 5
    },
    600: {
      items: 5
    },
    1000: {
      items: 7
    },
    }
  });

});