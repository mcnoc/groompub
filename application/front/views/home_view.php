<?php
$this->load->view('templates/_include/header_view1');
$this->load->view('templates/_include/search_filter_view');
?>
<style>
  a {
    color: white;
  }

  a:hover {
    color: black;
    text-decoration: none;
}
.owl-carousel .owl-next {
    right: -30px !important;
}
.owl-carousel .owl-next {
    right: -30px !important;
}
</style>

<?php if(!empty($top_rated_service_list)){?>

<section id="testimonials">
  <div class="container mt-5 " style="margin-top: 5%;">
          <div id="customers-testimonials" class="owl-carousel">

            <?php 

      foreach ($top_rated_service_list as $key => $rated_service) {
        $img = $rated_service->image;
        $temp_file = base_url()."front/images/banner.jpg";
        $main_file = "assets/uploads/service_image/".$img;
        $filename = FCPATH.$main_file;
        if (file_exists($filename)) {
          if($img != ''){
              $main_image =  base_url().$main_file;
          }else{
              $main_image =  $temp_file;
          }
        }else{
          $main_image =  $temp_file;
        }

        if(!empty($rated_service->und_sub_category->cat_name)){
            $category = $rated_service->und_sub_category->cat_name.' - ' .$rated_service->sub_category->cat_name;
            $parent_cat = $rated_service->service_name;
        }else if(!empty($rated_service->sub_category->cat_name)){
            $category = $rated_service->sub_category->cat_name;
            $parent_cat = $rated_service->service_name;
        }else{
            $category = $rated_service->service_name;
            $parent_cat = '';
        }
        $heart = ($rated_service->fav == "1")  ? 'fa-heart' : 'fa-heart-o';
      ?>
          
      
            <div class="item">
              <div class="shadow mt-4" style="border-radius: 20px;">
                <img class="img-fluid" src="<?=$main_image?>" style="height:300px;width:388px;object-fit:cover;" >
                <div class="item-details">
                  <h6><?=$category?></h6>
                  
                </div>
              </div>
            </div>
          <?php }?>
           
           
          </div>
        </div>
      


    </section>
  <?php }?>


<?php if(!empty($top_rated_service_list)){?>
<section class="related_services">
 <div class="container mt-5">
     <div class="row">
   
         <div class="col-sm-11">
         <h6><b>Top Rated</b></h6>
           </div>
         <div class="col-sm-1">
         <a href="#" style="color: #20878C">View All</a>
        </div>
  
    
    </div>
   
     <div class="card-deck" id="top_rated">
      <?php 

      foreach ($top_rated_service_list as $key => $rated_service) {
        $img = $rated_service->image;
        $temp_file = base_url()."front/images/banner.jpg";
        $main_file = "assets/uploads/service_image/".$img;
        $filename = FCPATH.$main_file;
        if (file_exists($filename)) {
          if($img != ''){
              $main_image =  base_url().$main_file;
          }else{
              $main_image =  $temp_file;
          }
        }else{
          $main_image =  $temp_file;
        }

        if(!empty($rated_service->und_sub_category->cat_name)){
            $category = $rated_service->und_sub_category->cat_name.' - ' .$rated_service->sub_category->cat_name;
            $parent_cat = $rated_service->service_name;
        }else if(!empty($rated_service->sub_category->cat_name)){
            $category = $rated_service->sub_category->cat_name;
            $parent_cat = $rated_service->service_name;
        }else{
            $category = $rated_service->service_name;
            $parent_cat = '';
        }
        $heart = ($rated_service->fav == "1")  ? 'fa-heart' : 'fa-heart-o';
      ?>
      <!-- <div class="item"> -->
       <!-- <div class="col-md-6"> -->
         <div class="col-md-4 card shadow">
              <div class="card-img-caption">
                   <p class="card-text">Braids</p><br>
                            
                            <p class="prize_text "><?=$parent_cat?> $<?=$rated_service->price?></p>
              <i class="fa fa-heart-o float-right" style="font-size:30px;"></i>
             
         <a href="<?=base_url()?>detail/shop_detail/<?=$rated_service->shop_id?>/<?=$rated_service->encrypt_id?>">
         <img src="<?=$main_image?>" class="card-img" style="height: 345px;object-fit:cover;"></a>
       </div>
       <div class="card-body">

        <div class="row">
           <h6 class="card-title col-md-8 mt-1"><b><?=$category?></b></h6>
        <button type="button" class="btn btn-success2 col-md-4">  <a href="<?=base_url()?>detail/shop_detail/<?=$rated_service->shop_id?>/<?=$rated_service->encrypt_id?>">  Book</button></a>
                </div>

          
 <p class="card-text"><small class="text-muted"><?=$rated_service->shop_name?></small></p>
          <div class="rating-stars">
             
            <?php for ($i=0; $i < 5; $i++) {   ?>
            <?php if($i < $rated_service->ratingRound){ ?>
              <span class="fa fa-star checked" id="star-<?php echo $i; ?>"></span>
            <?php }else{ ?>
              <span class="fa fa-star" id="star-<?php echo $i; ?>"></span>
            <?php } ?>
            <?php } ?>
          </div>
       
      </div>
    </div>
  <?php }?>
  </div>
 
</div>

</div>
</div>
</div>
</section>
<?php }?>


<!--  -->

<script type="text/javascript">
<?php
if(count($top_rated_service_list) <= 3){?>
  $('.nav_btn').hide();
<?php }else{?>
  $('.nav_btn').show();
<?php }?>

(function () {
var selector = '[data-rangeSlider]',
  elements = document.querySelectorAll(selector);
 var changeValBtn = document.querySelector('#timerange');

function valueOutput(element) {
  var value = element.value,
    output = element.parentNode.getElementsByTagName('output')[0];
    output.innerHTML = value;
}

for (var i = elements.length - 1; i >= 0; i--) {
  valueOutput(elements[i]);
}

Array.prototype.slice.call(document.querySelectorAll('input[type="range"]')).forEach(function (el) {
  el.addEventListener('input', function (e) {
    valueOutput(e.target);
  }, false);
});
// Basic rangeSlider initialization
rangeSlider.create(elements, {
  // Callback function
  onInit: function () {
  },

});
})();
</script>



