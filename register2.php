<?php
session_start();
include'db.php';
if (isset($_GET['btn_reg']))
 {
    
    $city=$_GET['txt_city'];
    $place=$_GET['txt_place'];
    $venue=$_GET['txt_venue'];
    $date=$_GET['txt_date'];
    $time=$_GET['txt_time'];
    $link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
    $qry="insert into register2(city,place,venue,date,time) values('$city','$place','$venue','$date','$time')";
    mysqli_query($link,$qry);
     $result=mysqli_query($link,"select * from register2 where city='$city' and place='$place' and venue='$venue' and date='$date' and time='$time'");
    if (mysqli_affected_rows($link)>0) {
      $r=mysqli_fetch_assoc($result);
      $_SESSION['id']=$r['donerid'];
      //echo "$_SESSION[id]";
    mysqli_close($link);
    header("location:register3.php");
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
        <div class="row" style=" height: 650px;background-color: #CD5C5C">
          <div class="col-sm-1"></div>
            <div class="col-sm-4" style="height: 650px ;background-color: #e3f2fd">
                 <form>

                    <h1 align="center">Become a Blood Donor</h1>
                  <br>

               <div class="form-group">
  <label for="sel1">Select City:</label>
  <select class="form-control" id="sel1" name="txt_city">
    <option>select</option>
    <option>Bangalore</option>
    <option>Mysore</option>
    <option>Hampi</option>
    <option>Srirangapatna</option>
  </select>
</div>

 <div class="form-group">
  <label for="sel1">Select Place:</label>
  <select class="form-control" id="sel1" name="txt_place">
    <option>select</option>
    <option>Vasanth Nagar</option>
    <option>Visveswarapuram</option>
    <option>Ganga Nagar</option>
    <option>New Thippasandra</option>
    <option>Jayanagar</option>
    <option>Chamarajpet</option>
    <option>Thippasandra</option>
  </select>
</div>


<div class="form-group">
  <label for="sel1">Select Venue:</label>
  <select class="form-control" id="sel1" name="txt_venue">
    <option>select</option>
    <option>Unique Blood Bank</option>
    <option>KIM'S</option>
    <option>Grace Blood Bank</option>
    <option>HOSMAT</option>
    <option>BKF Blood Bank</option>
    <option>Victoria Blood Bank</option>
    <option>Rotary TTK Blood Bank</option>
    <option>Lions Blood Bank</option>
  </select>
</div>


            <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" placeholder="Select date" name="txt_date">
            </div>
            <div class="form-group">
            <label for="time">Time</label>
            <input type="time" class="form-control" id="time" placeholder="Select time" name="txt_time">
            </div>
            
            
            <button type="submit" class="btn btn-default" name="btn_reg">Register</button>
            <br><br>
           
            </form>
               

            </div>
 <br>
        <?php include ("footerpart.html");?>
    </div>
</body>
</html>