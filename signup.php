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
    header("location:signin.php");
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
            <br><br>
            Already have an account?<a href="signin.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Log In</a>
            </form>
               

            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5">
            

              
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="./images/g2.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>The atmosphere in New York is lorem ipsum.</p>
      </div> 
    </div>

    <div class="item">
      <img src="./images/g1.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago - A night we won't forget.</p>
      </div> 
    </div>

    <div class="item">
      <img src="./images/g.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>LA</h3>
        <p>Even though the traffic was a mess, we had the best time.</p>
      </div> 
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div>
        <div class="col-sm-1"></div>
        <br>
        
        <br>
        <?php include ("footerpart.html");?>
    </div>
</body>
</html>