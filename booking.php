<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Site</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
  </head>
  <?php
  session_start();
  if(isset($_SESSION["username"]))
  {
    $user=$_SESSION["username"];
  }
  else
    header("location:Login.php");
  ?>

  <body>
  <div class="top-bar">
  	<div style="padding-left: 8em;float: left;">Need help? Call +919876543211</div>
  	<div id="top" style="margin-left: 53em;"><?php echo "User: $user"?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<a href=Login.php>Logout</a>"?></div>
  </div>
  <div class="menu-bar">
  	<div class="logo"><a href="temp2.php"><img src="img/sa 2.jpg"/></a></div>
  	<div class="menu" id="l1"><ul type="none">
  			<li><a href="index.html">Home</a></li><li><a href="movies.html">Movies</a></li><li><a href="aboutus.html">About us</a></li><li><a href="contact.html">Contact us</a></li>
			</ul></div>


	<div class="search">
		<form action="Redirect.php" method="post">
      <input type="text" name="n1" placeholder="Search for city">
      <input type="submit" value="Search"></form>
  </div><br/>

  <div style="float: center; padding-top: 1em; padding-left: 27em; color: red;"><h2>Enter your details</h2></div>
  <table border="2" bordercolor="green" cellpadding="8" align="center">
  <tr>
  <td width="300" height="170"><form action="#" method="post">
Movie name: <input type="text" name="t1" value="Sanju"><br/><br/>
Show time: <select name="t2" required>
        <option value="9:00">9:00</option>
        <option value="12:10">12:10</option>
        <option value="15:40">15:40</option>
        <option value="18:35">18:35</option>
        <option value="21:20">21:20</option>
      </select><br/><br/>
      Seat number: <input type="text" name="t3" required><br/><br/>
      <input type="submit" name="btn" value="Submit"></form></td></tr></table><br/><br/><br/><br/>
     <table align="center"> 
      <tr>
        <td width="1000" height="200" align="center"><img src="img/11.jpg" width="1000" height="200"/></td>
      </tr>
  </table><br/><br/><br/>
  <div style="background-color: black; padding: 15px 10px 20px 40px; color: white; margin-bottom: -20px !important; margin-left: -140px !important; margin-right: -140px !important;"><div style="padding-left: 8em;float: left;"><a href="#">Facebook</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Instagram</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Twitter</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">LinkedIn</a></div>
    </div>
<?php
       if(isset($_POST["btn"]))
       {
          $movie=$_POST["t1"];
          $shtm=$_POST["t2"];
          $seat=$_POST["t3"];

          $con=mysqli_connect("localhost","root","newpassword","db11");
      
          if(!$con)
            die("CANNOT CONNECT TO THE SERVER");
          else
          {
              //session_start();
              $query="insert into newbooking(Username,Moviename,Showtime,Seatnumber) values('".$_SESSION["username"]."','".$movie."','".$shtm."',".$seat.")";
              $n=mysqli_query($con,$query);
              if($n==1)
              {
                  echo "<script>alert('Booking done')</script>";
              } 
          }
        }
  ?>
</body>
</html>
