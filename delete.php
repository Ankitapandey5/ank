	<?php
	include'db.php';
				$email=$_GET['id'];
				$link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
				mysqli_query($link,"delete from signup where email='$email'");
				mysqli_close($link);
				header("location:userinfo.php");
?>