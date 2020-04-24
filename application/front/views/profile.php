<?php $this->load->view('templates/_include/header_view1'); ?>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<section id="Customerprofile">
<div class="container">
 <div class="card shadow ml-auto mr-auto mt-5 mb-5">
    <div class="row">

      <?php
        $img = $userlist->image;
        $temp_file = base_url()."front/images/user.jpg";
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
     <div class="col-4 text-center" style="background: whitesmoke;">
        <img src="<?=$main_image?>" class="img-fluid rounded-circle mt-5"> 
     
        <div class="update_txt">
          <a href="profile/edit_profile/<?=$userlist->encrypt_id;?>">
                               Upload Photo</label></a>
        </div>
        <!-- <div class="editimg">
              <a href="profile/edit_profile/<?=$userlist->encrypt_id;?>"><img src="<?=base_url()?>front/images/plus.png"></a>
            </div> -->
        <div style="border-bottom: 1px solid lightgrey"></div>

        <div class=" mt-3"><span><img class="img-fluid star_rate" src="<?=base_url()?>front/images/star.png" ></span>&nbsp;&nbsp;<span style="color: grey">27 Reviews</span></div>

        <div class="mr-4 mt-3"><span><img class="img-fluid checked" src="<?=base_url()?>front/images/correct.png"  ></span>&nbsp;&nbsp;<span style="color: grey">Verified</span></div>

        <div class="mt-3" style="border-bottom: 1px solid lightgrey"></div>
         
         <div class="mt-3 services">
          <h6><b>Mathew Provoided</b></h6>
           <p><span><img src="<?=base_url()?>front/images/right.png" >&nbsp;&nbsp;</span><span>Goverment id</span></p>
           <p><span><img src="<?=base_url()?>front/images/right.png">&nbsp;&nbsp;</span><span>Personal info</span></p>
             <p><span><img src="<?=base_url()?>front/images/right.png">&nbsp;&nbsp;</span><span>Email address</span></p>
           <p><span><img src="<?=base_url()?>front/images/right.png">&nbsp;&nbsp;</span><span>Phone number</span></p>
           <p><span><img src="<?=base_url()?>front/images/right.png">&nbsp;&nbsp;</span><span>Work email</span></p>
         </div>

     </div>

       <div class="col-8">
           <div class="container">
               <h4 class="head_txt">Hi,I'm <?=$userlist->firstname;?> <?=$userlist->lastname;?><br></h4>
            <!-- <p style="margin-top:-10px;padding-top: 0px;">@<?=$userlist->username;?></p></h4> -->
            
               <span>Joined in 2012.</span>&nbsp;
               <span class="edit_txt"><a href="profile/edit_profile/<?=$userlist->encrypt_id;?>">Edit Profile</a></span>
               <div class="mt-3">
               <img class="img-fluid" src="<?=base_url()?>front/images/pause.png" >
               </div>
               <div class="para">
                <p>Hello</p>
                <p><span>I have total10 year of travel expreince. I've stayed in many 4 and 5 star hotels. 
                   I am intelligent,ambitious and very honest. I'm also former militaryand work in the IT industry.Airbnb.....</span><span class="edit_txt1"><a href="#">Learn more</a></span></p>
               </div>

               <div class="ineer_sec mt-5">
                <p>
                <i class="fa fa-home fa-lg" aria-hidden="true"></i>&nbsp;
                <span>Lives in Garner, NC</span></p>

                <p>
                <i class="fa fa-clone fa-lg" aria-hidden="true"></i>&nbsp;
                <span>Speak English</span>
                </p>

                <p>
                <i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i>&nbsp;
                <span>Connect Account</span>
                </p>

               </div>

               <div class="appoitment-sec mt-5">
                <h5><bolder>Mathew's booking</bolder></h5>

                <p><b>Upcoming appointments</b></p>
                <p>You have no upcoming appointments.<a href="#">Explore Groom</a> to start booking again.</p>
                <p><b>Book Again</b></p>
               </div>
      
                
              <div class="card-deck" id="top_rated">
              <div class="card shadow">
                <div class="card-img-caption">
                      <div class='rating-stars'>
                        <ul id='stars'>
                          <li class='star' title='Poor' data-value='1'>
                            <i class='fa fa-star '></i>
                          </li>
                          <li class='star' title='Fair' data-value='2'>
                            <i class='fa fa-star'></i>
                          </li>
                          <li class='star' title='Good' data-value='3'>
                            <i class='fa fa-star'></i>
                          </li>
                          <li class='star' title='Excellent' data-value='4'>
                            <i class='fa fa-star'></i>
                          </li>
                          <li class='star' title='WOW!!!' data-value='5'>
                            <i class='fa fa-star'></i>
                          </li>
                        </ul>
                      </div>
            <img src="images/braids.jpg" class="card-img" alt="...">
              </div>
               <div class="card-body">
                    <div class="row">
                   <h6 class="card-title col-md-8 mt-1"><b>Crochet Braids</b></h6>
                   <button type="button" class="btn btn-success2 col-md-4">Book</button>
                </div>
                <p class="card-text"><small class="text-muted">Webmingo</small><small class="text-muted float-right mt-1">45-60 min</small></p>
                 <span class="desc_txt">Description</span>
                 <P class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</P>
                             
              </div>
              </div>
              <div class="card shadow">
              <div class="card-img-caption">
                       <div class='rating-stars'>
                        <ul id='stars'>
                          <li class='star' title='Poor' data-value='1'>
                            <i class='fa fa-star '></i>
                          </li>
                          <li class='star' title='Fair' data-value='2'>
                            <i class='fa fa-star'></i>
                          </li>
                          <li class='star' title='Good' data-value='3'>
                            <i class='fa fa-star'></i>
                          </li>
                          <li class='star' title='Excellent' data-value='4'>
                            <i class='fa fa-star'></i>
                          </li>
                          <li class='star' title='WOW!!!' data-value='5'>
                            <i class='fa fa-star'></i>
                          </li>
                        </ul>
                      </div>
            <img src="images/braids.jpg" class="card-img" alt="...">
             </div>
              <div class="card-body">
                 <div class="row">
                 <h6 class="card-title col-md-8 mt-1"><b>Crochet Braids</b></h6>
                 <button type="button" class="btn btn-success2 col-md-4">Book</button>
                </div>
                <p class="card-text">
                <small class="text-muted">Webmingo</small>
                <small class="text-muted float-right mt-1">45-60 min</small>
                </p>
                <span class="desc_txt">Description</span>
                <P class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</P>
                                 
                </div>
              </div>

          </div>
            
      </div>
          <div class="mt-5 line" style="color: #299494;">27 Reviews</div>
          <div class="mb-5" style="border: 1px solid darkgrey"></div>
   </div>

</div>
</div>
</div>
</section>