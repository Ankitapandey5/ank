<?php
session_start();
include'db.php';
if (isset($_GET['btn_reg']))
 {
    $name=$_GET['txt_name'];
    $age=$_GET['txt_age'];
    $gen=$_GET['gen'];
    $weight=$_GET['txt_weight'];
    $bloodgp=$_GET['txt_bloodgp'];
    $link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
    $qry="insert into register1(name,age,gen,weight,bloodgp) values('$name','$age','$gen','$weight','$bloodgp')";
    mysqli_query($link,$qry);
    // $result=mysqli_query($link,"select * from register1 where name='$name'");
   //if (mysqli_affected_rows($link)>0) {
     // $r=mysqli_fetch_assoc($result);
     // $_SESSION['id']=$r['userid'];
     // echo "$_SESSION[id]";
  // }
     

    
    mysqli_close($link);
    header("location:register2.php");
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
        <div class="row" style=" height: 600px;background-color: #CD5C5C">
          <div class="col-sm-1"></div>
            <div class="col-sm-4" style="height: 600px ;background-color: #e3f2fd">
                 <form>

                    <h1 align="center">Register To Donate</h1>
                  <br>

            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="txt_name">
            </div>
            <div class="form-group">
            <label for="email">Age</label>
            <input type="number" class="form-control" id="number" placeholder="Enter Age" name="txt_age">
            </div>
            <div>
            <label for="name">Gender</label><br>
            <label class="radio-inline"><input type="radio" name="gen" value="Male">Male</label>
            <label class="radio-inline"><input type="radio" name="gen" value="Female">Female</label><br><br>
            </div>
             <div class="form-group">
            <label for="name">Weight</label>
            <input type="number" class="form-control" id="number" placeholder="Enter Weight" name="txt_weight">
            </div>
            <div class="form-group">
  <label for="sel1">Select Your Blood Group:</label>
  <select class="form-control" id="sel1" name="txt_bloodgp">
    <option>select</option>
    <option>A+</option>
    <option>A-</option>
    <option>B+</option>
    <option>B-</option>
    <option>O+</option>
    <option>O-</option>
    <option>AB+</option>
    <option>AB-</option>
  </select>
</div>
           
            
            <button type="submit" class="btn btn-default" name="btn_reg">Register</button>
            
             <br><br>
            Already a Doner?<a href="register2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Go to Account</a>

            </form>
               

            </div>
<?php include ("footerpart.html");?>
    </div>
</body>
</html>