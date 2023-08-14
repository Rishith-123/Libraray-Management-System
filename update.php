
<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="css/update.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

        <div class="wrapper">
            <h2 style="text-align: center; font-size: 40px;">Online Library </h2> 
            <h2 style="text-align: center; font-size: 20px;">Change Your Password</h2>
        <form name="login" action="#" method="post">
            <br>
            <div class="login">
                <input type="text"  name="user" placeholder="Username" required=""> <br><br>
                <input type="text"  name="email" placeholder="E-mail" required=""> <br><br>
                <input type="password"  name="pass" placeholder="New Password" required=""><br><br>
                <input type="password"  name="conpass" placeholder="Confirm New Password" required=""><br><br>
                <button type="submit" name="submit">Update</button>
                <button style="margin-left:190px;"><a href="index.php">Back</button></div>
        </form>
    </div>
    <?php
    $db=mysqli_connect("localhost","root","","library");
    if (isset($_POST['submit']))
    {
        if(mysqli_query($db,"UPDATE `student` SET pass='$_POST[pass]',conpass='$_POST[conpass]' WHERE user='$_POST[user]' AND email='$_POST[email]';"))
        {
            ?>
            <script type="text/javascript">
            alert("Password Updated Successfully...");
            </script>
            <?php

        }
    }
    ?>

</body>
</html>