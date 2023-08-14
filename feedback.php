<?php
$db=mysqli_connect("localhost","root","","library");
if(isset($_POST['submit']))
{
  mysqli_query($db,"INSERT INTO `feedback` VALUES('$_POST[feedback]');");      
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Feedback</title>
  	<link rel="stylesheet" type="text/css" href="css/feedback.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="V.Rishith Kumar (2020115099)">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  	<script src="https://kit.fontawesome.com/6d995d9d33.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../2020115099_project/img/logo.png" type="image/png" sizes="16x16"> 
</head>
<body>
    <header>
  
        <div class="logo">
              <h1 style="color: white; font-size: 25px;word-spacing: 10px; line-height: 80px;margin-top: 20px;">E-LIBRARY</h1>
            </div>
        
              <nav>
                <ul>
                  <li><a href="index.php" >HOME</a></li>
                 
                  <li><a href="student_login.php" >STUDENT-LOGIN</a></li>
                  <li><a href="registration.php"  >REGISTRATION</a></li>
                  <li><a href="feedback.php" class="active">FEEDBACK</a></li>
                </ul>
              </nav>
    </header>
    <section>
	    <div class="wrapper">
		    <h4 style="color: orange;">***If you have any suggesions or questions please comment below.***</h4>
        <h5 style="color: orange;"> (Fill along with your user details)</h5>
		    <form  onsubmit= "return validate()" method="post">
          <textarea style="color:black; font-size: 17px" rows="17" cols="90" name="feedback" class="comment" id="comment" placeholder="Whats Your Feedback....."></textarea> <br><br>
			    <input class="btn btn-default" type="submit" name="submit" value="Comment" style="width: 100px; height: 35px;">		
		    </form>
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
          <div class="lower"><a href="https://www.google.com/gmail/" target="_blank"><i id="gmail" class="fas fa-envelope icon" style="font-size: 4.5rem;padding: 0rem 1rem;"></i></a><a href="https://www.facebook.com/" target="_blank"><i id="fb" class="fab fa-facebook-f icon" style="font-size: 4.5rem;padding: 0rem 1rem;"></i></a><a href="https://www.instagram.com/" target="_blank"><i id="insta" class="fab fa-instagram icon" style="font-size: 4.5rem;padding: 0rem 1rem;"></i></a><a href="https://twitter.com/?lang=en" target="_blank"><i id="tweet" class="fab fa-twitter icon" style="font-size: 4.5rem;padding: 0rem 1rem;"></i></a><a href="https://www.youtube.com/" target="_blank"><i id="yt" class="fab fa-youtube icon" style="font-size: 4.5rem;padding: 0rem 1rem;"></i></a><a href="https://in.linkedin.com/" target="_blank"><i id="blue" class="fab fa-linkedin-in icon" style="font-size: 4.5rem;padding: 0rem 1rem;"></i></a></div>
</footer>
</body>

<script>
  function validate(){
  if (document.getElementById('comment').value==""){
    alert("Fill your Feedback.....");
    return false;
  }
  else if (document.getElementById('comment').value!=""){
    alert("Feedback Received.....");
    
  }
}
</script>