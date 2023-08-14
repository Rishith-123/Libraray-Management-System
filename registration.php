<?php
$db=mysqli_connect("localhost","root","","library");

if(isset($_POST['submit']))
{
  $count=0;
  $sql="SELECT user from `student`";
  $res=mysqli_query($db,$sql);

  while($row=mysqli_fetch_assoc($res))
  {
    if($row['user']==$_POST['user'])
    {
      $count=$count+1;
    }
  }
  if($count==0)
  {
    mysqli_query($db,"INSERT INTO `student` VALUES('$_POST[user]', '$_POST[pass]', '$_POST[conpass]', '$_POST[mobile]', '$_POST[email]');");
  ?>
    <script type="text/javascript">
     alert("Registration successful");
    </script>
  <?php
  }
  else
  {

    ?>
      <script type="text/javascript">
        alert("The username already exist.");
      </script>
    <?php

  }

}

?>



  
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Student Registration</title>
  <link rel="stylesheet" type="text/css" href="css/reg.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="author" content="V.Rishith Kumar (2020115099)"> 
  <script src="../2020115099_project/js/reg.js"></script>
  <link rel="icon" href="../2020115099_project/img/logo.png" type="image/png" sizes="16x16">  
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://kit.fontawesome.com/6d995d9d33.js" crossorigin="anonymous"></script> 


</head>
<body>
<header style="height: 90px;">
  
<div class="logo">
      <h1 style="color: white; font-size: 25px;word-spacing: 10px; line-height: 80px;margin-top: 20px;">E-LIBRARY</h1>
    </div>

      <nav>
        <ul>
          <li><a href="index.php" >HOME</a></li>
          <li><a href="student_login.php" >STUDENT-LOGIN</a></li>
          <li><a href="registration.php" class="active" >REGISTRATION</a></li>
          <li><a href="feedback.php" >FEEDBACK</a></li>
        </ul>
      </nav>
</header>

<section>
  <div class="reg_img">

    <div class="box2">
        <h2 style="text-align: center; font-size: 35px;font-family: Lucida Console; margin-top: 10px;">&nbsp; ONLINE LIBRARY </h2> <br>
        <h2 style="text-align: center; font-size: 25px;">User Registration Form</h2>
        
        <form action="#" method="post" onsubmit="return validation()" class="bg-light">
				
          <div class="form-group">
            <label for="user" class="font-weight-bold"> Username: </label>
            <input type="text" name="user" class="form-control" id="user" autocomplete="off" placeholder="User Name">
            <span id="username" class="text-danger font-weight-bold"> </span>
          </div>
  
          <div class="form-group">
            <label class="font-weight-bold"> Password: </label>
            <input type="password" name="pass" class="form-control" id="pass" autocomplete="off" placeholder="Password">
            <span id="passwords" class="text-danger font-weight-bold"> </span>
          </div>
  
          <div class="form-group">
            <label class="font-weight-bold"> Confirm Password: </label>
            <input type="password" name="conpass" class="form-control" id="conpass" autocomplete="off" placeholder="Confirm Password">
            <span id="confrmpass" class="text-danger font-weight-bold"> </span>
          </div>
  
          <div class="form-group">
            <label class="font-weight-bold"> Mobile Number: </label>
            <input type="text" name="mobile" class="form-control" id="mobileNumber" autocomplete="off" placeholder="Mobile Number">
            <span id="mobileno" class="text-danger font-weight-bold"> </span>
          </div>
  
          <div class="form-group">
            <label class="font-weight-bold"> Email: </label>
            <input type="text" name="email" class="form-control" id="emails" autocomplete="off" placeholder="E-Mail">
            <span id="emailids" class="text-danger font-weight-bold"> </span>
          </div>
  
          <input type="submit" name="submit" value="Sign Up" class="btn btn-success" id="button">
  
  
        </form>
     
    </div>
  </div>
</section>
<footer>
  <p style="color:white;  text-align: center; ">
<br>
Email: e.library@gmail.com <br><br>
Mobile: +91 7013634617
</p> 
<p id="cpyrt">&#169;All Rights Reserved</p>
<div class="last">FOLLOW US</div>
      <div class="lower"><a href="https://www.google.com/gmail/" target="_blank"><i id="gmail" class="fas fa-envelope icon" style="font-size: 3rem;padding: 0rem 1rem;"></i></a><a href="https://www.facebook.com/" target="_blank"><i id="fb" class="fab fa-facebook-f icon" style="font-size: 3rem;padding: 0rem 1rem;"></i></a><a href="https://www.instagram.com/" target="_blank"><i id="insta" class="fab fa-instagram icon" style="font-size: 3rem;padding: 0rem 1rem;"></i></a><a href="https://twitter.com/?lang=en" target="_blank"><i id="tweet" class="fab fa-twitter icon" style="font-size: 3rem;padding: 0rem 1rem;"></i></a><a href="https://www.youtube.com/" target="_blank"><i id="yt" class="fab fa-youtube icon" style="font-size: 3rem;padding: 0rem 1rem;"></i></a><a href="https://in.linkedin.com/" target="_blank"><i id="lo_col" class="fab fa-linkedin-in icon" style="font-size: 3rem;padding: 0rem 1rem;"></i></a></div>
</footer>
</body>