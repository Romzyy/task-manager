<?php
require 'authentication.php'; // admin authentication check 

// auth check
if(isset($_SESSION['admin_id'])){
  $user_id = $_SESSION['admin_id'];
  $user_name = $_SESSION['admin_name'];
  $security_key = $_SESSION['security_key'];
  if ($user_id != NULL && $security_key != NULL) {
    header('Location: task-info.php');
  }
}
if(isset($_POST['login_btn'])){
 $info = $obj_admin->admin_login_check($_POST);
}

$page_name="Login";
include("include/login_header.php");

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="ad-auth-wrapper">

		<div class="well col-md-6" style="position:relative;">
			<div class="row" style="
">
				<div class="col-md-6">
					<img src="assets/img/QLogo.png" width="90%" style="margin-top: 45px;">
					
			</div>
	<div class="col-md-6">
			<form class="row " action="" method="POST">
			  <div class="form-heading">
			
			    <h2 class="text-left"></h2>
			    <p class="text-left"></p>
			  </div>
			  
			
			  <div class="input-group form-group ">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input  type="text" class="form-control" name="username" placeholder="Username">
  </div>
			
			  <div class="input-group form-group" ng-class="{'has-error': loginForm.password.$invalid && loginForm.password.$dirty, 'has-success': loginForm.password.$valid}">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input  type="password" class="form-control" name="admin_password" placeholder="Password">
  </div>
			
			  <?php if(isset($info)){ ?>
			  <h5 class="alert-own alert-danger-own"><?php echo $info; ?></h5>
			  <?php } ?>
			  <div class="text-left">
			  <button type="submit" name="login_btn" class="btn btn-primary ">Login</button>
			</div>
			</form>
		</div>
		</div>
		</div>
	</div>

<?php


include("include/footer.php");
?>
