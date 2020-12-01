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
            
              <div class="row"><br><a href="addbg.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add blood group</a></div>
            
            </div>
            <div class="col-sm-9">
              
              <?php
               include'db.php';
               $link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
               $result=mysqli_query($link,"select * from bloodbank");
               if (mysqli_affected_rows($link)>0)
               {
                    echo "<table border='1' width=100%>";
                    echo "<tr>";
                    echo "<th>Name</th><th>Address</th><th>Phone No.</th><th></th>No</th><th></th><th></th>";
                    echo "</tr>";
                    while ($row=mysqli_fetch_array($result)) 
                    {
                        echo "<tr>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        
                         echo "<td><a href='del.php?id=$row[0]'>Delete</a></td>";
                         echo "</tr>";
                    }
                    echo "</table>";
               }
              else
                {
                  echo "<h4>No Record Found!!!!</h4>";
               }
               ?>

            </div>
                
        </div>

        <?php include ("footerpart.html");?>
    </div>
</body>
</html>