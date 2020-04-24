  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
    
        <?php
        if(!empty($userlist)){?>
           <li class="nav-item mt-2">
        <a class="nav-link" href="<?php echo base_url('booking'); ?>">Dashboard
          </a>
      </li>

      <li class="nav-item mt-2">
        <a class="nav-link" href="<?php echo base_url('booking'); ?>">Booking
          </a>
      </li>
      <li class="nav-item mt-2">
        <a class="nav-link" href="<?php echo base_url('favourite'); ?>">Favourites
          </a>
      </li>
      <li class="nav-item mt-2">
        <a class="nav-link" href="<?php echo base_url('chat'); ?>">Messages
          </a>
      </li>
          
     
      <?php
        $img = $userlist->image;
        $temp_file = base_url()."front/images2/user.png";
        $main_file = "assets/uploads/profile_image/".$img;
        $filename = FCPATH.$main_file;
        if (file_exists($filename)) {
          if($img != ''){
              $main_image =  base_url().$main_file;
          }else{
              $main_image =  $temp_file;
          }
        }else{
          $main_image =  $temp_file;
        }?>

         <li class="nav-item dropdown">
        <a class="nav-link" href="#" data-toggle="dropdown"><img class="img-fluid" src="<?=$main_image?>" width="40" height="30" style="border-radius: 50%" ></a>
        <ul class="shadow dropdown-menu dropdown-menu-right" style="float: right;">
          <li><a class="dropdown-item" href="<?php echo site_url();?>profile">Profile </a></li>
          
         
          <li><a class="dropdown-item" href="<?php echo site_url();?>account">Account</a></li>
          <li><a class="dropdown-item" href="#">Inbox</a></li>
          <li><a class="dropdown-item" href="#">Grooming</a></li>
          <li><a class="dropdown-item" href="#">Calender</a></li>
          <li><a class="dropdown-item" href="#">Listings</a></li>
          <li><a class="dropdown-item" href="#">Invite Friends</a></li>
          <li><a class="dropdown-item" href="#">Refer a Provider</a></li>
          <li><a class="dropdown-item" href="#">Gift Cards</a></li>
          <li><a class="dropdown-item" href="<?php echo base_url();?>login/logout">Logout</a></li>
        </ul>
      </li>

        <!-- <a href="<?php echo site_url();?>profile">PROFILE </a> -->
        <!-- <a href="<?php echo base_url();?>login/logout">LOGOUT</a> -->
        <!-- <li class="dropdown edit-profile-menu open" style="padding-right: 10px;"> -->
          <!-- <a href="<?php echo site_url();?>profile" class="dropdown edit-profile-menu open"> -->
          <!-- <img src="<?=$main_image?>" alt="" title="" class="img-responsive pull-right img-circle menu_profile hidden-xs"> -->
        </a>
        </li>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <!-- <i class="fa fa-bars"></i> -->
      </a>
    <?php }else{
      //echo "Asdf";exit;?>
       <li class="nav-item mt-2">
        
          <a href="<?php echo base_url('login'); ?>" data-xx-id='2'  class="nav-link modal-btn" data-toggle="modal" data-target="#signUp">Professional Sign Up</a>
      </li>
      
      <li class="nav-item mt-2">
        <a  href="<?php echo base_url('login'); ?>" class="nav-link" data-toggle="modal" data-target="#login">Sign In
          </a>
      </li>

      <li class="nav-item mt-2">
        <!-- <a class="nav-link"href="<?php echo base_url("login/register"); ?>">Sign Up</a> -->
        <a href="<?php echo base_url('login'); ?>" data-xx-id='1' class="nav-link modal-btn" data-toggle="modal" data-target="#signUp">Sign Up</a>
      </li>
      
    <?php }?>
      <!-- </ul> -->
    </div>
  </div>
</div>
</div>
</ul>
</div>
</div>
</nav>





<!-------------Navbar Section End------ -->






<?php
// echo "<pre>1"; print_r($userlist);exit;
//if(!empty($userlist)){?>


