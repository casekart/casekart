<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url();?>css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url();?>css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <!-- <body class="login-img3-body"> -->

    <div class="container">
      <div class="alert alert-danger" style="display:none;">
        <strong>Please contact admin</strong>
      </div> 
      <form class="login-form" action="index.html">        
        <div class="login-wrap" style="margin-top: -25%;">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <h3 style="margin-left:41px;">Casekart Admin panel</h3>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="username" id="username" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" id="login" type="submit">Login</button>
      </div>
      </form>
  </div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
jQuery('#login').on('click',function(){
       var formdata = 
    {
        username: jQuery('#username').val(),
        password: jQuery('#password').val(),
    };
    jQuery.ajax({
      url: "<?php echo base_url();?>admindashboard/login",
      dataType: 'json',
      type: 'POST',
      data: formdata,    
      success: function(login){
        // alert(login);
        if(login.status === true){
          var url = login.redirect;
          document.location.href = url.replace(/\\/g, '');
        }
        else if(login === "Contact admin"){
          $('.alert-danger').css('display','block');           
        }
      }
    });
    return false;
  });
</script>