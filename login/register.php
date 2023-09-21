<?php
include "config.php"

?>




<!DOCTYPE html>
<html>

<head><title>Register </title>
 <link rel="stylesheet" href="yummy.css"  />
</head>


<body>


<img src="image/logo1.png" width="120" height="120">;

<form action= "register_process.php" method="post">;

<div class="Login"><h1> Register <br> <br></h1>

    <p>User Name</p>
		<input type="text" name="user_name" placeholder="Enter your name">
		<p> Address</p> 
        <input type="text" name="address" placeholder="Enter your address">
        <p> Email</p> 
        <input type="text" name="email" placeholder="Enter your email">
         <p>Password </p>
        <input type="password" name="password" placeholder="Enter your password">
		<p>Confirm Password </p>
        <input type="password" name="confirm_password" placeholder="*******">
        <br>
	
		

      <input type="submit" name="submit" value="Register">
      
		<a href="login.php"><center>Already registered? Login</center></a><br>

      
   

  </div>
  
  </form>
		


</body>
</html>