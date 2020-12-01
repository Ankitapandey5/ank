<?php
include'db.php';
if (isset($_GET['btn_reg']))
 {
    $name=$_GET['txt_name'];
    $email=$_GET['txt_email'];
    $pwd=$_GET['txt_pwd'];
    $gen=$_GET['gen'];
    $age=$_GET['txt_age'];
    
    $link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
    $qry="insert into signup values('$name','$email','$pwd','$gen','$age')";
    mysqli_query($link,$qry);
    mysqli_close($link);
    header("location:userinfo.php");
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
         include("headpart.html");
         ?>
        <div class="row" style=" height: 650px;background-color: #CD5C5C">
          <div class="col-sm-1"></div>
            <div class="col-sm-4" style="height: 650px ;background-color: #e3f2fd">
                 <form>

                    <h1 align="center">SIGNUP</h1>
                  <br>

            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="txt_name">
            </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="txt_email">
            </div>
            <div class="form-group">
            <label for="pwd">Password</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="txt_pwd">
            </div>
             <div class="form-group">
            <label for="pwd">Confirm Password</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="txt_cpwd">
            </div>
            <div>
            <label for="name">Gender</label><br>
            <label class="radio-inline"><input type="radio" name="gen" value="Male">Male</label>
            <label class="radio-inline"><input type="radio" name="gen" value="Female">Female</label><br><br>
            </div>
             <div class="form-group">
            <label for="name">Age</label>
            <input type="number" class="form-control" id="number" placeholder="Enter Age" name="txt_age">
            </div>
           
            
            <button type="submit" class="btn btn-default" name="btn_reg">Submit</button>
            
        
        <br>
        <?php include ("footerpart.html");?>
    </div>
</body>
</html>