<!----  login modal start --->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header ">
        <h5 class="modal-title w-100 text-center" id="loginModalLabel">Welcome back, Mathew.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img class="img-fluid provoider_image rounded-circle" src="<?php echo base_url('front/images/user.jpg'); ?>">

        <div class="row">
          <div class="col-2"></div>
          <div class="col-8">
            <form id="login_form" method="post" action="login/user_login">
              <div class="form-group">
                <label  class="text-center"><span id="failed_text"></span></label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Email" required><br>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" rquired>
                
              </div>
           
          </div>
          <div class="col-2"></div>
        </div>
        <div class="row">
          <div class="col-2"></div>
          <div class="col-8">
          <button class="btn btn-block login_btn" type="submit"  name="login_button" id="login_button">Login</button>
          </div>
          <div class="col-2"></div>
        </div>
        </form>
        <div class="text-center mt-4">
          <p style="text-decoration: underline;font-size: 20px; font-weight: 600;"><a href="#" style="color: #000; text-decoration-color:gray; ">Forgot password?</a></p>
        </div>

        <div class="text-center mt-3 mb-3">
         <span style="color: gray;font-size: 18px;font-weight: 600;">Not you?</span>
         <span style="text-decoration: underline;font-size: 20px; font-weight: 600;"><a href="#" style="color: #000; text-decoration-color:gray; ">Use another account</a></span>
        </div>

      </div>
    </div>
  </div>
</div>

<!---- login modal end -->

<!-------------email Section start----- -->

  <section>
          <div class="modal fade" id="signUp" tabindex="-1" role="signUp" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document" >
              <div class="modal-content">
          
                <div class="modal-body">
                   
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                    
                    <div class="row mt-4">
                      <div class="col-sm-7">
                        <div class="text_head3"><h5>Welcome to Groom</h5>
                        <p>Sign up to book</p>
                        </div>
                        <form id="email_form" method="post">
                        <div class="input_box mt-4">
                           <input type="hidden" name="modal-id" id="modal-id" class="modal-id" > 
                            <input type="email"  class="form-control " id="u_email" name="u_email" placeholder="Email Address" required>
                            <p id="email_text" style="color:red"></p>
                        </div>
                       <button class="btn btn_continue btn-block" id="email_btn" type="submit">Continue</button>
                        <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Continue</button> --> 

                        <div class="row mt-5">
                            <div class="col-sm-4 hr_styel"><hr></div>
                            <div class="col-sm-4 txt_signup">Or sign up with</div>
                            <div class="col-sm-4 hr_styel "><hr></div>

                        </div>

                        <button class="btn btn_fblogin btn-block">Sign up with Facebook</button>
                        <!--<a href="<?php echo $authURL; ?>" style="color: red">Facebook Login</a>-->
                        

                        <div class="btn btn-block" id="btn_google" >
                        <span class="google-button__icon "><svg viewBox="0 0 366 372" xmlns="http://www.w3.org/2000/svg"><path d="M125.9 10.2c40.2-13.9 85.3-13.6 125.3 1.1 22.2 8.2 42.5 21 59.9 37.1-5.8 6.3-12.1 12.2-18.1 18.3l-34.2 34.2c-11.3-10.8-25.1-19-40.1-23.6-17.6-5.3-36.6-6.1-54.6-2.2-21 4.5-40.5 15.5-55.6 30.9-12.2 12.3-21.4 27.5-27 43.9-20.3-15.8-40.6-31.5-61-47.3 21.5-43 60.1-76.9 105.4-92.4z" id="Shape" fill="#EA4335"/><path d="M20.6 102.4c20.3 15.8 40.6 31.5 61 47.3-8 23.3-8 49.2 0 72.4-20.3 15.8-40.6 31.6-60.9 47.3C1.9 232.7-3.8 189.6 4.4 149.2c3.3-16.2 8.7-32 16.2-46.8z" id="Shape" fill="#FBBC05"/><path d="M361.7 151.1c5.8 32.7 4.5 66.8-4.7 98.8-8.5 29.3-24.6 56.5-47.1 77.2l-59.1-45.9c19.5-13.1 33.3-34.3 37.2-57.5H186.6c.1-24.2.1-48.4.1-72.6h175z" id="Shape" fill="#4285F4"/><path d="M81.4 222.2c7.8 22.9 22.8 43.2 42.6 57.1 12.4 8.7 26.6 14.9 41.4 17.9 14.6 3 29.7 2.6 44.4.1 14.6-2.6 28.7-7.9 41-16.2l59.1 45.9c-21.3 19.7-48 33.1-76.2 39.6-31.2 7.1-64.2 7.3-95.2-1-24.6-6.5-47.7-18.2-67.6-34.1-20.9-16.6-38.3-38-50.4-62 20.3-15.7 40.6-31.5 60.9-47.3z" fill="#34A853"/></svg></span>&nbsp;
                       <a href="<?php echo base_url("login/google_login");?>" > <span class="buttonText " >Sign up with Google</span></a>
                         <!--<span class="buttonText " ><a href="<?php echo base_url("login/google_login");?>" >Sign up with Google</a></span>-->
                         
                       </div>

                       <p class="text-center policy mt-5">By creating an account you agree to your Terms of Use and privacy policy.</p>
              
                      </div>
            <!--------------------------->
                       <div class="col-sm-5">
                          <div class="head">
                            <h6>Service Provoider or Shop Owner</h6>
                            <p>Manage your Profile,Calender,Services and more</p>                     
                          </div>

                          <button class="btn btn_signup btn-block">Sign Up</button>
                            
                            <div class="register text-center mt-5"><span>Already registered?</span><a href="#">Login</a></div>

                        </div>
                    </div>
                
                </div>
              </div>
            </div>
          </div> 
             
  </section>

