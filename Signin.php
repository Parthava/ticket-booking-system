<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Site</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
  </head>
  <body>
  <div class="top-bar">
  	<div style="padding-left: 8em;float: left;">Need help? Call +919876543211</div>
  	<div id="top" style="margin-left: 53em;"><a href="Login.php"> Login </a>&nbsp;&nbsp; <a href="Signin.php"> Sign in </a></div>
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
  </div><br/><br/>

  <form action="#" method="post">
  <div style="float: center; padding-top: 1em; padding-left: 25em; color: red;"><h2>You must sign in first</h2></div>
  <table border="2" bordercolor="green" align="center">
    <td>
      <table cellspacing="4" cellpadding="8">
        <tr>
          <td width="110">
            <strong>Username:</strong></td><td><input type="text" name="t1" required/><br/>
          </td>
        </tr>
        <tr>
          <td width="110">
            <strong>Password: </strong></td><td><input type="password" name="t2" required/><br/>
          </td>
        </tr>
        <tr><td colspan="2"><input type="submit" name="btn" value="Submit"></td></tr>
        <tr><td colspan="2">Have an account?<a href="Login.php"> Login </a> and continue</td></tr>
      </table>
    </td>
  </table></form><br/><br/><br/>
  <table align="center"> 
      <tr>
        <td width="1000" height="200" align="center"><img src="img/11.jpg" width="1000" height="200"/></td>
      </tr>
  </table>
  <?php
       if(isset($_POST["btn"]))
       {
          $user=$_POST["t1"];
          $pass=$_POST["t2"];
    
          $con=mysqli_connect("localhost","root","newpassword","db11");
      
          if(!$con)
          die("CANNOT CONNECT TO THE SERVER");
          else
          {
            $query="insert into reg(username,pass) values('".$user."','".$pass."')";
            $n=mysqli_query($con,$query);
            if($n==1)
            {
              echo "<script>alert('username added')</script>";
            }
          }
        }
  ?>

</body>
</html>