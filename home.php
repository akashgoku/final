<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:login.php');
}
header("Loaction:comment.php");
?>
<html>
<head>
	<title>HOME PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrapp/4.1.3/css/bootstrap.min.css">
</head>
<body>

	<?php if(isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
	<div class="container">
	<a class="float-center" href="logout.php">LOGOUT</a>
	<h1>Welcome <?php echo $_SESSION['username']; ?> </h1>

	<form action="upload.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="my_image">
	<button type="submit" name="submit" value="upload">UPLOAD</button>
</form>
</div>

</body>
</html>
