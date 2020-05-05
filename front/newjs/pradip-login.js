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

	   	if(mobval === ''){
	   		$('#u_mobile_err_msg').html("Phone number required");
		 	return false;
	   	}else{

	   		$('#u_mobile_err_msg').html("");

	   		$("#u_chk").val(modalval);	 
			$("#prof_email").val(emailval);	
			$("#prof_mob").val(mobval);

			$("#phonedetails").modal('hide');
			$("#presonaldetails").modal('show'); 
	   	}
	  	
  	});	

  	$("#forogt_pass_btn").click(function(){ 
	   	var recovery_email=$('#recovery_email').val();
	   	$('#forgot_pass_response_msg').html('');

	   	if(recovery_email === ''){
	   		$('#email_address_err_msg').html("Email address required");
		 	return false;
	   	}else{

	   		$('#email_address_err_msg').html("");

	   		$("#forogt_pass_btn").attr("disabled", true);
		 
			$.ajax({
			
		        type: 'POST',
		        url: 'Login/user_forgot_password',
		        data: {
		         'recovery_email': recovery_email,
		        },
		        dataType: 'html',
		        success: function(result){
		           	
		           	$("#forogt_pass_btn").attr("disabled", false);

		           	if (result === '1'){
		           		$("#forgot_pass_response_msg").removeClass("errorMessageCls");
						$("#forgot_pass_response_msg").addClass("successMessageCls");
						$('#forgot_pass_response_msg').html('We have sent the email to your email account please check');	
		           	}else if(result === '2'){
		           		$("#forgot_pass_response_msg").removeClass("successMessageCls");
						$("#forgot_pass_response_msg").addClass("errorMessageCls");
						$('#forgot_pass_response_msg').html('Email not registered');	
		           	}else{
		           		$("#forgot_pass_response_msg").removeClass("successMessageCls");
						$("#forgot_pass_response_msg").addClass("errorMessageCls");
						$('#forgot_pass_response_msg').html('Sorry, something went wrong. please try again');	
		           	}

		        },
			    error: function(errorThrown){
			       	$("#forgot_pass_response_msg").removeClass("successMessageCls");
					$("#forgot_pass_response_msg").addClass("errorMessageCls");
					$('#forgot_pass_response_msg').html('Verification code not match');	
			    }     
			});
	   	}  	  	
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

		// if(u_email=="")
		// {
		// 	$("#errorModal").modal('show');
		// 	$('#failed_text').html("Email field is empty");
			
		// }
		// else if(fname=="")
		// {
		// 	$("#errorModal").modal('show');
		// 	$('#failed_text').html("First Name field is empty");
			
		// }
		// else if(lname=="")
		// {
		// 	$("#errorModal").modal('show');
		// 	$('#failed_text').html("last Name field is empty");
				
		// }
		// else if(mobile=="")
		// {
		// 	$("#errorModal").modal('show');
		// 	$('#failed_text').html("mobile field is empty");
			
		// }
		// else if(pwd=="")
		// {
		// 	$("#errorModal").modal('show');
		// 	$('#failed_text').html("password field is empty");
			
		// }
		// else if(radio_gender=="")
		// {
		// 	$("#errorModal").modal('show');
		// 	$('#failed_text').html("Gender field is empty");
			
		// }

		var flag = true;

		if(u_email=="")
		{
			$('#email_err_msg').html("Email field is empty");
			flag = false;
		}else{
			$('#email_err_msg').html("");
		}

		if(fname=="")
		{
			$('#fname_err_msg').html("First name field is empty");
			flag = false;
		}else{
			$('#fname_err_msg').html("");
		}

		if(lname=="")
		{
			$('#lname_err_msg').html("Last name field is empty");
			flag = false;	
		}else{
			$('#lname_err_msg').html("");
		}

		if(mobile=="")
		{
			$('#number_err_msg').html("Mobile field is empty");
			flag = false;
		}else{
			$('#number_err_msg').html("");
		}

		if(pwd=="")
		{
			$('#password_err_msg').html("Password field is empty");
			flag = false;
		}else{
			$('#password_err_msg').html("");
		}

		if(radio_gender=="")
		{
			$('#gender_err_msg').html("Gender field is empty");
			flag = false;
		}else{
			$('#gender_err_msg').html("");
		}


		if(flag === false){
			return false;
		}else{

			$("#send_btn").attr("disabled", true);
		 
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
		           	
		           	$("#send_btn").attr("disabled", false);

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

						$("#otpmobile").val(mobile);
						$("#resend_otp_no").html(mobile);
						$("#presonaldetails").modal('hide');	 
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

		$('#resend_otp_response_msg').html('');  

		var user = $('#user_id').val();
	    var val1 = $('#code1').val();
	    var val2 = $('#code2').val();
	    var val3 = $('#code3').val();
	    var val4 = $('#code4').val();
	    if(val1 == '' || val2 == '' || val3 == '' || val4 == ''){
	      
            //$("#errorModal").modal('show');
            //$('#failed_text').html("Verification code must be of 4 digits");
            return false;
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
						// $("#errorModal").modal('show');
						// $('#failed_text').html('Verification code not match');
						$("#resend_otp_response_msg").removeClass("successMessageCls");
						$("#resend_otp_response_msg").addClass("errorMessageCls");
						$('#resend_otp_response_msg').html('Verification code not match');
						
					} 
		        },
			    error: function(errorThrown){
			        alert(errorThrown);
			        alert("There is an error with AJAX!");
			    }     
		  	});	
		}      
	});

	/*used for resend otp*/
	$("#resend_otp_btn").click(function(){ 
		$('#resend_otp_response_msg').html(""); 

	   	var otp_email = $('#otpemail').val();
	   	var otp_mobile = $('#otpmobile').val();

		if(otp_email != '' && otp_mobile != ''){
			$("#resend_otp_btn").attr("disabled", true);


			$('#code1').val("");
			$('#code2').val("");
			$('#code3').val("");
			$('#code4').val("");

			$.ajax({
				
		        type: 'POST',
		        url: 'login/resendOtp',
		        data: {
		         	'otp_email': otp_email,
				 	'otp_mobile': otp_mobile
		        },
		        dataType: 'html',
		        success: function(result){
		        	$("#resend_otp_btn").attr("disabled", false);
		            if (result === 'success'){
		            	$("#resend_otp_response_msg").removeClass("errorMessageCls");
						$("#resend_otp_response_msg").addClass("successMessageCls");
						$('#resend_otp_response_msg').html("Resend otp successfully."); 
		            }
					else
					{ 
						$("#resend_otp_response_msg").removeClass("successMessageCls");
						$("#resend_otp_response_msg").addClass("errorMessageCls");
						$('#resend_otp_response_msg').html("Resend otp failed, please try again");
					} 
		        },
			    error: function(errorThrown){
			    	$("#resend_otp_btn").attr("disabled", false);
			    	$("#resend_otp_response_msg").removeClass("successMessageCls");
					$("#resend_otp_response_msg").addClass("errorMessageCls");
			    	$('#resend_otp_response_msg').html("There is an error with AJAX!");
			    }     
		  	});	
		}else{
			return false;
		}
  	});
  
	// function focus_text1() 
	// {
	//     $('#code2').focus();
	// }

	// function focus_text2() 
	// {
	//     $('#code3').focus();
	// }
	  
	// function focus_text3() 
	// {
	//     $('#code4').focus();
	// }
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
				  		return true;
				  	}              
	            }
			}
						 
		});
                      
    });

});	


/*this function used for close signup modal when click on login link from signup screen*/
function closeSignupModal(){
  $('#signUp').modal('hide');
}

/*this function used for open signup modal when click on back button from contact number screen*/
function openSignupModalFromContactBack(){
  $('#signUp').modal('show');
}

/*this function used for show hide password when click on show hide button in signup flow*/
function showHidePassword() {
  var x = document.getElementById("spwd");
  if (x.type === "password") {
    x.type = "text";
    $("#passShowHideBut").html("Hide")
  } else {
    x.type = "password";
    $("#passShowHideBut").html("Show")
  }
}

function focusText1() 
{
    $('#code2').focus();
}

function focusText2() 
{
    $('#code3').focus();
}
  
function focusText3() 
{
    $('#code4').focus();
}  
	
/*this function used for close login modal when click on forgot passwod link from login screen and open forgot password popup*/	
function userForgotPassword(){ 
	$('#forgot_pass_response_msg').html('');
	$("#login").modal('hide');
	$("#user_forgot_password").modal('show'); 
};