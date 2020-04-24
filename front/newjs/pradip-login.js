 $(document).ready(function(){
	  var $serviceinputs = $('.serviceinputs');
	 $serviceinputs.on('change', function(){ 
  var ids = $.map($serviceinputs.filter(':checked'), function(element){ return element.id; });
  $('#service_list').val(ids.join(','));
});
	
	
	
	
	
	

    
	
	
	
	

   function chooseFile() {
      $("#imgupload").click();
   }

function mouseOver() {
  
  document.getElementById("selecttext").style.display = 'block';
}

function mouseOut() {
  
  document.getElementById("selecttext").style.display = 'none';
}

          
	
	$(".price").change(function(){
		
        $("#myModal").modal({
            backdrop: 'static',
            keyboard: false
        });
		});
	
	
	 
	 $("#btn_search").click(function(event){
			event.preventDefault();
			
			
var keyword = $('#search_text').val();
var location = $('#search_location').val();
var service_list = $('#service_list').val();
var max_price = $('#max_price').val();
var min_price = $('#min_price').val();
var datefilter = $('.drp-selected').html();
//alert(datefilter);
var time1=$('#time1').val();
var time2=$('#time2').val();
//alert(time1);alert(time2);
var provider=$("#provider").serialize();
//alert(provider);
var filter_sorting="ASC";
 

$.ajax({
	
        type: 'POST',
        url: 'filter_services',
        data: {
         'keyword': keyword,
		 'filter_location': location,
		 'filter_services': service_list,
		 'filter_max_price': max_price,
		 'filter_sorting': filter_sorting,
         'filter_min_price': min_price,
		 'filter_date':datefilter
		 

        },
        dataType: 'html',
        success: function(data){
			//console.log(data);
            //alert(data);
             if (!$.trim(data)){ 
			//$("#errorModal").modal('show');  
              ///$('#failed_text').html("some field is empty");
              //return false;
			  alert('ok1');
			  
             }
			 else
			 {
				 //var json_data = JSON.parse(data);
				 
				 //$("#otpmodal").modal('show');
				 //$("#user_id").val(u_chk);
				 //$("#otpemail").val(json_data.user_data);
				 alert('ok2');
				 
				 
			 }
				 
			 
        }, error: function(errorThrown){
        alert(errorThrown);
        alert("There is an error with AJAX!");
    } 
  });


			
			
			 
    	  });
		  
	 
	 
	 
    	  $("#email_form").submit(function(event){
			event.preventDefault();
			if($('#email_text').html() == "") 
			{
				$("#signUp").modal('hide');
				var butval = $('#u_email').val();	
				var modal_val = $('#modal-id').val();	

			$("#hide_email").val(butval);
			//alert(modal_val);
			$("#hide_modal_id").val(modal_val);
 			$("#phonedetails").modal('show');  
				return true;
			}
			else
			{
				return false;
			}
    	      
			
			
			 
    	  });
		  
		  
		  
		  
		  
		  $(function () {
     $(".modal-btn").click(function (){		 
       var data_var = $(this).data('xx-id');
	   //alert(data_var);
       $(".modal-id").val(data_var);
     })
    });
		  
		  $("#mobile_btn").click(function(){ 
			  var modalval = $('#hide_modal_id').val();
    	      var emailval = $('#hide_email').val();
			  var mobval=$('#u_mobile').val();
			 $("#u_chk").val(modalval);	 
			$("#prof_email").val(emailval);	
			$("#prof_mob").val(mobval);
			
			 
    	  });
    	
		
	$('#u_email').on("input", function() {
    var dInput = this.value;
	
   
	
	$.ajax({
	
        type: 'POST',
        url: 'login/checkemail',
        data: {
         'val': dInput
        },
        dataType: 'html',
        success: function(data){
			$('#email_text').html(data);
            			 
			 
        }  
  });
});
		
		
		


$('#prof_form').submit(function(event){
event.preventDefault();

var u_email = $('#prof_email').val();
var fname = $('#fname').val();
var lname = $('#lname').val();
var mobile = $('#prof_mob').val();
var pwd = $('#spwd').val();
var u_chk = $('#u_chk').val();
var radio_gender=$('#radio_gender').val();

if(u_email=="")
{
$("#errorModal").modal('show');
	$('#failed_text').html("Email field is empty");
 return false;
}
else if(fname=="")
{$("#errorModal").modal('show');
$('#failed_text').html("First Name field is empty");
 return false;	
}
else if(lname=="")
{
	$("#errorModal").modal('show');
$('#failed_text').html("last Name field is empty");
 return false;	
}
else if(mobile=="")
{
	$("#errorModal").modal('show');
$('#failed_text').html("mobile field is empty");
 return false;	
}
else if(pwd=="")
{
	$("#errorModal").modal('show');
$('#failed_text').html("password field is empty");
 return false;	
}
else if(radio_gender=="")
{
	$("#errorModal").modal('show');
$('#failed_text').html("Gender field is empty");
 return false;	
}
else
{
 

$.ajax({
	
        type: 'POST',
        url: 'Login/register_user',
        
        data: {
         'fname': fname,
		 'lname': lname,
		 'mobile': mobile,
		 'pwd': pwd,
         'u_email': u_email,
		 'radio_gender':radio_gender,
		 'u_chk':u_chk

        },
        dataType: 'html',
        success: function(data){
           
             if (!$.trim(data)){ 
			$("#errorModal").modal('show');  
              $('#failed_text').html("some field is empty");
              return false;
			  
             }
			 else
			 {
				 var json_data = JSON.parse(data);
				 
				 $("#otpmodal").modal('show');
				 $("#user_id").val(u_chk);
				 $("#otpemail").val(json_data.user_data);
				 
				 
			 }
				 
			 
        },
    error: function(errorThrown){
        alert(errorThrown);
        alert("There is an error with AJAX!");
    }     
  });

}
});


function load_data(query)
 {

  $.ajax({
   url:"<?php echo base_url(); ?>Home/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){

  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   $("#result").empty();
  }
 });


function MakeBold(str) {
   
   $("#search_text").val(str);
    $("#result").empty();
}



$(document).on('click', "#done", function () {
	var user = $('#user_id').val();
    var val1 = $('#code1').val();
    var val2 = $('#code2').val();
    var val3 = $('#code3').val();
    var val4 = $('#code4').val();
    if(val1 == '' || val2 == '' || val3 == '' || val4 == ''){
      
            $("#errorModal").modal('show');
             $('#failed_text').html("Verification code must be of 4 digits");
        

        }
		else
		{
		
var code1 = $('#code1').val();
var code2 = $('#code2').val();
var code3 = $('#code3').val();
var code4 = $('#code4').val();
var user_email=$('#otpemail').val();


$.ajax({
	
        type: 'POST',
        url: 'login/activate',
        data: {
         'code1': code1,
		 'code2': code2,
		 'code3': code3,
		 'code4': code4,
         'user_email': user_email

        },
        dataType: 'html',
        success: function(data){
			
             if (!$.trim(data)){
				 
				 if(user=="2")
				 {
					 
					 $("#presonaldetails").modal('hide');
			$("#otpmodal").modal('hide');			
			$("#providerModal").modal('show');  
              $('#success_text').html('Your Phone number has been verified successfully.');
				
				 }
				 else
				 {
			$("#presonaldetails").modal('hide');
			$("#otpmodal").modal('hide');			
			$("#exampleModal").modal('show');  
              $('#success_text').html('Your Phone number has been verified successfully.');
				 }
              return false;
			  
             }
			 else
			 { 
				 $("#errorModal").modal('show');
				 $('#failed_text').html('Varification code not match');
 
				  
			 }
				 
			 
        },
    error: function(errorThrown){
        alert(errorThrown);
        alert("There is an error with AJAX!");
    }     
  });

		
		}
        
    
  });
  
  function focus_text1() 
  {alert(data);
      $('#code2').focus();
  }
  function focus_text2() 
  {alert(data);
      $('#code3').focus();
  }
  
  function focus_text3() 
  {alert(data);
      $('#code4').focus();
  }
});

$(function(){
$("#login_form").on("submit", function(e){
	
	e.preventDefault();
    e.stopPropagation();
        
           var email = $('#email').val();


           var password = $('#password').val();
           
           
                $.ajax({  
                     url:'login/user_login',  
                     method:"POST",  
                     data: {email:email, pwd:password},  
                     success:function(data)  
                     { 
		if (!$.trim(data)){ 					 
			$("#errorModal").modal('show');  
              $('#failed_text').html("UserName or password is wrong");
              return false;		  
            }else{
				
				$("#login").modal('hide');
				window.location.reload();				
			
			var res = $(data).filter('span.redirect');
              if($(res).html() != null){
                  [removed].href=$(res).html(); //window./location./href could not post so ignore /
			  return true;}
                           
            }
					 }
					 
                });
                 
           
      });

});	  
	
	
