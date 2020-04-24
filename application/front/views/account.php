<?php $this->load->view('templates/_include/header_view1'); ?>
<section id="UserProfile">
  <div class="container">

    <div class="card-group shadow  mt-5 mb-5 " style="border: none 0!important;">
      <div class="card col-3 border-0" style="background: #e6e6e6;">
        <div class="card-body">
          <div class="text-center">
            <img src="<?php echo base_url('front/images/user.jpg');?>" class="img-fluid rounded-circle mt-3">
            <h6 class="mt-2 user_name">Mathew McCoy</h6>
            <p><a href="#">matt@ncitshop.com</a></p>
            <button class="btn profile_btn mt-2">Profile</button>
          </div>
          <hr>

          <div class="nav flex-column nav-pills" id="myTab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" data-toggle="pill" href="#personal_info" role="tab"><img
               src="<?php echo base_url('front/images/user.png');?>" width="18px">&nbsp; Personal Info</a>

            <a class="nav-link " data-toggle="pill" href="#loginandsecurity" role="tab"><img
               src="<?php echo base_url('front/images/lock.png');?>" width="18px">&nbsp; Login & Security</a>

            <a class="nav-link" data-toggle="pill" href="#payments" role="tab"><i
                class="fa fa-usd fa-lg"></i>&nbsp;&nbsp; Payments and Payouts</a>

            <a class="nav-link" data-toggle="pill" href="#notification" role="tab"><img src="<?php echo base_url('front/images/bell.png');?>" width="18px">&nbsp; Notifications</a>

            <a class="nav-link" data-toggle="pill" href="#privacy" role="tab"><img src="<?php echo base_url('front/images/eye.png');?>"
                width="18px">&nbsp; Privacy & Sharing</a>

            <a class="nav-link" data-toggle="pill" href="#preferences" role="tab"><i
                class="fa fa-sliders fa-lg"></i>&nbsp; Global preferences</a>

            <a class="nav-link mb-5" data-toggle="pill" href="#get_groomcontent" role="tab"><img
               src="<?php echo base_url('front/images/user.png');?>" width="18px">&nbsp; Get Groomed for work</a>
          </div>

        </div>
      </div>

      <div class="card col-9 border-0">
        <div class="card-body">

          <div class="tab-content" id="myTabContent">
            <!-------------- Personal info section------------>
            <div class="tab-pane fade show active" id="personal_info" role="tabpanel">
              <div class="mt-3">
                <h4 class="head_txt mb-5"><b>Personal info</b></h4>
              </div>

              <h6>Legal name</h6>
              <button class="btn btn_edit border-0 float-right">Edit</button>
              <p> Mathew McCoy </p>
              <hr>

              <h6>Gender</h6>
              <button class="btn btn_edit border-0 float-right">Edit</button>
              <p> Male </p>
              <hr>

              <h6>Date of birth</h6>
              <button class="btn btn_edit border-0 float-right">Edit</button>
              <p> January 9,1980 </p>
              <hr>


              <h6>Email address</h6>
              <button class="btn btn_edit border-0 float-right">Edit</button>
              <p> matt@ncitshop.com</p>
              <hr>

              <h6>Phone number </h6>
              <button class="btn btn_edit border-0 float-right">Edit</button>
              <p> +1 999 9078393</p>
              <hr>

              <h6>Government ID</h6>
              <button class="btn btn_edit border-0 float-right">Remove</button>
              <p> Provided </p>
              <hr>

              <h6>Address</h6>
              <button class="btn btn_edit border-0 float-right">Edit</button>
              <p>123 main street </p>
              <hr>

              <h6>Emergency contact</h6>
              <button class="btn btn_edit border-0 float-right">Edit</button>
              <p> 1231 </p>
              <hr>

            </div>



            <!-------------- Login & Securit section------------>
            <div class="tab-pane fade" id="loginandsecurity" role="tabpanel">
              <div class="mt-3">
                <h4 class="head_txt mb-5"><b>Login & Security</b></h4>

                <div class="head_detail mb-3"><b>Login</b></div>
                <h6>Password</h6>
                <button class="btn btn_edit border-0 float-right">Update</button>
                <p>Updates 3 days ago</p>
                <hr>

                <div class="head_detail mb-3"><b>Social accounts</b></div>
                <h6>Facebook connected</h6>
                <button class="btn btn_edit border-0 float-right">Disconnect</button>
                <p>Connected</p>
                <hr>

                <h6>Google connected</h6>
                <button class="btn btn_edit border-0 float-right">Connect</button>
                <p>Not connected</p>
                <hr>

                <div class="head_detail mb-3"><b>Device history</b></div>
                <h6><span><i class="fa fa-desktop"></i>&nbsp;</span>Windows 10.0 Chrome</h6>
                <button class="btn btn_edit border-0 float-right">Logout Device</button>
                <p>Garner Febraury 24,2020</p>
                <hr>
              </div>
            </div>
            <!-------------- Payments and Payouts section------------>
            <div class="tab-pane fade" id="payments" role="tabpanel">
              <div class="mt-3 container">
                <h4 class="head_txt mb-5"><b>Payments and Payouts</b></h4>
              </div>

              <section id="tabs" class="payment-tab">
                <div class="container">
                  <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" data-toggle="tab" href="#payment" role="tab">Payments</a>
                      <a class="nav-item nav-link" data-toggle="tab" href="#payout" role="tab">Payouts</a>
                      <a class="nav-item nav-link" data-toggle="tab" href="#taxes" role="tab">Taxes</a>
                      <a class="nav-item nav-link" data-toggle="tab" href="#donation" role="tab">Donations</a>
                    </div>
                  </nav>
                  <div class="tab-content mt-5" id="nav-tabContent">

                    <div class="tab-pane fade active show" id="payment" role="tabpanel">
                      <div class="head_detail"><b>Payment methods</b></div>
                      <p>Add and manage your payment methods using our secure payment system.</p>

                      <div class="row">
                        <div class="col-sm-1">
                          <div><img class="img-fluid" src="<?php echo base_url('front/images/mastercard.png');?>"> </div>
                        </div>
                        <div class="col-sm-10 mt-1">
                          <p>Mastercard....1234 &nbsp;&nbsp; <span><button
                                class="bt_defpay"><b>Default</b></button></span>
                            <br> <span>Expiration 01/2021</span>
                          </p>
                        </div>

                        <div class="col-sm-1 ml-auto mt-3">
                          <a href="#"><img src="<?php echo base_url('front/images/more.png');?>"></a>
                        </div>
                        
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-1">
                          <div><img class="img-fluid" src="<?php echo base_url('front/images/mastercard.png');?>"></div>
                        </div>
                        <div class="col-sm-10 mt-1">
                          <p>Mastercard....1234 &nbsp;&nbsp; <span><button
                                class="bt_defpay"><b>Default</b></button></span>
                            <br> <span>Expiration 01/2021</span>
                          </p>

                        </div>
                        <div class="col-sm-1 ml-auto mt-3">
                          <a href="#"><img src="<?php echo base_url('front/images/more.png');?>"></a>
                        </div>
                      </div>
                      <hr>
                      <button class="btn btn_paysec mt-5 mb-3">Add Payment Method</button>
                    </div>

                    <div class="tab-pane fade" id="payout" role="tabpanel">
                      <div class="card-group  w-50  mt-5 mb-5 ">
                        <div class="card col-3 text-center" style="background: #299494;">
                          <div class="card-body ">
                            <img class="img-fluid mt-4 mb-5" src="<?php echo base_url('front/images/info.png');?>">
                          </div>
                        </div>
                        <div class="card col-9 ">
                          <div class="card-body mt-4">
                            <h6>2019 Tax Filing</h6>
                            <p>Lorem ipsum dolar sit amet <br>Lorem ipsum dolar sit amet <br>Lorem ipsum dolar sit amet
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="head_detail "><b>Payouts methods</b></div>
                      <p>Lorem ipsum, dolor sit amet</p>
                      <div class="row">
                        <div class="col-sm-1 mt-1">
                          <div><i class="fa fa-bank" style="font-size:40px; color: grey;"></i></div>
                        </div>
                        <div class="col-sm-10">
                          <p>Bank Account &nbsp;&nbsp; <span><button class="bt_defpay"><b>Default</b></button></span>
                            <br> <span>Mathew McCoy Checking......123 (USD)</span>
                          </p>

                        </div>
                        <div class="col-sm-1 ml-auto">
                          <a href="#"><img src="<?php echo base_url('front/images/more.png');?>"></a>
                        </div>
                      </div>
                      <hr>
                      <button class="btn btn_paysec mt-5 mb-3">Add Payout Method</button>
                    </div>

                    <div class="tab-pane fade" id="taxes" role="tabpanel">
                      <div class="head_detail "><b>State sales</b></div>
                      <p>Lorem ipsum, dolor sit amet</p>
                      <button class="btn btn_paysec mt-5 mb-3">Add VAT ID Number</button>
                    </div>

                    <div class="tab-pane fade" id="donation" role="tabpanel">
                      <div class="head_detail "><b>Donations</b></div>
                      <p>Lorem ipsum, dolor sit amet</p>
                      <button class="btn btn_paysec mt-5 mb-3">Start donating</button>
                    </div>
                  </div>
                </div>
              </section>

            </div>

            <!-------------- Notification section------------>
            <div class="tab-pane fade" id="notification" role="tabpanel">
              <div class="mt-3">
                <h4 class="head_txt mb-5"><b>Notifications</b></h4>
              </div>

              <table class="table table-responsive table-borderless">
                <thead>
                  <tr scope="row">
                    <th class="col-sm-6"></th>
                    <th class="col-sm-1">Call</th>
                    <th class="col-sm-1">Email</th>
                    <th class="col-sm-1">SMS</th>
                    <th class="col-sm-3"></th>
                  </tr>
                </thead>

                <tbody>
                  <tr style="border-bottom:1px solid lightgrey ;">
                    <td class="col-sm-6">
                      <h6>Messages</h6>
                      <p>Lorem, ipsum dolor sit amet consecte</p>
                    </td>
                    <td class="col-sm-1 text-center"><label class="check ">
                      <input type="checkbox" >
                      <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="col-sm-1 text-center">   <label class="check ">
                      <input type="checkbox" >
                      <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="col-sm-1 text-center"><label class="check ">
                      <input type="checkbox"  >
                      <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="col-sm-3"></td>
                  </tr>
                  <tr style="border-bottom:1px solid lightgrey ;">
                    <td class="col-sm-6">
                      <h6>Reminders</h6>
                      <p>Lorem, ipsum dolor sit amet consecte</p>
                    </td>
                    <td class="col-sm-1 text-center"><label class="check ">
                      <input type="checkbox" >
                      <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="col-sm-1 text-center"><label class="check ">
                      <input type="checkbox">
                      <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="col-sm-1 text-center"><label class="check ">
                      <input type="checkbox" >
                      <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="col-sm-3"></td>
                  </tr>
                  <tr style="border-bottom:1px solid lightgrey ;">
                    <td class="col-sm-6">
                      <h6>Promotions and tips</h6>
                      <p>Lorem, ipsum dolor sit amet consecte</p>
                    </td>
                    <td class="col-sm-1 text-center"><label class="check ">
                      <input type="checkbox" >
                      <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="col-sm-1 text-center">   <label class="check ">
                      <input type="checkbox"  >
                      <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="col-sm-1 text-center"><label class="check ">
                      <input type="checkbox">
                      <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="col-sm-3"></td>
                  </tr>
                  <tr style="border-bottom:1px solid lightgrey ;">
                    <td class="col-sm-6">
                      <h6>Policy and community</h6>
                      <p>Lorem, ipsum dolor sit amet consecte</p>
                    </td>
                    <td class="col-sm-1 text-center"><label class="check ">
                      <input type="checkbox" >
                      <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="col-sm-1 text-center">   <label class="check ">
                      <input type="checkbox">
                      <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="col-sm-1 text-center"><label class="check ">
                      <input type="checkbox"  >
                      <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="col-sm-3"></td>
                  </tr>
                  <tr style="border-bottom:1px solid lightgrey ;">
                    <td class="col-sm-6">
                      <h6>Account support</h6>
                      <p>Lorem, ipsum dolor sit amet consecte</p>
                    </td>
                    <td class="col-sm-1 text-center"><label class="check ">
                      <input type="checkbox"  >
                      <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="col-sm-1 text-center">   <label class="check ">
                      <input type="checkbox"  >
                      <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="col-sm-1 text-center"><label class="check ">
                      <input type="checkbox"  >
                      <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="col-sm-3"></td>
                  </tr>
                  <tr style="border-bottom:1px solid lightgrey ;">
                    <td class="col-sm-6">
                      <h6>Unsubscribe from all marketing emails</h6>
                      <p>Lorem, ipsum dolor sit amet consecte</p>
                    </td>
                    <td></td>
                    <td></td>
                    <td class="text-center"> <label class="switch float-right"><input type="checkbox"><span
                          class="slider round"></span></label></td>
                    <td class="col-sm-3"></td>
                  </tr>
                </tbody>
              </table>

            </div>

            <!-------------- Privacy and sharing section------------>
            <div class="tab-pane fade" id="privacy" role="tabpanel">
              <div class="mt-3">
                <h4 class="head_txt mb-5"><b>Privacy and sharing</b></h4>

                <h6>Share my activity on Facebook</h6>
                <label class="switch float-right"><input type="checkbox"><span class="slider round"></span></label>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <hr>

                <h6>Publish your saves to Facebook</h6>
                <label class="switch float-right"><input type="checkbox"><span class="slider round"></span></label>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <hr>

                <h6>Include my profile and listing into search engine</h6>
                <label class="switch float-right"><input type="checkbox"><span class="slider round"></span></label>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <hr>

                <div class="head_detail "><b>Connected apps</b></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                <table class="table table-responsive table-borderless">
                  <tbody>
                    <tr>
                      <td>
                        <div class="icon-bar"><img src="<?php echo base_url('front/images/user 1.png');?>" class="img-fluid"></div>
                      </td>
                      <td class="col">
                        <h6>Unsubscribe from all marketing emails</h6>
                        <p>Lorem, ipsum dolor sit amet consecte</p>
                      </td>
                      <td><button class="btn btn_edit border-0 ">Remove access</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>




            <!--------------Global Preferences section------------>
            <div class="tab-pane fade" id="preferences" role="tabpanel">
              <div class="mt-3">
                <h4 class="head_txt mb-5"><b>Global Preferences</b></h4>

                <h6>Preferred language</h6>
                <button class="btn btn_edit border-0 float-right">Edit</button>
                <p>English</p>
                <hr>

                <h6>Time zone</h6>
                <button class="btn btn_edit border-0 float-right">Edit</button>
                <p>GST Eastern time</p>
                <hr>
              </div>
            </div>

            <!--------------Get Groomed for work section------------>
            <div class="tab-pane fade" id="get_groomcontent" role="tabpanel">
              <h4 class="head_txt mt-3"><b>Get Groomed for work</b></h4>
              <div class="mt-3" style="font-size: 20px;"><strong>Your work profile</strong></div>

              <p>You have to access<span id="dots">....</span><span id="more">erisque enim ligula
                  venenatis dolor.</span>
                <button onclick="myFunction()" id="myBtn">Learn more</button></p>

              <div class="mt-5">
                <h6>Work email</h6>
                <button class="btn btn_remove border-0 float-right">Remove email</button>
                <p> mmccoy@mocno.com</p>
                <hr>

                <h6>Booking Permission</h6>
                <button class="btn btn_remove border-0 float-right">Manage</button>
                <p>XYZ</p>
                <hr>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>

</section>