<!-------------email Section end----- -->

 

<!-------------phone Section start----- -->
<style>
@media screen and (max-width: 600px) {
  .btn_back {
    margin-left:70px;
    
  }
  </style>


  <section id="phonedetailsmodal">
   

          <div class="modal fade" id="phonedetails" tabindex="-1" role="phonedetails" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document"  >
              <div class="modal-content">
          
                <div class="modal-body">
                   
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  
            <div class="form_details mt-4">
                     <h6 class="text-center"><strong style="color:#606060;">Provoide your phone number to Continue</strong></h6>   
               
                <form id="frm_contact" class="mt-5 col-sm-11 mr-auto ml-auto">

                        <div class="form-group">
                        <input type="hidden"  id="hide_email">
                        <input type="hidden" id="hide_modal_id" name="hide_modal_id"> 
                        <input type="number" class="form-control" id="u_mobile" placeholder="Phone Number">
                        </div>
                

                 <div class="row text-center ">
                  <div class="col-sm-3"></div>
                  
                   <button class="btn col-sm-3 back_btn mr-2 btn_back " style="height:30px; width:100px;" data-dismiss="modal">Back</button>
                
                   <button class="btn col-sm-3 nxt_btn ml-2" style="height:30px; width:100px;" id="mobile_btn" data-dismiss="modal" data-toggle="modal" data-target="#presonaldetails" data-whatever="@mdo">Next</button>
                 </div>
                  </form>
                 <div class="col-sm-3"></div>
             </div>
                
                </div>
              </div>
            </div>
          </div> 
             
  </section>


  <section>

          <div class="modal fade" id="presonaldetails" tabindex="-1" role="presonaldetails" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document"  style=" max-width: 350px;">
              <div class="modal-content">
          
                <div class="modal-body">
                   
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  


            <div class="form_details mt-4">
            
                     <h6 class="text-center"><strong style="color:#606060;">Please leave the contact details here</strong></h6>   
               
               
                <form id="prof_form"  enctype="multipart/form-data" method="post" class="form-horizontal" id="register_user" name="register_user" data-toggle="validator">
                
                      <div class="form-group">
                      <input type="email" class="form-control " id="prof_email" name="u_email" placeholder="Email" >
               
                      </div>
                      <div class="form-group mt-4">
                      <input type="text" class="form-control " id="fname" name="fname" placeholder="First Name" value="" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                      </div>
                      <div class="form-group mt-4">
                      
                      <input type="text" class="form-control" placeholder="Last Name" id="lname" name="lname">
               
                      </div>

                      <div class="form-group mt-4">
                      <input type="number" class="form-control" id="prof_mob" name="mobile" placeholder="Mobile">
               
                      </div>
                      <div class="form-group mt-4">
                      <input type="password" class="form-control " id="spwd" name="pwd" placeholder="set Password">
                         <span toggle="#password-field" class="field-icon">show &nbsp;</span>
                      </div>
                      <div class="form-group">
                <div class="col-md-12">
                <label for="gender">Gender <span class="cls_star">*</span></label>
                <select class="form-control" id="radio_gender" name="radio_gender" required>
                    <option value="" >Select Gender</option>
                  <option value="male" >Female</option>
                  <option value="female" >Male</option>
                  <option value="other" >Rather not say</option>
                </select>
              </div>
              </div>
                  <input type="hidden" name="u_chk" id="u_chk" >
                   <div class="text-center terms_con mt-3"><span>By clicking below,you agree to our</span><a href="#">Terms & Conditions</a>
                   </div>
                      <div class="text-center">
                        <button type="submit" class="btn Acc_btn mt-5 " id="send_btn" >Create Account</button>
          	  
                     </div>

             </div>        
              </form>
                
                </div>
              </div>
            </div>
          </div> 
             
  </section>

<!-------------profile Section end------->





<!------------error Section start------ -->

  <section >
   

          <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header" style="border: none;">
                  
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body text-center">
                  <img class="" src="front/images/verified.png">
                  <div class="text_head mt-3"><h4>Error</h4></div>

                  <div class="text_head mt-3"><p id="failed_text"></p></div>

                  <div class="text_head mt-4"><button class="btn btn1" data-dismiss="modal">Ok</button></div>

                </div>
                
              </div>
            </div>
          </div> 
             
  </section>

  <!------------error Section end------ -->

  <section>
  

  <div class="modal fade" id="otpmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
  
        <div class="modal-body text-center">
           
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

          <div class="text_head2 mt-4 "><h4>Confirmation</h4></div>
          <div class="text_head2 mt-3"><p>Please Enter the 4-digit code you received via text message.</p></div>
            <input type="hidden" id="otpemail" >
          <div class="text_head2 " style="margin-top: 10%;"> 
                                        <span><input type="text" class="inputs_code" maxlength="1" name="code1" id="code1" ></span>
                                        <span><input type="text" class="inputs_code" maxlength="1" name="code2" id="code2" ></span>
                                        <span><input type="text" class="inputs_code" maxlength="1" name="code3" id="code3" ></span>
                                        <span><input type="text" class="inputs_code" maxlength="1" name="code4" id="code4" ></span>
                                        
          </div>
<div class="col-xs-3">
           <div class="cell_button mt-5">
            <div class="col-12" style="  margin-top: 10%;">
            <button type="button" class="btn resend_btn ">Resend to +1 910-423-4977</button>
            <button type="button" class="btn resend_btn ">Resend to +1 910-423-4977</button>
           </div>
           </div>

             <div class="text_head2 mt-5">
            
            <button type="button" class="btn btn1" id="done">Done</button>
            </div>
         

        </div>
        
      </div>
    </div>
  </div> 
     
</section>

<!-------------otp Section End------ -->




<section>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="border: none;">
                          
          <button type="button" class="close" onClick="window.location.href = '<?php echo base_url();?>';return false;" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <img class="" src="front/images/verified.png">
          <div class="text_head mt-3"><h4>AWSOME!</h4></div>

          <div class="text_head mt-3"><p id="success_text"></p></div>

          <div class="text_head mt-4"><button class="btn btn1" id="verified" onClick="window.location.href = '<?php echo base_url();?>';return false;">Ok</button></div>

        </div>
        
      </div>
    </div>
  </div> 
     
</section>


<section>
  

  <div class="modal fade" id="otpmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
  
        <div class="modal-body text-center">
           
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

          <div class="text_head2 mt-4 "><h4>Confirmation</h4></div>
          <div class="text_head2 mt-3"><p>Please Enter the 4-digit code you received via text message.</p></div>
            <input type="hidden" id="otpemail" >
            <input type="hidden" id="user_id" >
          <div class="text_head2 " style="margin-top: 10%;"> 
                                        <span><input type="text" class="inputs_code" maxlength="1" name="code1" id="code1" onkeyup="focus_text1()" ></span>
                                        <span><input type="text" class="inputs_code" maxlength="1" name="code2" id="code2" onkeyup="focus_text2()" ></span>
                                        <span><input type="text" class="inputs_code" maxlength="1" name="code3" id="code3" onkeyup="focus_text3()"></span>
                                        <span><input type="text" class="inputs_code" maxlength="1" name="code4" id="code4" ></span>
                                  
          </div>
<div class="col-xs-3">
           <div class="cell_button mt-5">
            <div class="col-12" style="  margin-top: 10%;">
            <button type="button" class="btn resend_btn ">Resend to +1 910-423-4977</button>
            <button type="button" class="btn resend_btn ">Resend to +1 910-423-4977</button>
           </div>
           </div>

             <div class="text_head2 mt-5">
            
            <button type="button" class="btn btn1" id="done">Done</button>
            </div>
         

        </div>
        
      </div>
    </div>
  </div> 
     
</section>

<!-------------otp Section End------ -->




<!-------------varification Section End------ -->

<section>

  <div class="modal fade" id="providerModal-" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="border: none;">
                          
          <button type="button" class="close" onClick="window.location.href = '<?php echo base_url();?>admin/index';return false;" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <img class="" src="front/images/verified.png">
          <div class="text_head mt-3"><h4>AWSOME!</h4></div>

          <div class="text_head mt-3"><p id="success_text"></p></div>

          <div class="text_head mt-4"><button class="btn btn1" id="verified" onClick="window.location.href = '<?php echo base_url();?>admin/index';return false;">Ok</button></div>

        </div>
        
      </div>
    </div>
  </div> 
     
</section>