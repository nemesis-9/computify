<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>

	<!-- Linking Stylesheet -->
	<link rel="stylesheet" href="<?= base_url('css/login.css') ?>">

</head>

<body>

	<form action="login.php" method="post">

		<div class="box">

			<div class="container">

				<div class="top-header">
					<h1>Welcome</h1>
				</div>

				<div class="input-field">
					<input type="email" placeholder="Email" required>
				</div>

				<div class="input-field">
					<input type="password" placeholder="Password" required>
				</div>

				<div class="input-btn">
					<input type="submit" value="Login">
				</div>

				<div class="remem-forg">
					<div class="remember-sect">
						<input type="checkbox" name="check" id="check">
						<label for="check">Remember me</label>
					</div>
					<div class="forgot-sect">
						<a href="#">Forgot Password?</a>
					</div>
				</div>

				<div class="register">
					<p class="reg-text">Don't have an Account?</p>
					<a href="#">Register</a>
				</div>

			</div>
		</div>
	</form>

</body>

</html>