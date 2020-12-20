<html>
<head>
	<title> View </title>
</head>
<body>
	<a href="home.php"> &#8592;</a>
	<?php
		$sql= "Select * from images ORDER BY id DESC";
		$res=mysqli_querry($conn,$sql);

		if(mysqli_num_rows($res)>0){
			while($images=mysqli_fetch_assoc($res)){ ?>
				<div class="alb">
					<img src="uploads/<?=$images['img_url']?>">
				</div>
	<?php } } ?>
</body>
</html>
