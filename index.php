   
<?php require_once('db.php');

if(isset($mysqli,$_POST['submit'])){
    $email = mysqli_real_escape_string($mysqli,$_POST['email']);
    $password = mysqli_real_escape_string($mysqli,$_POST['password']);
    $password=md5($password);
    $query1=mysqli_query($mysqli,"SELECT nombre,email,password,nivel,type FROM usuarios
	 WHERE email='$email' AND password='$password'");
	$row=mysqli_fetch_array($query1);
    
	{
        $db_name=$row["nombre"];
		$db_email=$row["email"];
		$db_password=$row["password"];
        $db_per=$row["nivel"];
        $db_type=$row["type"];
		
		if($email==$db_email && $password==$db_password){
			session_start();
            $_SESSION["nombre"]=$db_name;
			$_SESSION["email"]=$db_name;
            $_SESSION["nivel"]=$db_per;
            $_SESSION["type"]=$db_type;
            
			
			if($_SESSION["type"]=='user'){
               
				header("Location:admin/dashboard.php");
			}
		}
		else{
			?>
	<script type="text/javascript">
	alert("Usuario o Contraseña incorrecta, verifica tus datos.");
	window.location.href='index.php';
	</script>';
<?php
		}
	
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>TEST RM | LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
	
	
	<div class="container-login100" style="background-image: url('images/sam.gif');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" method="post" action="index.php">
			<img src="includes/images/logo-reina-madre.jpg" class="img-thumbnail">
				<br><br>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Ingresa tu email ">
					<input class="input100" type="text" name="email" placeholder="Ingresa tu email ">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Ingresa Contraseña">
					<input class="input100" type="password" name="password" placeholder="Contraseña">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit" name="submit">
						Iniciar Sesión
					</button>
				</div>
				<br>
				
						<a href="admin/forgotPass.php">
							<label class="login70-form-title p-b-12">
								<b>Restablecer contraseña</b>
							</label>
						</a>
					</div>
				</div>
			</form>
			
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
