<!DOCTYPE html>
<html>
<head>

    <title>SEARCH</title>
    <link rel="stylesheet" type="text/css" href="css/books.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
   
</head>
<body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand active">E-LIBRARY</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="books.php">BOOKS</a></li>
            <li><a href="search.php">SEARCH</a></li>
            <li><a href="feedback.php">FEEDBACK</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">

		    <li style="color:yellow ; font-size:18px; margin-top: 10px; font-weight: bold;"><?php session_start(); echo "Welcome  ".$_SESSION['user'];?></li>
            <li><a href="index.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
            
          </ul>

      </div>
    </nav>

<div class="s">
<form method = "POST" >
		<div class="search">
		Search : <input type="text" name="find" placeholder="Enter title, author or category">
		<button type = "submit" name = "search"><span>Search</span></button>
		</div>
		<?php
		
		    if (isset($_POST['search'])) {
                $searchq = $_POST['find'];
			
			$db=mysqli_connect("localhost","root","","library");
			$query = mysqli_query($db, "SELECT * FROM books WHERE Title = '$searchq' OR Author = '$searchq' OR Category = '$searchq'");
			$count = mysqli_num_rows($query);
			if ($count > 0) {
				while ($row = mysqli_fetch_array($query)) {
					echo "<form action ='#' method ='POST' class='arrange'>
                    <img  src='$row[img]'>
                    <h2>$row[Title]</h2>
					ID: $row[ID]<br>
					Category: $row[Category]<br>
					Author: $row[Author]<br>
					Year: $row[Year]<br>
					 
		            <input type = hidden name = Item_Name value = $row[Title] >
		            <input type = hidden name = ID value = $row[ID] >
		            <button><a href='https://matfuvit.github.io/UVIT/predavanja/literatura/TutorialsPoint%20JavaScript.pdf' target='_blank'>Read </a></button><br><br>
                    </form>";
				}
				
			}
			else {
				echo "<br><br><div class = 'no'>No matches found</div></form>";
			}
		    }
		
		
		?>
</form>
</div>


</body>
</html>
