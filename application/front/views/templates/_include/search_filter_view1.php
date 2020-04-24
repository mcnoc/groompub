<body id="searchexted" style="margin-top:10%">
      
    <section>
    
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-4 mt-1">
              <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="" ><b>Find</b> </span>
              </div>
              <input type="text" class="form-control input1" placeholder="barbers,spa" id="search_text" >
                <span class="mt-2" style="border-left: 2px solid lightgrey;height: 24px;"></span>
              <span class="input-group-text" id=""><b>Near</b> </span>
              <input type="text" class="form-control input2" placeholder="city,zip" id="search_location">
                
          </div>
         </div>
         
        <div class="col mt-1">
          <div class="dropdown dropdown_service">
              <button class="btn btn_service" type="button" data-toggle="dropdown">Services
              <span class="fa fa-chevron-down"></span></button>
              <div class="dropdown-menu mt-3" >
                <div class="card card_service card-body">
                 
                  <!-- <input type="checkbox" name="filter_services" id="filter_services"> -->
                 
                  <?php
                          foreach ($filter_service_list as $key => $filter_service) {?>
                            <!-- <label for="<?=$filter_service->service_name?>" style="color:#000;"><?=$filter_service->service_name?></label> -->
                              <form id="check_service"> 
                            <input for="<?=$filter_service->service_name?>" class="serviceinputs" type="checkbox" name="filter_services" id="<?=$filter_service->service_name?>"><?=$filter_service->service_name?><br>
                        <?php }?>
                        <input type="hidden" id="service_list" value="">
                 
                </form>

                </div>
                 
              </div> 
            </div>        
        </div>
          
       <div class="col ">

					<button class="btn btn_shop" type="button" data-toggle="modal" data-target="#Shopoption">Shop
						Options
						<span class="fa fa-chevron-down"></span></button>

					<div class="modal" id="Shopoption" tabindex="-1" role="dialog" aria-hidden="true"
						data-backdrop="false">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Shop and Provider Options</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
						<form  method="get" id="provider">
								<div class="modal-body p-0">
									<div class="p-3">
										<h6 style="font-size: 18px;"><b>Provider Options</b></h6>
										<h6 style="font-size: 16px;color: #4d4d4d;">Verified Providers</h6>
										<div class="row">
											<div class="col-sm-10">
												<p style="font-size: 12px; color: #999999;">A selection of providers
													who's identity have been verified.</p>
											</div>
											<div class="col-sm-2">
												<label class="switch"><input type="checkbox" name="varified" value="varified_provider"> 
													<div><input type="hidden" name="varified" value=""></div>
												</label>
											</div>
										</div>

										<h6 style="font-size: 16px;color: #4d4d4d;">Verified Shops</h6>
										<div class="row">
											<div class="col-sm-10">
												<p style="font-size: 12px; color: #999999;">Shops who's owner has
													claimed their shop and identity have been verified.</p>
											</div>
											<div class="col-sm-2">
												<label class="switch"><input type="checkbox" name="varified_shop" value="varified_shop"> 
													<div><input type="hidden" name="varified_shop" value=""></div>
												</label>
											</div>
										</div>

										<div class="provider-rating">
											<h6 style="font-size: 18px;"><b>Provider Rating</b></h6>
											<div class="radio-toolbar mt-4">
												<input type="radio" id="radioAll" name="ProviderstarRate" value="all" checked>
												<label for="radioAll"><i class="fa fa-star"></i> All</label>
												
											  <input type="radio" id="radioFive" name="ProviderstarRate" value="five">
												<label for="radioFive"><i class="fa fa-star"></i> 5</label>
												
												<input type="radio" id="radioFour" name="ProviderstarRate" value="four">
												<label for="radioFour"><i class="fa fa-star"></i> 4</label>
												
												 <input type="radio" id="radioThree" name="ProviderstarRate" value="three">
												<label for="radioThree"><i class="fa fa-star"></i> 3</label>
												
												<input type="radio" id="radioTwo" name="ProviderstarRate" value="two">
												<label for="radioTwo"><i class="fa fa-star"></i> 2</label> 
												
												<input type="radio" id="radioOne" name="ProviderstarRate" value="one">
												<label for="radioOne"><i class="fa fa-star"></i> 1</label>
											</div>
										</div>
									</div>
									<div style="border-bottom: 1px solid #ccc;"></div>
									
									<!-- Shop Option -->
									<div class="p-3 mt-3">
										<h6 style="font-size: 18px;"><b>Shop Options</b></h6>
										<h6 style="font-size: 17px;color: #4d4d4d;">Bathrooms</h6>

										<div class="row">
											<div class="col-sm-10">
												<p style="font-size: 12px; color: #4D4D4D;">Female Bathroom</p>
											</div>
											<div class="col-sm-2">
												<label class="switch"><input type="checkbox" name="Female_Bathroom" value="Female_Bathroom"> 
													<div><input type="hidden" name="Female_Bathroom" value=""></div>
												</label>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-10">
												<p style="font-size: 12px; color: #4D4D4D;">Male Bathroom</p>
											</div>
												<div class="col-sm-2">
												<label class="switch"><input type="checkbox" name="male_Bathroom" value="male_Bathroom"> 
													<div><input type="hidden" name="male_Bathroom" value=""></div>
												</label>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-10">
												<p style="font-size: 12px; color: #4D4D4D;">Gender Neutral Bathroom</p>
											</div>
												<div class="col-sm-2">
												<label class="switch"><input type="checkbox" name="Neutral_Bathroom" value="Neutral_Bathroom"> 
													<div><input type="hidden" name="Neutral_Bathroom" value=""></div>
												</label>
												</div>
										</div>

										<div class="shop-rating">
											<h6 style="font-size: 18px;"><b>Shop Rating</b></h6>
											<div class="radio-toolbar mt-4">
												<input type="radio" id="starAll" name="ShopstarRating" value="Allstar"  checked>
												<label for="starAll"><i class="fa fa-star"></i> All</label>
												
											  <input type="radio" id="starfive" name="ShopstarRating" value="Fivestar">
												<label for="starfive"><i class="fa fa-star"></i> 5</label>
												
												<input type="radio" id="starfour" name="ShopstarRating" value="Fourstar">
												<label for="starfour"><i class="fa fa-star"></i> 4</label>
												
												 <input type="radio" id="starthree" name="ShopstarRating" value="Threestar">
												<label for="starthree"><i class="fa fa-star"></i> 3</label>
												
												<input type="radio" id="startwo" name="ShopstarRating" value="Twostar">
												<label for="startwo"><i class="fa fa-star"></i> 2</label> 
												
												<input type="radio" id="starone" name="ShopstarRating" value="Onestar">
												<label for="starone"><i class="fa fa-star"></i> 1</label>
											</div>
										</div>
									</div>
									<div style="border-bottom: 1px solid #ccc;"></div>

									<!--Accessibility  Section  -->
									<div class="p-3 mt-3">
										<h6 style="font-size: 18px; color: #4D4D4D;"><b>Accessibility</b></h6>
										<p style="font-size: 12px; color: #4D4D4D;">Find a place to stay that meets your
											mobility needs.</p>

										<!-- Hide Button -->
											<input type="button" class="btn_hide mb-1" value="Hide Features"
												id="hide-btn">

										<div id="hide_section">
											<div style="font-weight: 500;color: #4D4D4D;">Entering the place</div>
											<div class="row">
												<div class="col-sm-6 mt-3">
													<div class="chiller_cb">
														<input  id="myCheckbox1" type="checkbox" name="stairs_or_steps" value="No stairs or steps to enter"> 
														<label for="myCheckbox1">No stairs or steps to enter</label>
														<span></span>
													</div>
												</div>
												<div class="col-sm-6 mt-3">
													<div class="chiller_cb">
														<input  id="myCheckbox2" type="checkbox" name="Well-lit_path" value="Well-lit path to entrance"> 
														
														<label for="myCheckbox2">Well-lit path to entrance</label>
														<span></span>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-sm-6 mt-3">
													<div class="chiller_cb">
														<input  id="myCheckbox3" type="checkbox" name="Wide_Entrance" value="Wide Entrance for guests"> 
														
														<label for="myCheckbox3">Wide Entrance for guests</label>
														<span></span>
													</div>
												</div>
												<div class="col-sm-6 mt-3">
													<div class="chiller_cb">
														<input  id="myCheckbox4" type="checkbox" name="Step_free_path" value="Step free path to entrance"> 
														
														<label for="myCheckbox4">Step free path to entrance</label>
														<span></span>
													</div>
												</div>
											</div>

											<div class="mt-3" style="font-weight: 500;color: #4D4D4D;">Getting around</div>
											<div class="row">
												<div class="col-sm-6 mt-3">
													<div class="chiller_cb">
														<input  id="myCheckbox5" type="checkbox" name="hallways" value="The hallways on the ground floor are at
															least 36 inches wide"> 
														
														<label for="myCheckbox5">The hallways on the ground floor are at
															least 36 inches wide</label>
														<span></span>
													</div>
												</div>
												<div class="col-sm-6 mt-3">
													<div class="chiller_cb">
														<input  id="myCheckbox6" type="checkbox" name="contact_shop" value="If needed contact shop about
															width">
														
														<label for="myCheckbox6">If needed contact shop about
															width</label>
														<span></span>
													</div>
												</div>
											</div>

											<div class="mt-4" style="font-weight: 500;color: #4D4D4D;">Bathroom</div>
											<div class="row">
												<div class="col-sm-6 mt-3">
													<div class="chiller_cb">
														<input  id="myCheckbox7" type="checkbox" name="Bathroom_stairs_step" value="No stairs or steps te enter">
														<label for="myCheckbox7">No stairs or steps te enter</label>
														<span></span>
													</div>
												</div>
												<div class="col-sm-6 mt-3">
													<div class="chiller_cb">
														<input  id="myCheckbox8" type="checkbox" name="Bathroom_Fixed grab" value="Fixed grab bars for toilet">
														<label for="myCheckbox8">Fixed grab bars for toilet</label>
														<span></span>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6 mt-3">
													<div class="chiller_cb">
														<input  id="myCheckbox9" type="checkbox" name="Accessible_height_toilet" value="Accessible height toilet">
														<label for="myCheckbox9">Accessible height toilet</label>
														<span></span>
													</div>
												</div>
												<div class="col-sm-6 mt-3">
													<div class="chiller_cb">
														<input  id="myCheckbox10" type="checkbox" name="Wide_clearance" value="Wide clearance to toilet">
														
														<label for="myCheckbox10">Wide clearance to toilet</label>
														<span></span>
													</div>
												</div>
											</div>

											<div class="mt-4" style="font-weight: 500;color: #4D4D4D;">Common areas</div>

											<div class="row">
												<div class="col-sm-6 mt-3">
													<div class="chiller_cb">
														<input  id="myCheckbox11" type="checkbox" name="No_stairs_step_common_area" value="No stairs or steps te enter">
														
														<label for="myCheckbox11">No stairs or steps te enter</label>
														<span></span>
													</div>
												</div>
												<div class="col-sm-6 mt-3">
													<div class="chiller_cb">
														<input  id="myCheckbox12" type="checkbox" name="Wide_anyway" value="Wide anyway">
														<label for="myCheckbox12">Wide anyway</label>
														<span></span>
													</div>
												</div>
											</div>

											<div class="mt-4" style="font-weight: 500;color: #4D4D4D;">Parking</div>
											<div class="row">
												<div class="col-sm-10 mt-3">
													<div class="chiller_cb">
														<input  id="myCheckbox13" type="checkbox" name="parking_spot" value="There's a parking spot thats been
															designated as a suitable for a persons">
														<label for="myCheckbox13">There's a parking spot thats been
															designated as a suitable for a persons</label>
														<span></span>
													</div>
												</div>
											</div>
											<div class="float-right mt-5 mb-5">
												<button class="btn btn_apply">Show 300+ Services</button>
											</div>

										</div>
									</div>

								</div>
								</form>
							</div>
						</div>
					</div>

				</div> 

        <div class="col">
					<div class="dropdown dropdown_price">
						<button class="btn btn_price" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Price
							<span class="fa fa-chevron-down"></span></button>
					<form class="dropdown-menu">
					  <div class="form-group">
					       <h5><b>Select Price</b></h5>

								<div class="row mt-5">
									<div class="col-sm-6">
										<label for="min_price">Minimum Price</label>
										<select class="form-control dropMenu" id="min_price">
											<option>$10</option>
											<option>$20</option>
											<option>$30</option>
											<option>$40</option>
										</select>
									</div>

									<div class="col-sm-6">
										<label for="min_price dropMenu">Maximum Price</label>
										<select class="form-control" id="max_price">
											<option>$500</option>
											<option>$700</option>
											<option>$800</option>
											<option>$1000</option>
										</select>
									</div>
								</div>
								<button class="float-right btn btn_apply mt-5 mb-4" type="submit">Apply</button>
							</div>
				     	</form>
					  </div>
					</div>

				<!------- Date Range Picker ------->

				<div class="col ">
					<button id="datebtn" type="text" name="datefilter" id="datefilter" class="form-control date_picker"
						placeholder="Date">Date<span class="fa fa-chevron-down mt-1 float-right"></span></button>
				</div>

				<!--   -->
				<div class="col">
					<div class="dropdown dropdown_time">
						<button class="btn btn_time" type="button" data-toggle="dropdown">Time
							<span class="fa fa-chevron-down"></span></button>
						<div class="dropdown-menu dropdown-menu-right mt-2">

							<div class="Time_section ml-1">
								<h6>Time Duration</h6>
								<div>
									<span>From</span>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<span>To</span>
								</div>

								<div>
									<span>

										<input type="text" name="timepicker" class="timepicker" />
									</span>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<span>
										<input type="text" name="timepicker" class="timepicker" />
									</span>
								</div>

								<button class="btn btn_apply float-right mr-2">Apply</button>

							</div>
						</div>
					</div>
				</div>
            <div class="col mt-1">
              <button class="btn btn_search" id="btn_search">Search</button>     
             </div>
        
        </div>
        <div style="width:17%;  background-color: white;" id="result"></div>
                     <div class="search_heading mt-5">
                      <h5>Search Heading</h5>
                      <p class="txt1">We found match result of your search</p>
                      <p class="txt2 mt-1">Showing 12 services of your match</p>

                        <div class="dropdown_recommendation mt-3">
                  <button class="btn recommend_btn" type="button" data-toggle="dropdown">
                  Sort by:recommended &nbsp;&nbsp;<span class="fa fa-chevron-down"></span></button>
              <div class="dropdown-menu mt-2">
                          
                          <div class="recom ">
                  <p>Recommended</p>
                   <p>Closest</p>
                   <p>Price (Low to high)</p>
                   <p>Price (high to low)</p>
                </div>
              </div> 
            </div>
          
        <!--  <div class="container">
           <div class="row mt-5">       
           <div class="col-md-3">
           <div  id="top_rated">
           <div class="card shadow">
              <div class="card-img-caption">
                            <p class="card-text">Braids</p>
                            <p class="prize_text ">$10</p>
              <i class="fa fa-heart-o float-right" style="font-size:30px;"></i>
              <img src="images/braids.jpg" class="card-img" alt="...">
             </div>
              <div class="card-body">
                <div class="row">
                 <h6 class="card-title col-md-8 mt-1"><b>Crochet Braids</b></h6>
                 <button type="button" class="btn btn-success2 col-md-4">Book</button>
                </div>
                <p class="card-text"><small class="text-muted">Webmingo</small><small class="text-muted float-right mt-1">45-60 min</small></p>
                  <div class='rating-stars'>
                    <ul id='stars'>
                      <li class='star' title='Poor' data-value='1'>
                        <i class='fa fa-star fa-fw'></i>
                      </li>
                      <li class='star' title='Fair' data-value='2'>
                        <i class='fa fa-star fa-fw'></i>
                      </li>
                      <li class='star' title='Good' data-value='3'>
                        <i class='fa fa-star fa-fw'></i>
                      </li>
                      <li class='star' title='Excellent' data-value='4'>
                        <i class='fa fa-star fa-fw'></i>
                      </li>
                      <li class='star' title='WOW!!!' data-value='5'>
                        <i class='fa fa-star fa-fw'></i>
                      </li>
                    </ul>
                  </div>
                         
              </div>
            </div>
      </div> -->
    </div>

      </div>
    </div>  
    </div>    
                               
        </div>
      
      </section>

      
<script>
$(document).ready(function(){
  
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
});

function MakeBold(str) {
   
   $("#search_text").val(str);
    $("#result").empty();
}





</script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>	
	<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
