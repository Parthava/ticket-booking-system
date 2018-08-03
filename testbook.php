<!DOCTYPE html>
<html>
<head>
  <title>Booking test</title>
</head>
<body>
<form action="#" method="post">
Movie name: <input type="text" name="t1" value="Sanju"><br/><br/>
Show time: <select name="t2" required>
        <option value="9:00">9:00</option>
        <option value="12:10">12:10</option>
        <option value="15:40">15:40</option>
        <option value="18:35">18:35</option>
        <option value="21:20">21:20</option>
      </select><br/><br/>
      Seat number: <input type="text" name="t3" required><br/><br/>
      <input type="submit" name="btn" value="Submit">
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
              session_start();
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