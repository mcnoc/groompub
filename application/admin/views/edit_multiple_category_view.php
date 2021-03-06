<?php $this->load->view('templates/_include/admin_main_sidebar_view'); ?>

<div class="right_col" role="main" style="min-height: 959px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Categories</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit Parent Category</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <?php if ($this->session->flashdata('error_message')) { ?>
                        <div class="alert alert-danger alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <?php echo $this->session->flashdata('error_message'); ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('success_message')) { ?>
                        <div class="alert alert-success alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <?php echo $this->session->flashdata('success_message'); ?>
                        </div>
                    <?php } ?>
                    <div class="x_content">
                        <form enctype="multipart/form-data" method="post" class="form-horizontal" id="add_category" name="add_category" data-toggle="validator" action="<?php echo site_url("category/update_mutiple_category"); ?>">
                            <div class="col-md-8 col-xs-12">
                                <?php foreach ($category_list as $index => $category) {
                                    // echo '<pre>';print_r($category);
                                ?>
                                    <div class="item form-group">
                                        <div class="col-xs-3 text-right">
                                            <label class="control-label1 col-xs-12" for="product" style="margin-top: 8px;">Category <?= $index ?> : </label>
                                        </div>
                                        <div class="col-xs-9">
                                            <input id="category_name" class="form-control col-md-7 col-xs-12" name="category_name[]" type="text" value="<?=$category->cat_name?>">
                                            <input type="hidden" name="category_id[]" value="<?=$category->category_id?>">
                                        </div>
                                    </div>
                                    <hr>
                                <?php } ?>
                                <input type="hidden" name="cat_ids" value="<?= $cat_ids ?>">
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3" id="eventsExample">
                                    <input type="button" onclick="location.href = '<?php echo base_url(); ?>category'" class="btn btn-primary" value="Cancel">
                                    <button id="send" type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  var site_url = $("#site_url").val();
</script>

<script type="text/javascript">
    // $(document).on('click', '#send', function(){

    // })

// $('#parent_category').change(function() {
//   var parent_category = $('#parent_category').val();
//   $.ajax({
//       type: 'POST',
//       url: site_url+'category/get_parent_category',
//       data:'parent_category='+parent_category,
//       success: function (data) {
//         var data1 = JSON.parse(data);
//         // console.log(data1);
//         var html =  "<option value=''>select</option>";
//         for (var i = 0; i < data1.length; i++) {
//           html += '<option value='+data1[i].category_id+'>'+data1[i].cat_name+'</option>';
//         }
//         $('#sub_category').html(html);
//       }
//   });
// });
</script>
