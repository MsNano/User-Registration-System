<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<h2>REGISTER HERE: </h2>

	<div class="container">

		<form action="registration.php" method="post">
			<?php include('errors.php'); ?>
			
			<label for="uname">Username: </label>
			<input type="text" name="username" required>
			<br />

			<label for="email">Email: </label>
			<input type="email" name="email" required>
			<br />

			<label for="password">Password: </label>
			<input type="password" name="password_1" required>
			<br />

			<label for="password">Confirm Password: </label>
			<input type="password" name="password_2" required>
			<br />

			<button type="submit" name="reg_user">Submit</button>
			<br />

		</form>

		<p>Already a user? <a href="login.php">Login here!</a></p>

	</div>

	</form>

</body>
</html>