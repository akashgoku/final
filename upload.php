<?php
if(isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "dp_conn.php";

	$img_name= $_FILES['my_image']['name'];
	$tmp_Name= $_FILES['my_image']['tmp_name'];
	$img_size= $_FILES['my_image']['size'];
	$Error= $_FILES['my_image']['error'];
	$img_type= $_FILES['my_image']['type'];

	if($Error===0)
	{
		if($img_size>1024000){
			$em= "Sorry Your file is too large";
			header("Location:home.php?error=$em");
		}else{
			$img_ex= pathinfo($img_name, PATHINFO_EXTNSION);
			$img_ex_lc= strtolower($img_ex);
			$allowed_exs= array("jpg","png","jpeg");
			if(in_array($img_ex_lc,$allowed_exs)){
				$new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
				$img_upload_path='uploads/'.$new_img_name;
				move_uploaded_file($tmp_Name, $img_upload_path);

				$sql="INSERT INTO images('img_url')
					  VALUES('$new_img_name')";
				mysqli_querry($conn,$sql);
				header("Loaction:view.php");

			}else{
				$em= "You can't uppload files of this type!";
				header("Location:home.php?error=$em");
			}
		}

	}else{
		$em= "unknown error occured!";
		header("Location:home.php?error=$em");
	}


}else{
	header("Loaction:home.php");
}

	