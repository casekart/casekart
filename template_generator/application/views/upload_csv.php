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
  <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/bootstrap-theme.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/style-responsive.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>css/Dashboard.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>css/style-responsive.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>css/custom.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url();?>css/sweetalert.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/example.css">
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
      </ul>
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
    <h2>Upload csv</h2>
      <div class="form-group">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-xs-12 col-sm-12 col-md-8 col-md-offset-2 upload">
    <section class="panel">
       <header class="panel-heading">
              Select and Upload csv files
            </header>
      <div class="panel-body">
        <form role="form" action="upload_csv/upload_sampledata" method="post" enctype="multipart/form-data" name="form1" id="form1"> 
               <label>Choose your file</label>
          <div class="form-group">
         <!--  <input type="file" value="#images" class="form-control" name="userfile" id="image"  align="center"/> -->
         <input value="#images" type="file"   data-input="false" name="userfile" id="image" multiple>
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
    </section>
  </section>
</section>
</body>
</html>
