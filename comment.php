<?php
if($_POST){
	$name=$_POST['name'];
	$content=$_POST['commentcontent'];
	$handle=fopen("comments.html","a");
	fwrite($handle,"<b>".$name."</b>:<br/> . $content . <br/>");
	fclose($handle);
}
?>
<html>
<body>
	<form action="" method="POST">
		Comments: <textarea rows="10" cols="30" name="commentcontent"></textarea><br/>;
		Name: <input type= "text"  name="name"><br/>
		<input type="submit" value="POST!"><br/>
	</form>
	<?phb include "comments.html";?>
</body>
</html>
