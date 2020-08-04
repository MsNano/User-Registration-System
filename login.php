<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h2>LOGIN FORM: </h2>

	<div class="container">
		
		<form action="login.php" method="post">
			<?php include('errors.php'); ?>
			
			<label for="uname">Username: </label>
			<input type="text" name="username" required>
			<br />

			<label for="password">Password: </label>
			<input type="password" name="password_1" required>
			<br />

			<button type="submit" name="login_user">Submit</button>
			<br />

		</form>

		<p>New user? <a href="registration.php">Register here!</a></p>

	</div>

	</form>

</body>
</html>