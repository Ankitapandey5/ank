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
        <div class="row" style="background-color:#CD5C5C;height: 500px">
            <div class="col-sm-5">
                <h1 style="margin-top: 120px;margin-left: 50px">Give Blood</h1>
                <h2 style="margin-left: 50px">Register Today.Become a blood doner.</h2>
                <a href="register.php" class="btn btn-lg" role="button" style="margin-left: 50px;background-color: #DC143C">Register Now</a>
               

            </div>
            <div class="col-sm-7">

              
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
      <img src="./images/g2.jpg" alt="image">
      <div class="carousel-caption">
       
      </div> 
    </div>

    <div class="item">
      <img src="./images/g1.jpg" alt="image">
      <div class="carousel-caption">
        
      </div> 
    </div>

    <div class="item">
      <img src="./images/g.jpg" alt="image">
      <div class="carousel-caption">
      
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
        </div>


        <div class="row" style="height: 10px"></div>



          <div class="row">
            
               <div class="row text-center">
               
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="./images/nd8.jpg" alt="User Info">
     
      
      <button class="btn" style="background-color: black; width:100%"><a href="register.php"><font color="white" size="5px">Donate Blood</font> </a></button>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="./images/nd7.png" alt="Blood Bank Info">
     
      
      <button class="btn" style="background-color: black; width:100%"><a href="blood.php"><font color="white" size="5px"> Your Blood Type Explained</font></a></button>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="./images/nd9.jpg" alt="Add Blood Group">
      
      
      <button class="btn" style="background-color: black; width:100%"><a href="news.php"><font color="white" size="5px"> News and Campaigns</font> </a></button>
    </div>
  </div>
 
</div>


          </div>

          <div class="row">
            <div class="col-sm-12">
              
              <h2 align="center">What Doners Say</h2><br>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel" style="background-color: #CD5C5C">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <h4><br>“To give blood you need neither extra strength nor extra food, and you will save a life.”<br><br><span style="font-style:normal;"></span></h4>
    </div>
    <div class="item">
      <h4><br>“If you’re a blood donor, you’re a hero to someone, somewhere, who received your gracious gift of life.”<br><br><span style="font-style:normal;"></span></h4>
    </div>
    <div class="item">
      <h4><br>“It feels good, It makes me Proud, I am a blood donor.”<br><br><span style="font-style:normal;"></span></h4>
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
          </div>



        <?php include ("footerpart.html");?>
    </div>
</body>
</html>