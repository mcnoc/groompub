

//------- navbare js-------//


    $('body').scrollspy({
      target: 'header',
      offset: 90
    });



  smoothScroll.init({
    selector: '.smoothScroll',
    speed: 1000,
    offset: 90,
    before: function(anchor, toggle){
      
      var query = Modernizr.mq('(max-width: 767px)');
      
      var navItem = $(toggle).parents("#main-navbar").length;
      
      if (query && navItem !== 0) {
        $("button.navbar-toggler").click();
      }
    },
  });

// ---------------------------------

//-----------Owl-Carousel Js----------

jQuery(document).ready(function($) {
"use strict";
$('#customers-testimonials').owlCarousel( {
    loop: true,
    center: true,
    items: 3,
    margin: 20,
    nav:true,
    autoplayTimeout: 8500,
    smartSpeed: 450,
    navText: ['<i class="fa fa-arrow-left"></i>','<i class="fa fa-arrow-right"></i>'],
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      1200: {
        items: 5
      }
    }
  });
});

// 


// ------------ Star Ratings----------


$(document).ready(function(){
  
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10);  $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });

  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10);
    var stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
 
  });
  
  
});

// ------------- Input Search History Js-------------------//

var recentSearches = [];
function searchFunction(data) {
    
    recentSearches.push($('#textboxSearch').val()); 
    $('#textboxSearch').val(""); 
    $('#searchHistory').text(""); 
    $.each(recentSearches, function (index, value) {
        $('#searchHistory').append("<li class='historyItem'  onclick='addtotextbox("+index+")'>" + value + '</li>');
    });
}

function addtotextbox(id)
{
$('#textboxSearch').val(recentSearches[id]);
} 

