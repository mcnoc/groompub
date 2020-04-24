<div class="s013 w-100">
  <form>
    <div class="inner-form">
      <div class="left">
        <div class="input-wrap first">
          <div class="input-field first">
           <div class="input-group">
           <div class="input-group-prepend">
             <span class="input-group-text" id=""><b>Find</b></span>
           </div>
             <input type="text" class="form-control search-slt" id="search_text" placeholder="Barbers,Spa....">
          </div> 
                            
          </div>


        </div>


        <div class="input-wrap second">
          <div class="input-field second">
            <div class="input-group">
           <div class="input-group-prepend">
             <span class="input-group-text" id=""><b>Near</b></span>

           </div>
             <input type="text" class="form-control" id="search_text" placeholder="City,Zip....">
          </div>  

            </div>
          </div>
        </div>
          <button class="btn-search" type="button">SEARCH</button>
      </div>
 <div style="width:43.5%; margin-bottom: -30%; background-color: white;" id="result"></div>
  </form>
</div>

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

