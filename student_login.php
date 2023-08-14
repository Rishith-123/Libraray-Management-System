<?php
    $db=mysqli_connect("localhost","root","","library");
    session_start();
    if(isset($_POST['submit']))
    {
      $_SESSION['user']=$_POST['user'];
      $res=mysqli_query($db,"SELECT * FROM `student` WHERE user='$_POST[user]' && pass='$_POST[pass]';");
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>       
        <script type="text/javascript">
        alert("The username and password doesn't match.");
        </script>
      
        <?php
      }
      else
      {
        ?>
        <script type="text/javascript">
        window.location="books.php"
        </script>
        <?php
      }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>

  <title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="css/st_login.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0"> 
  <meta name="author" content="V.Rishith Kumar (2020115099)">
  <script src="js/st_login.js" ></script>
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
          <li><a href="index.php">HOME</a></li>
         
          <li><a href="student_login.php" class="active">STUDENT-LOGIN</a></li>
          <li><a href="registration.php">REGISTRATION</a></li>
          <li><a href="feedback.php">FEEDBACK</a></li>
        </ul>
      </nav>
</header>
<section>
  <div class="log_img">
    <br> <br>
    <div class="box1">
        <h2 style="text-align: center; font-size: 35px;font-family: Lucida Console;">ONLINE LIBRARY</h2> 
        <h2 style="text-align: center; font-size: 25px;">User Login Form</h2>
      <form name="login" action="#" method="post">
        <br>
        <div class="login">
          <input type="text" id="uname" name="user" placeholder="Username" required=""> <br><br>
          <input type="password" id="password" name="pass" placeholder="Password" required=""> <br><br>
          <input type="submit" name="submit" value="Login" class="btn btn-success" id="button"></div>
          
      </form>
      <p style="color: white; padding-left: 15px;">
        
        <a style="color:white;" href="update.php">Forgot password?</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        New to this website?<a style="color: white;" href="registration.php">Sign Up</a>
      </p>
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
      <div class="lower"><a href="https://www.google.com/gmail/" target="_blank"><i id="gmail" class="fas fa-envelope icon" style="font-size: 3rem;padding: 0rem 1rem;"></i></a><a href="https://www.facebook.com/" target="_blank"><i id="fb" class="fab fa-facebook-f icon" style="font-size: 3rem;padding: 0rem 1rem;"></i></a><a href="https://www.instagram.com/" target="_blank"><i id="insta" class="fab fa-instagram icon" style="font-size: 3rem;padding: 0rem 1rem;"></i></a><a href="https://twitter.com/?lang=en" target="_blank"><i id="tweet" class="fab fa-twitter icon" style="font-size: 3rem;padding: 0rem 1rem;"></i></a><a href="https://www.youtube.com/" target="_blank"><i id="yt" class="fab fa-youtube icon" style="font-size: 3rem;padding: 0rem 1rem;"></i></a><a href="https://in.linkedin.com/" target="_blank"><i id="blue" class="fab fa-linkedin-in icon" style="font-size: 3rem;padding: 0rem 1rem;"></i></a></div>
</footer>
</body>
</html>