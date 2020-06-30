<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url();?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url();?>/assets/css/custom.css">
<!--	--><?php //
//		echo base_url('assets/css/bootstrap.min.css');
//		echo base_url('assets/css/custom.css');
//	?>
	<title>Login Account</title>
	
	<style>
	    .login-btn{
			background: #4365c5d1;
			border-radius: 4px;
			font-size: 16px;
			padding: 4px;
			width: 100%;
			color: #fff;
			font-weight: bold;
			border: #30751e 1px solid;
			box-shadow: 0px 3px 9px #7b7b7bed;
	    }
	    .login-btn:hover{
			background: #4365c5d1;
	    }
	    .con{
	        margin-top: 35% !important;
	    }
		.forgetpassword{
			float: right;
			margin-top: -12px;
			margin-bottom: 8px;
			color: blue;
			text-decoration: none;
			font-weight: 500;
			font-size: 14px;
		}
		.forgetpassword:hover{
			text-decoration: none;
			color: blue;
		}
	</style>
</head>
<body>
<div class="container"> 

  <form id="contact" class="con" action="validate" method="post">
      <div class="row">
        <div class="col-md-12 text-center">
            <div class="div-img" style="
">
            	<img src="<?=base_url()?>assets/images/bigfish.png" style="width: 35%;">
            </div>
        </div>
    </div>
    <h3 style="    text-align: center;
    font-size: 23px;
    font-weight: bold;
    text-shadow: 3px 3px 5px #c1c3c1;">LOGIN PANEL</h3>
	  <div>
		  <?php
		   if($this->session->flashdata('InvalidEmailPassword')){?>
                      <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">×</span>
                          </button>
                          Login First
                      </div>

                  <?php }
                  if($this->session->flashdata('logout_msg')){
                    echo $this->session->flashdata('logout_msg');
                  }
                  if($this->session->flashdata('login_error')){
                    echo $this->session->flashdata('login_error');
                  }
                  ?>
	  </div>
    <fieldset>
      <input placeholder="Username or Email" name="eamil_id" type="text" tabindex="1" required autofill="off">
    </fieldset>
    <fieldset>
      <input placeholder="Password" name="password" type="password" tabindex="3" required autofill="off">
    </fieldset>
	  <a href="#" class="forgetpassword">Forget Password</a>
    <fieldset>
        <span style="position: relative;"><i style="  position: absolute;
    right: 38%;
    top: -3px;
    color: #fff;
    font-size: 17px;" class="fa fa-sign-in" aria-hidden="true"></i><input name="submit" type="submit" id="contact-submit" class="login-btn" data-submit="...Sending" value="Login"></span>
      
    </fieldset>
  </form>
</div>
</body>
<script type="text/javascript" src="<?=base_url();?>/assets/js/jquery.js"></script>
<script type="text/javascript" src="<?=base_url();?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>/assets/js/custom.js"></script>

</html>
