	<?php
	include'db.php';
				$name=$_GET['id'];
				$link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
				mysqli_query($link,"delete from bloodbank where name='$name'");
				mysqli_close($link);
				header("location:bloodbank.php");
?>