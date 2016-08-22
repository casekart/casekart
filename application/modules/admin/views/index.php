<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Order</title>

   <link href="<?php echo base_url();?>assets/admin/css/elegant-icons-style.css" rel="stylesheet" />

  <link href="<?php echo base_url();?>assets/admin/css/font-awesome.min.css" rel="stylesheet" />

  <link href="<?php echo base_url();?>assets/admin/css/jquery.dataTables.min.css" rel="stylesheet" />

  <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet">

  <link href="<?php echo base_url();?>assets/admin/css/Dashboard.css" rel="stylesheet" />

  <link href="<?php echo base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet" />

 <link href="<?php echo base_url();?>assets/admin/css/custom.css" rel="stylesheet" />
  </head>

  <body>
    <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="#" class="logo"><span class="lite">Welcome</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username"></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li>
                                <a href="<?php base_url();?>logout"><i class="icon_key_alt"></i> Log Out</a>
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
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      <!--     <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-bars"></i>Pages</li>
                        <li><i class="fa fa-square-o"></i>Pages</li>
                    </ol>
                </div>
            </div> -->
              <!-- page start-->
              <h2>Orders</h2>
              <!-- page end-->
               <div class="panel-body">
    <table  class = "table table-hover" id="mytable">
    <thead>
     <tr>
      <th>Customer id</th>
      <th>Invoice No</th>
      <th>Address</th>
      <th>Order Details</th>
      <th>Eamil id</th>
      <th>Order date</th>
    </tr>
  </thead>
 </table>
                          </div>
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
<script src="<?php echo base_url();?>assets/admin/js/jquery-1.9.1.assets/admin/js"></script>
<script type="text/javascript" src="/template_generator/assets/admin/js/custom-order.assets/admin/js"></script>
<script type="text/javascript" src="/template_generator/assets/admin/js/jquery.dataTables.assets/admin/js"></script>
<script type="text/javascript" src="/template_generator/assets/admin/js/jquery.dataTables.min.assets/admin/js"></script>
<script type="text/javascript" src="/template_generator/assets/admin/js/bootstrap.min.assets/admin/js"></script>
<script src="/template_generator/assets/admin/js/jquery.scrollTo.min.assets/admin/js"></script>
<script src="/template_generator/assets/admin/js/jquery.nicescroll.assets/admin/js" type="text/javascript"></script>
<script src="/template_generator/assets/admin/js/scripts.assets/admin/js"></script>
