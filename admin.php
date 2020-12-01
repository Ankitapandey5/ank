<?php

         $log = 0;
        session_start(); 
        include'db.php';
        
        if($_SERVER["REQUEST_METHOD"] == "GET")
        {

           if (isset($_GET['btn_login']))
           {
            $email=$_GET['txt_email'];
            $pwd=$_GET['txt_pwd'];

            if(!preg_match("/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/",$_GET['txt_email']))
                    die("ENTER A VALID EMAIL");
           
            
            $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
            $sql = "SELECT * FROM admin";
            $result = $conn->query($sql);
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    if(($_GET["txt_email"] == $row["email"]) && ($_GET["txt_pwd"] == $row["pwd"]))
                        $log = 1;
                }
            }
        
        mysqli_close($conn);
      }
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
        <div class="row" style="background-color:#CD5C5C;height: 400px">
          <div class="col-sm-3"></div>
            <div class="col-sm-6">
                 <form>

              <br>
              <h1 align="center">Admin Panel</h1><br>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="txt_email">
            </div>
            <div class="form-group">
            <label for="pwd">Password</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="txt_pwd">
            </div>
            <br>
            <button type="submit" class="btn btn-default" name="btn_login">Login</button>
            <br>
            <br>
            <h1 style="text-align: center"><?php  if($log == 1){echo "Succesfully Logged In";

                 header('Location: adminpanel.php');}

 else if($log==-1){echo "Invalid User Id or Password!";}?></h1>


            </form>
            
             <div class="col-sm-3"></div>  

            </div>
        </div>
        <?php include ("footerpart.html");?>
    </div>
</body>
</html>