<?php
$this->load->view('templates/_include/admin_main_sidebar_view');
?>
<style media="screen">
.cls-view-1{
    padding: 9px 18px 9px 14px !important;
}
.btn-add-user{
  padding: 6px 12px;
  font-size: 14px;
  margin-bottom: 10px;
  text-align: center;
  border-radius: 4px;
}
@media only screen and (max-width:480px){
  .cls-view-1{
      padding: 9px 18px 9px 25px !important;
  }
  .x_content{
    overflow: auto;
  }
}
</style>
<div class="right_col" role="main" style="min-height: 3787px;">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>User List</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>View Users</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <?php if ($this->session->flashdata('error_message')) { ?>
            <div class="alert alert-danger alert-dismissable">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
              <?php echo $this->session->flashdata('error_message'); ?> </div>
          <?php }?>
          <?php if ($this->session->flashdata('success_message')) { ?>
            <div class="alert alert-success alert-dismissable">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
              <?php echo $this->session->flashdata('success_message'); ?> </div>
          <?php }?>
          <div class="x_content">
            <div class="res"></div>
            <?php if($admin_data[0]['user_promotion'] != 1){
              if(!empty($user_access_data)){
                if($user_access_data[0]['u_add'] == 1){?>
                  <div class="col-md-12"><a class="btn-success col-md-3 pull-right btn-add-user" href="<?php echo site_url('User/add_user') ?>">Add User</a></div>
            <?php }}}else{?>
                      <div class="col-md-12"><a class="btn-success col-md-3 pull-right btn-add-user" href="<?php echo site_url('User/add_user') ?>">Add User</a></div>
            <?php }?>
              <table id="item-list" class="table table-striped table-bordered">
                <thead>
                  <tr>
                       <th>UserID</th>
                        <th>Client Date</th>
                         <th>Pro Date</th>
                      
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>User Type</th>
                    <th>Shop Owner</th>
                    <th>Shop Manager</th>
                    <th>Action</th>
                 </tr>
               </thead>
              <tbody>
                <?php foreach ($user_list as $key => $value) {
                  if($value->u_category == '1'){
                      $category = 'Client';
                  }
                  else if($value->u_category == '2'){
                    $category = 'Professional';
                  }
                  else if($value->u_category == '3'){
                    $category = 'Worker';
                  }else{
                      $category = '';
                  }
                  $date = date("d-m-Y", strtotime($value->date));?>
                  <tr id="row_<?=$value->id?>">
                       <td><?=$value->id?></td>
                       <td><?=$date?></td>
                       <td></td>
                  <td><?=$value->firstname?></td>
                  <td><?=$value->lastname?></td>
                  <td><?=$value->username?></td>
                  <td><?=$value->email?></td>
                  <td><?=$category?></td>
                  <td></td>
                  <td></td>
                  <td>
                    <?php if($admin_data[0]['user_promotion'] != 1){?>
                    <?php if(!empty($user_access_data)){
                      if($user_access_data[0]['u_delete'] == 1){?>
                        <button type="button" name="button" class="cls-btn-active-class btn_active<?=$value->id?> btn cls_btn <?php if($value->is_active == 0){ echo 'price-filter-active';}?>"  data-shop-id="<?=$value->id?>" style="<?php if($value->is_active == 1){ echo "background:green";}else{ echo "background:red";}?>;color:white;padding:5px 10px 5px 10px !important;width:70px;" ><?php if($value->is_active == 0){ echo 'Inactive';}else{ echo 'Active';}?></button>
                    <?php }
                      if($user_access_data[0]['u_edit'] == 1){?>
                        <button type="button" name="button" class="cls-btn-active-class btn cls_edit_btn"  data-encrypt-id="<?=$value->encrypt_id?>" style="padding:5px 10px 5px 10px !important;width:70px;background: #40E0D0;border-radius:3px;border:none;color:white;" >Edit</button>
                    <?php }
                      if($user_access_data[0]['u_delete'] == 1){?>
                        <button type="button" name="button" class="cls-btn-active-class btn cls_delete_btn"  data-user-id="<?=$value->id?>" style="padding:5px 10px 5px 10px !important;width:70px;background: #e31b23;border-radius:3px;border:none;color:white;" >Delete</button>
                   <?php }}}else{?>
                          <button type="button" name="button" class="cls-btn-active-class btn_active<?=$value->id?> btn cls_btn <?php if($value->is_active == 0){ echo 'price-filter-active';}?>"  data-shop-id="<?=$value->id?>" style="<?php if($value->is_active == 1){ echo "background:green";}else{ echo "background:red";}?>;color:white;padding:5px 10px 5px 10px !important;width:70px;" ><?php if($value->is_active == 0){ echo 'Inactive';}else{ echo 'Active';}?></button>
                          <button type="button" name="button" class="cls-btn-active-class btn cls_edit_btn"  data-encrypt-id="<?=$value->encrypt_id?>" style="padding:5px 10px 5px 10px !important;width:70px;background: #40E0D0;border-radius:3px;border:none;color:white;" >Edit</button>
                          <button type="button" name="button" class="cls-btn-active-class btn cls_delete_btn"  data-user-id="<?=$value->id?>" style="padding:5px 10px 5px 10px !important;width:70px;background: #e31b23;border-radius:3px;border:none;color:white;" >Delete</button>
                   <?php }?>
                   </td>
                  </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script type="text/javascript">
  var site_url = $("#site_url").val();
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#item-list').DataTable({
    "order": [],
     "pageLength": 100,
   "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
   
    dom: 'Bfrtip',
    
    buttons: [
        'pageLength',
            
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 0, 1]
                }
            },
            {
                extend: 'csvHtml5',
                exportOptions: {
                    columns: [ 0, 1]
                }
            },
            
        ]
        
        // buttons: [
        //      'pageLength',
        //     //'copyHtml5',
        //     'excelHtml5',
        //     'csvHtml5',
        //   // 'pdfHtml5'
           
        // ]
    
});


