$(function() {

  $('#datebtn[name="datefilter"]').daterangepicker({
      autoUpdateInput: false,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  $('#datebtn[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
  });

  $('#datebtn[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });

});


// Drop sown --------------------
$(document).ready(function(){
  $(".dropdown_service").on("hide.bs.dropdown", function(){
    $(".btn_service").html('Services <span class="fa fa-chevron-down"></span>');
  });
  $(".dropdown_service").on("show.bs.dropdown", function(){
    $(".btn_service").html('Services <span class="fa fa-chevron-up"></span>');
  });


    $(".dropdown_shop").on("hide.bs.dropdown", function(){
    $(".btn_shop").html('Shop Options <span class="fa fa-chevron-down"></span>');
  });
  $(".dropdown_shop").on("show.bs.dropdown", function(){
    $(".btn_shop").html('Shop Options <span class="fa fa-chevron-up"></span>');
  });


    $(".dropdown_price").on("hide.bs.dropdown", function(){
    $(".btn_price").html('Price <span class="fa fa-chevron-down"></span>');
  });
  $(".dropdown_price").on("show.bs.dropdown", function(){
    $(".btn_price").html('Price <span class="fa fa-chevron-up"></span>');
  });

     $(".dropdown_time").on("hide.bs.dropdown", function(){
    $(".btn_time").html('Time <span class="fa fa-chevron-down"></span>');
  });
  $(".dropdown_time").on("show.bs.dropdown", function(){
    $(".btn_time").html('Time <span class="fa fa-chevron-up"></span>');
  });
});

// -------button star rate--------//
$(document).ready(function(){
  $("#hide-btn").click(function(){
  $("#hide_section").toggle();
});
});
//---Clear check--------//


function uncheckAll() {
  $("input[type='checkbox']:checked").prop("checked", false)
}
$('.btn_clear').on('click', uncheckAll)


// --------------Time Picker Js--------------------------------//
var options = {
        now: "00:00",
        twentyFour: true,
        upArrow: 'wickedpicker__controls__control-up', 
        downArrow: 'wickedpicker__controls__control-down', 
        close: 'wickedpicker__close', 
        hoverState: 'hover-state',
        showSeconds: false, 
        timeSeparator: ' : ',
        secondsInterval: 1, 
        minutesInterval: 1, 
        beforeShow: null, 
        afterShow: null, 
        show: null, 
        clearable: false, 
    };
$('.timepicker').wickedpicker(options);

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
