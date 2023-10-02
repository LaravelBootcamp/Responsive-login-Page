<?php 

require_once ('./config.php');




?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<section class="login-container">
		<h1>Login Form</h1>

		<?php 
		if(!empty($_POST)){
			$username = $_POST['username'];
            $password = md5($_POST['password']);
			$sel = "SELECT * FROM regi WHERE username='$username' AND password='$password'";
			$result = mysqli_query($con,$sel);
			$row = mysqli_fetch_assoc($result);
			if ($row) {
				header('location:./summer/index.php');
			} else {
				echo"Username or password didnot match";
			}
			
		}
		echo"echo ";
		
		?>

		<form action="" method="post">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" placeholder="Enter your username">

			<label for="password">Password:</label>
			<input type="password" id="password" name="password" placeholder="Enter your password">

			<button type="submit" name="login">Login</button>
			<button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2" type="submit" name=""><a href="./signup.php">Signup</a></button>
			<h2>thank you kind your information</h2>
		</form>
	</section>
</body>
</html>
