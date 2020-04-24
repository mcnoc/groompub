<?php $this->load->view('templates/_include/admin_main_sidebar_view'); ?>  
<div class="right_col" role="main" style="min-height: 959px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Change Password</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <!-- <div class="x_title">
                        <h2>Change Password </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div> -->
                    <?php if ($this->session->flashdata('error_message')) { ?>
                        <div class="alert alert-danger alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <?php echo $this->session->flashdata('error_message'); ?> </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('success_message')) { ?>
                        <div class="alert alert-success alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <?php echo $this->session->flashdata('success_message'); ?> </div>
                    <?php } ?>
                    <div class="x_content">
                        <form enctype="multipart/form-data" method="post" class="form-horizontal" id="frm_changepassword" name="frm_changepassword" data-toggle="validator" action="<?php echo site_url("Dashboard/change_password"); ?>">
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="n_password">New Password
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="n_password" class="form-control col-md-7 col-xs-12" name="n_password"  placeholder="New Password" required="required" minlength="8" passwordCheck="passwordCheck"  type="password">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="C_password">Confirm password
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="c_password" class="form-control col-md-7 col-xs-12" name="c_password"  placeholder="Confirm password"  type="password">
                                </div>
                            </div>
                            
                            
                            
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <a href="<?php echo base_url(); ?>" class="btn btn-primary" value="Cancel">Cancel</a>
                                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
