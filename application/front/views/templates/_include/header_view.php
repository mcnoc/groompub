<!DOCTYPE html>
<html>
  <head>
	   <title><?=$title?></title>
	   <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="icon" type="image/png" sizes="24x24" href="<?php echo base_url('front/images/fav.png');?>" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('front/lib/OwlCarousel/dist/assets/owl.carousel.min.css')?>">
    <!-- <link href="<?php echo base_url('front/css/owl.carousel.min.css');?>" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('front/lib/OwlCarousel/dist/assets/owl.theme.default.min.css')?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('front/newcss/style.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('front/newcss/search-extended.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('front/newcss/modals.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('front/newcss/daterangepickercss/wickedpicker.min.css');?>" >

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('front/newcss/custom_css.css');?>">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('front/newjs/smooth-scroll.min.js');?>"></script>
    <script src="<?php echo base_url('front/newjs/modernizr.mq.js');?>"></script>
    <script src="<?php echo base_url('front/newjs/account.js');?>"></script>


    <script type="text/javascript" src="<?php echo base_url('front/newjs/pradip-login.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('front/newjs/pre-login.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('front/newjs/search.js');?>"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="<?php echo base_url('front/newjs/wickedpicker.min.js');?>"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="<?php echo base_url('front/lib/OwlCarousel/dist/owl.carousel.min.js');?>"></script>






     <?php if (!empty($full_js_file) && is_array($full_js_file)){ ?>
     <?php foreach ($full_js_file as $value){?>
     <script src="<?php echo $value;?>" defer="defer"></script>
     <?php }?>
     <?php }?>
     <?php if (!empty($css_file) && is_array($css_file)){ ?>
     <?php foreach ($css_file as $row){?>
     <?php if($row == 'front/css/fullcalendar.print.min.css'){ $var = "media='print'"; }else{ $var = ""; } ?>
     <link rel="stylesheet" href="<?php echo site_url($row);?>" <?php echo $var; ?> />
     <?php }?>
     <?php }?>

  </head>
 <body>
  <input type="hidden" name="site_url" id="site_url" value="<?php echo base_url(); ?>">
  <div id="overlay"><div class="loader"></div></div>
  <div class="col-md-12" style="padding-left: 0px;padding-right: 0px;">
  	<!-- <div class="col-md-3" style="background-color: #299494">
  		<div class="logo">
  		<a href="<?php echo site_url();?>"><img src="<?php echo base_url('front/images2/logo.png');?>"></a></div>
  	</div> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top" id="main-navbar">
  <div class="container">
    <!-- <img class="img-fluid mb-3" src="font/images/logo.png" style="width: 150px;height: 50px;"> -->
     <img src="<?=base_url()?>front/images/logo.png" alt="" title="" class="img-fluid mb-3" style="width: 150px;height: 50px;" />
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"  aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>

        </button>

        
