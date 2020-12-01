<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="view port" content="width= device-width, initial-scale= 1">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.googlleapis.com/ajax/libs/jquery3.4.0/jquery.min.js" type="text/javascript"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <div class="container-fluid" >
        <?php
        include ("headpart.html");
        echo "<br>";
        
        ?>


        <div class="row" style="height: 500px"> 
        
         
<?php
include "db.php";
echo "<div class='col-sm-2'></div>";

$userid= $_SESSION['id'];

//echo $userid;
echo "<h1>&nbsp;&nbsp;Dear Doner Your Appointment is Confirmed..!!</h1><br>";

echo "<h3>";

$link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
  $qry="select * from register2 where donerid='$userid'";
  $result=mysqli_query($link,$qry);
  
  if(mysqli_affected_rows($link)>0)
  {
  //echo "<font color='green'>record inserted</font>";
  echo "<div class='col-sm-2'><font color='brown'>";
//echo "<table border='1'width='100%'>";
                 echo"doner id:<br>Time:<br>Date:<br>Venue:<br>Place:<br>City<br>";

  echo "</font></div>";
  
while($row=mysqli_fetch_assoc($result))
{
                   $r1=$row['donerid'];
                    $r2=$row['time'];
                    $r3=$row['date'];
                    $r4=$row['venue'];
                    $r5=$row['place'];
                    $r6=$row['city'];
                   
                    echo "<div class='col-sm-6'>";
                 // echo "<tr>";
                  echo "<td>$r1</td><br>";
                  echo "<td>$r2</td><br>";
                  echo "<td>$r3</td><br>";
                  echo "<td>$r4</td><br>";
                  echo "<td>$r5</td><br>";
                  echo "<td>$r6</td><br>";
                 
                  //echo "<td><a href='deleteadminbooking.php?id=$r1'>Delete</a></td>";
                  //echo "</tr>";
                   echo "</div>";

}
//echo"</table>";
}
echo "</h3>";
 ?>
</div>
<div class="col-sm-6"></div>
</div>
 <?php
        include ("footerpart.html");
        ?>
    </body>
</html>
