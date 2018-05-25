<?php
	session_start();
	include '../imp/call.php';
	if(checkAdminLogin())
		{
    		redirect('adindex.php');
		}

	 if(isset($_POST['loginbtn']))
	{
	    $adminInfo = loginCheck($conn,$_POST);
	    $_SESSION['admin']['id'] = $adminInfo['id'];
        $_SESSION['admin']['name'] = $adminInfo['admin_name'];
        redirect('adindex.php');
    } ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="..layout/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../layout/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../layout/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../layout/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../layout/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../layout/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../layout/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../layout/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../layout/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../layout/styles/util.css">
	<link rel="stylesheet" type="text/css" href="../layout/styles/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" name="lgfrm" method="POST" id="login">
					<span class="login100-form-title p-b-32">
						Admin Login Panel
					</span>
					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="admin_name" id="admin_name" required/>
							<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="admin_password"  id="admin_password" required/>
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="loginbtn" type="submit">
							Login
						</button>
					</div>
					<span><?php showMsg();?></span>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../layout/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../layout/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../layout/vendor/bootstrap/js/popper.js"></script>
	<script src="../layout/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../layout/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../layout/vendor/daterangepicker/moment.min.js"></script>
	<script src="../layout/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../layout/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../layout/scripts/main.js"></script>

</body>
</html>

