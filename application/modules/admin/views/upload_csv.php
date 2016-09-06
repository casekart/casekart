<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>Upload csv</title>
   <link href="<?php echo base_url();?>assets/admin/css/Dashboard.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/admin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/admin/css/custom.css" rel="stylesheet" />
</head>
<body>
 <section id="container" class="">
  <header class="header dark-bg">
    <div class="toggle-nav">
      <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>
    <a href="#" class="logo"><span class="lite">Welcome</span></a>
    <div class="nav search-row" id="top_menu">                
    </div>
    <div class="top-nav notification-row">                
      <ul class="nav pull-right top-menu">
        <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <span class="username">Welcome <?php echo $this->session->userdata('username');?>!</span>
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu extended logout">
            <div class="log-arrow-up"></div>
            <li>
              <a href="<?php base_url();?>logout"><i class="icon_key_alt"></i> Log Out</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </header>   
 <aside>
      <div id="sidebar"  class="nav-collapse ">
       <ul class="sidebar-menu">                

        <li class="sub-menu">
          <a href="<?php echo base_url();?>admin/customerorder" class="">
            <i class="icon_documents_alt"></i>
            <span>Order</span>
            <span class="arrow_carrot-right"></span>
          </a>
        </li>
        <li class="sub-menu">
          <a href="<?php echo base_url();?>admin/customerimage" class="">
            <i class="icon_documents_alt"></i>
            <span>Upload Designs</span>
            <span class=" arrow_carrot-right"></span>
          </a>
        </li>
        <li class="sub-menu">
          <a href="<?php echo base_url();?>admin/add_models" class="">
            <i class="icon_documents_alt"></i>
            <span>Add Mobiles</span>
            <span class=" arrow_carrot-right"></span>
          </a>
        </li>
        <li class="sub-menu">
          <a href="<?php echo base_url();?>admin/add_brands" class="">
            <i class="icon_documents_alt"></i>
            <span>Add Brands</span>
            <span class=" arrow_carrot-right"></span>
          </a>
        </li>
        <li class="sub-menu">
          <a href="<?php echo base_url();?>admin/ViewDesigns" class="">
            <i class="icon_documents_alt"></i>
            <span>View Designs</span>
            <span class=" arrow_carrot-right"></span>
          </a>
        </li> 
         <li class="sub-menu">
        <a href="<?php echo base_url();?>admin/upload_csv" class="">
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
    <h2>Upload csv</h2>
      <div class="form-group">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-xs-12 col-sm-12 col-md-8 col-md-offset-2 upload">
    <section class="panel">
       <header class="panel-heading">
              Select and Upload csv files
            </header>
      <div class="panel-body">
        <form role="form" action="upload_csv/upload_sampledata" method="post" enctype="multipart/form-data" name="form1" id="form1" > 
               <label>Choose your file</label>
          <div class="form-group">
         <input value="#images" type="file"   data-input="false" name="userfile" id="image" accept=".csv"multiple required>
          </div>
          <div class="form-group">    
            <button type="submit" name="submit" class="btn btn-info">Save</button>
          </div>
        </form>
      </div>
      </div>
      </div>
      </div>
      </div>
  <?php if($this->session->flashdata('message')){?>
  <div class="alert alert-success">      
    <?php echo $this->session->flashdata('message')?>
  </div>
<?php } ?>
    </section>
  </section>
</section>
<script src="<?php echo base_url();?>assets/admin/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/jquery-1.9.1.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
<script src="<?php echo base_url();?>assets/admin/js/scripts.js"></script>
</body>
</html>
