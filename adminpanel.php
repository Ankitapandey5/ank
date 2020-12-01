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
              <div class="row"><br><a href="adminpanel.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h2>&nbsp;&nbsp;&nbsp;Dashboard</h2></a></div>

              <div class="row"><br><a href="userinfo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User info</a></div>

              <div class="row"><br><a href="insert.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add User info</a></div>
            
            
              <div class="row"><br><a href="bloodbank.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blood bank info</a></div>
            
              <div class="row"><br><a href="addbg.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add blood group</a></div>
            
            </div>
            <div class="col-sm-9">
              
                <div class="row text-center">
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="./images/avatar.jpg" alt="User Info">
      <p><strong>User Info</strong></p>
      
      <button class="btn"><a href="userinfo.php"> click here</a></button>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="./images/bg2.jpg" alt="Blood Bank Info">
      <p><strong>Blood Bank Info</strong></p>
      
      <button class="btn"><a href="bloodbank.php"> click here</a></button>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="./images/bg.jpg" alt="Add Blood Group">
      <p><strong>Add Blood Group</strong></p>
      
      <button class="btn"><a href="addbg.php"> Add </a></button>
    </div>
  </div>
</div>

            </div>
                
        </div>

        <?php include ("footerpart.html");?>
    </div>
</body>
</html>