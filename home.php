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
  	<div class="logo"><a href="index.html"><img src="img/sa 2.jpg"/></a></div>
  	<div class="menu" id="l1"><ul type="none">
  			<li><a href="index.html">Home</a></li><li><a href="#">Movies</a></li><li><a href="#">About us</a></li><li><a href="#">Contact us</a></li>
			</ul></div>


	<div class="search">
		<form action="Redirect.php" method="post">
      <input type="text" name="n1" placeholder="Search for city">
      <input type="submit" value="Search"></form>
  </div>

  </div>
  <div class="cover" align="center"><img src="img/pc.jpg" height="500px" /></div><br/>
  <div class="font">Movies this week <img src="img/cal.jpg"/></div>
  <div class="table-top">
    <table align="center"> 
      <tr>
        <td width="1000" height="200" align="center"><img src="img/11.jpg" width="1000" height="200"/></td>
      </tr>
    </table>
  </div><br/><br/><br/><br/>
  <div class="table-bottom">
    <table bordercolor="blue" border="2" align="center" cellpadding="10" cellspacing="4">
      <tr align="center">
        <td width="140" height="170"><img src="img/7 (1).jpg"/></td>
        <td width="170"><img src="img/7 (2).jpg"/></td>
        <td width="170"><img src="img/7 (3).jpg"/></td>
      </tr>
      <tr align="center">
        <td width="170" height="220"><img src="img/7 (4).jpg"/></td>
        <td width="170"><img src="img/7 (5).jpg"/></td>
        <td width="170"><img src="img/7 (6).jpg"/></td>
      </tr>
    </table><br/><br/><br/><br/>
</body>
</html>