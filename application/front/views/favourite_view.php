<?php $this->load->view('templates/_include/header_view1'); ?>
<section id="Favorites">
<div class="container mt-5">
            
        <div>
            <h5><strong>Favorites</strong></h5>
            <button class="list_btn float-right" data-toggle="modal" data-target="#favorites"  data-whatever="@mdo">Create list</button>
            <p class="list">10 lists</p>
        </div>
          <div class="row mt-4">
              <div class="col-sm-3">
                <div class="card border-0 shadow">
                    <img class="card-img-top img-fluid"  src="<?php echo base_url('front/images/braids.jpg');?>" >
                    <div class="card-body">
                      <h5 style="color: #4D4D4D;">Face</h5>
                      <p class="card-text"> 1 Service</p>
                    </div>
                  </div>
              </div>
              <div class="col-sm-3">
                <div class="card  border-0 shadow">
                    <img class="card-img-top img-fluid" src="<?php echo base_url('front/images/braids.jpg');?>" >
                    <div class="card-body">
                      <h5 style="color: #4D4D4D;">Face</h5>
                      <p class="card-text">1 Service</p>
                    </div>
                  </div>
              </div>
              <div class="col-sm-3">
                <div class="card  border-0 shadow">
                    <img class="card-img-top img-fluid" src="<?php echo base_url('front/images/braids.jpg');?>" >
                    <div class="card-body">
                      <h5 style="color: #4D4D4D;">Face</h5>
                      <p class="card-text">1 Service</p>
                    </div>
                  </div>
              </div>
              <div class="col-sm-3">
                <div class="card  border-0 shadow">
                    <img class="card-img-top img-fluid" src="<?php echo base_url('front/images/braids.jpg');?>" >
                    <div class="card-body">
                      <h5 style="color: #4D4D4D;">Face</h5>
                      <p class="card-text">1 Service</p>
                    </div>
                  </div>
              </div>
          </div>
           
</div>
</section>




<div class="modal fade" id="favorites" tabindex="-1" role="favorites" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-body">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="text-center "><b>Create a list</b></h5>

          <div class="form-group mt-4 mt-5">
            <input class="form-control" placeholder="Name" id="name">
            <select class="form-control mt-4" id="exampleFormControlSelect1">
              <option>Everyone</option>
              <option>1</option>
              <option>2</option>
            </select>
          </div>

          <div class="mt-5 mb-4">
            <span><button class="btn select_btn">Save</button></span>&nbsp;&nbsp;
            <span><button class="btn fav_cancel">Cancel</button></span>
          </div>
        </div>
      </div>
    </div>
  </div>
