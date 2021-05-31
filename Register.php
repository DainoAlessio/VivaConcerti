<!DOCTYPE html>
<?php include "config.php"; ?>
<html lang="en">
<head>
	<title>Login VivaConcerti</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<script>
	if("<?php echo $_SESSION['errore']; ?>"=="errore"){
		alert("username già preso");
	}
    <?php if(isset($_SESSION['errore']))
				 $_SESSION['errore']="ok"; ?>
	</script>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" method="POST" action="MainR.php">
					<span class="login100-form-title p-b-43">
						Account register
					</span>

					<div class="wrap-input100 rs1 validate-input" data-validate = "Campo obbligatorio">
						<input class="input100" type="text" id="txt_uname" name="txt_uname" placeholder="Username">
						<span class="label-input100">Username</span>
					</div>


					<div class="wrap-input100 rs2 validate-input" data-validate="Campo obbligatorio">
						<input class="input100" type="password" id="txt_uname" name="txt_pwd" placeholder="Password">
						<span class="label-input100">Password</span>
					</div>
					<div class="wrap-input100 rs1 validate-input" data-validate = "Campo obbligatorio">
						<input class="input100" type="text" id="txt_nome" name="txt_nome" placeholder="Nome">
						<span class="label-input100">Nome</span>
					</div>
					<div class="wrap-input100 rs2 validate-input" data-validate="Campo obbligatorio">
						<input class="input100" type="email" id="txt_uname" name="txt_email" placeholder="Email">
						<span class="label-input100">Email</span>
					</div>


					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn"  name="but_submitR" id="but_submitR"  >

						</button>
					</div>
 </form>
 <div class="text-center w-full p-t-23">
	 <a href="index.php" class="txt1">
		 torna alla home
	 </a>
 </div>

				</form>
			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