$(document).on('click', ".cls_edit_btn", function (e) {
  var service_id = $(this).attr('data-encrypt-id');
  window.location.href = site_url + "user/edit_user/" + service_id;
});

$(document).on('click', ".cls_delete_btn", function (e) {
    var user_id = $(this).attr('data-user-id');
    swal({
      title: "Are you sure?",
      text: "You want to delete this user",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete",
      cancelButtonText: "No, cancel",
      closeOnConfirm: true,
      closeOnCancel: true
    },
    function(isConfirm) {
      if (isConfirm) {
        $.ajax({
            url: site_url + 'user/remove_user',
            method: "POST",
            data: {id: user_id},
            async: false,
            success: function (data) {
                var obj = JSON.parse(data);
                if (obj.success == 'success') {
                    $('#row_' + obj.id).remove();
                    $('.res').html('<div class="alert alert-success alert-dismissable"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>User deleted successfully.</div>');
                }
                else if (obj.unsuccess == 'unsuccess') {
                    $('.res').html('<div class="alert alert-danger alert-dismissable"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>unsuccessfully!</div>');

                } else {
                    $('.res').html('<div class="alert alert-danger alert-dismissable"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Something went wrong!</div>');
                }
            }
        });
      }
    });

});

    $(document).on('click', ".cls_btn", function (e) {

      if ($(this).hasClass("price-filter-active")) {
        var shop_id = $(this).attr('data-shop-id');
        $(this).removeClass("price-filter-active");

        swal({
          title: "Are you sure?",
          text: "You want to activate this user",
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: "btn-success",
          confirmButtonText: "Yes, activate",
          cancelButtonText: "No, cancel",
          closeOnConfirm: true,
          closeOnCancel: true
        },
        function(isConfirm) {
          if (isConfirm) {
            $.ajax({
                url: site_url + 'user/active_user_id',
                method: "POST",
                data: {id: shop_id},
                async: false,
                success: function (data) {
                    var obj = JSON.parse(data);
                    if (obj.success == 'success') {
                      $(".btn_active"+ obj.id).css("background-color", "green");
                      $(".btn_active"+ obj.id).html('Active');
                        $('.res').html('<div class="alert alert-success alert-dismissable"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>User active successfully!</div>');
                    }
                    else if (obj.unsuccess == 'unsuccess') {
                        $('.res').html('<div class="alert alert-danger alert-dismissable"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>unsuccessfully!</div>');

                    } else {
                        $('.res').html('<div class="alert alert-danger alert-dismissable"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Something went wrong!</div>');
                    }
                }
            });
          } else {
          }
        });
      } else {
        var shop_id = $(this).attr('data-shop-id');
        $(this).addClass("price-filter-active");

        swal({
          title: "Are you sure?",
          text: "You want to inactive this user",
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Yes, inactive",
          cancelButtonText: "No, cancel",
          closeOnConfirm: true,
          closeOnCancel: true
        },
        function(isConfirm) {
          if (isConfirm) {
            $.ajax({
                url: site_url + 'user/inactive_user_id',
                method: "POST",
                data: {id: shop_id},
                async: false,
                success: function (data) {
                    var obj = JSON.parse(data);
                    if (obj.success == 'success') {
                      $(".btn_active"+ obj.id).css("background-color", "red");
                      $(".btn_active"+ obj.id).html('Inactive');
                        $('#row_' + obj.id).remove();
                        $('.res').html('<div class="alert alert-success alert-dismissable"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>User was set to inactive.</div>');
                    }
                    else if (obj.unsuccess == 'unsuccess') {
                        $('.res').html('<div class="alert alert-danger alert-dismissable"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>unsuccessfully!</div>');

                    } else {
                        $('.res').html('<div class="alert alert-danger alert-dismissable"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Something went wrong!</div>');
                    }
                }
            });
          } else {
          }
        });
      }
    });
});
</script>
<style type="text/css">
  .dataTables_paginate{
    cursor: pointer;
  }
</style>
