<?php
session_start();
//$conn = mysqli_connect('localhost', 'root', '', 'Wolrectechnologies');
$conn=mysqli_connect('localhost','root','','wolrec');
$msg = '';
$mess1 = '';
//Getting Input value
if (isset($_POST['login'])) {
	$email = strip_tags(trim(mysqli_real_escape_string($conn, $_POST['email'])));
	$password = strip_tags(trim(mysqli_real_escape_string($conn, md5($_POST['password']))));
	if (empty($email) && empty($password)) {
	} else {
		//Checking Login Detail
		$result = mysqli_query($conn, "SELECT * FROM user_details WHERE email='$email' AND password='$password'");
		$row = mysqli_fetch_assoc($result);
		$count = mysqli_num_rows($result);
		if ($count == 1) {
			$_SESSION['user'] = array(
				'user_id' => $row['user_id'],
				'username' => $row['email'],
				'password' => $row['password'],
				'role' => $row['role']
			);

			$role = $_SESSION['user']['role'];

			//Redirecting User Based on Role
			switch ($role) {
				case 'user':
					$_SESSION['user']['user_id'];
					$_SESSION['user']['role'];
					header('location:user/index.php');
					break;
				case 'pilot':
					$_SESSION['user']['user_id'];
					$_SESSION['user']['role'];
					header('location:../pilot/index.php');
					break;
				case '':
					header('location:');
					break;
				case 'admin':
					$_SESSION['user']['user_id'];
					$_SESSION['user']['role'];
					header('location:home.php');
					break;
			}
		} else {

			$msg = "<div sytle='color:red;' class='alert alert-danger' role='alert'>
 login failed, Wrong Username/Password!
</div>";
		}
	}
}
?>


</html>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Wolrec - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginasset/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginasset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginasset/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginasset/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginasset/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginasset/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginasset/css/main.css">
	<!--===============================================================================================-->
	
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="loginasset/images/WOLREC LOGO_PNG.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="index.php">
					<?php echo $mess1 ?>
					<?php echo $msg; ?>
					<span class="login100-form-title">
						Admin Login
					</span>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
							Login
						</button>
					</div>

					<!-- <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>


	<!--===============================================================================================-->
	<script src="loginasset/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="loginasset/vendor/bootstrap/js/popper.js"></script>
	<script src="loginasset/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="loginasset/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="loginasset/vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="loginasset/js/main.js"></script>

</body>

</html>