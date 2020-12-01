<?php
include'db.php';
if (isset($_GET['btn_add']))
 {
    $bloodgroup=$_GET['txt_bloodgp'];
    
    $link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
    $qry="insert into bloodgp values('$bloodgroup')";
    mysqli_query($link,$qry);
    mysqli_close($link);
    header("location:adminpanel.php");
}
?>






<!DOCTYPE html>
<html>
<head>
	<title></title>
         <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <?php
         include("headpart1.html");
         ?>
        <div class="row" style="height: 500px">
            <div class="col-sm-3" style="height: 500px;background-color: black">
              <div class="row"><br><a href="adminpanel.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <h2>&nbsp;&nbsp;&nbsp;Dashboard</h2></a></div>

              <div class="row"><br><a href="userinfo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User info</a></div>

              <div class="row"><br><a href="insert.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add User info</a></div>
            
            
              <div class="row"><br><a href="bloodbank.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blood bank info</a></div>
            
              <div class="row"><br><a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add blood group</a></div>
            
            </div>
            <div class="col-sm-5">
              
                <form>
              <br>
            <div class="form-group">
            <label for="blood">Blood Group</label>
            <input type="text" class="form-control" id="bloodgp" placeholder="Enter Blood Group" name="txt_bloodgp">
            </div>
            <button type="submit" class="btn btn-default" name="btn_add">Add</button>
            <br>

            </div>
                
        </div>

        <?php include ("footerpart.html");?>
    </div>
</body>
</html>