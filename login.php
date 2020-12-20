<html>
<head>
	<title> User Login And Registration </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrapp/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="login-box">
	<div class="row">
	<div class="col-md-6 login-up">
		<h2> Login Here </h2>
		<form action="validation.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
				<button type="submit" class="btn-btn-primary">Login</button>
		</form>
	</div>

	<div class="col-md-6 login-down">
		<h2> Registration Here </h2>
		<form action="registration.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
				<button type="submit" class="btn-btn-primary">Registration</button>
		</form>
	</div>

	</div>

	</div>


</div>
</body>
</html>