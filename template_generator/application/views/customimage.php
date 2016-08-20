<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Upload Images</title>
  <link href="<?php echo base_url();?>css/Dashboard.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>css/custom.css" rel="stylesheet" />
  <title>Add Brands</title>
</head>

<body>
  <script type="text/javascript">
  function noBack()
  {
   window.history.forward()
 }
 noBack();
 window.onload = noBack;
 window.onpageshow = function(evt) { if (evt.persisted) noBack() }
 window.onunload = function() { void (0) }
 window.preventDefault;
 </script>
 <section id="container" class="">


  <header class="header dark-bg">
    <div class="toggle-nav">
      <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>

    <!--logo start-->
    <a href="#" class="logo"><span class="lite">Welcome</span></a>
    <!--logo end-->

    <div class="nav search-row" id="top_menu">
    </div>
    <div class="top-nav notification-row">                
      <!-- notificatoin dropdown start-->
      <ul class="nav pull-right top-menu">
        <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <span class="profile-ava">
              <img alt="" src="img/avatar1_small.jpg">
            </span>
            <span class="username">Welcome <?php echo $this->session->userdata('fullname');?>!</span>
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu extended logout">
            <div class="log-arrow-up"></div>
            <li>
              <a href="logout"><i class="icon_key_alt"></i> Log Out</a>
            </li>
          </ul>
        </li>
        <!-- user login dropdown end -->
      </ul>
      <!-- notificatoin dropdown end-->
    </div>
  </header>      
  <aside>
    <div id="sidebar"  class="nav-collapse ">
     <ul class="sidebar-menu">                

      <li class="sub-menu">
        <a href="<?php echo site_url("customerorder");?>" class="">
          <i class="icon_documents_alt"></i>
          <span>Order</span>
          <span class="arrow_carrot-right"></span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="<?php echo site_url("customerimage");?>" class="">
          <i class="icon_documents_alt"></i>
          <span>Upload Designs</span>
          <span class=" arrow_carrot-right"></span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="<?php echo site_url("add_models");?>" class="">
          <i class="icon_documents_alt"></i>
          <span>Add Mobiles</span>
          <span class=" arrow_carrot-right"></span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="<?php echo site_url("add_brands");?>" class="">
          <i class="icon_documents_alt"></i>
          <span>Add Brands</span>
          <span class=" arrow_carrot-right"></span>
        </a>
      </li> 
      <li class="sub-menu">
        <a href="<?php echo site_url("ViewDesigns");?>" class="">
          <i class="icon_documents_alt"></i>
          <span>View Designs</span>
          <span class=" arrow_carrot-right"></span>
        </a>
      </li> 
       <li class="sub-menu">
        <a href="<?php echo site_url("upload_csv");?>" class="">
          <i class="icon_documents_alt"></i>
          <span>Upload csv</span>
          <span class=" arrow_carrot-right"></span>
        </a>
      </li> 
    </ul>
  </div>
</aside>
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <h2>Upload Images</h2>
      <div class="form-group">
      <form method="post" class="form"/>
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-xs-12 col-sm-12 col-md-8 col-md-offset-2 upload">
          <section class="panel">
            <header class="panel-heading">
              Select and Upload Images
            </header>
            <div class="panel-body">
              <form role="form">
                <div class="form-group">
                  <label>Enter Catogery Name</label>
                  <input type="text" name="catagory" class="form-control" placeholder="Enter Catogery" required/>
                </div>
                <div class="form-group">
                  <label>Enter Price</label>
                  <input class="form-control" name="price" placeholder="price">
                </div>
                <div class="form-group">
                  <input type="hidden" name="form_submit" value="1">
                  <label >File input</label>
                  <span id='val' style ="display:none"></span>
                  <input value="#images" type="file"   data-input="false" name="images[]" id="image" multiple>
                </div>
                <button type="submit" value="Upload" name="upload1"class="btn btn-primary">Submit</button>
              </form>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
</section>
<!-- container section end -->
<!-- javascripts --> 
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/ajaxupload.js"></script>
<script src="<?php echo base_url();?>js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/scripts.js"></script>
<script>
$(document).ready(function (e) {
 $('.form').on('submit',function(e) {
   e.preventDefault();
   $.ajax({
    url: "imageupload/do_upload",        
    type: "POST",             
    data: new FormData(this), 
    contentType: false,       
    cache: false,            
    processData:false,        
    dataType: 'JSON',
    success: function(data) {
      $.each(data.image_list,function(key,rows){
        $.each(rows,function(index,value){
          $('#images').append(  
            '<div class="image_'+value.id+'">'+
            '<input type="checkbox" name="checkbox" value="'+value.id+'" id="checkbox" style="display:none"/> </div>'+
            '<input type="checkbox" name="img" value="'+value.image_name+'" id="iname" style="display:none"/>'+
            '<img src="../assets/img/gallery/'+value.image_name+'">'+
            '</div>'
            );
        });
      });
      if (data.error) {alert(data.error);};
    }
  });
 });
 return false;
}); 


</script>
</body>
</html>
