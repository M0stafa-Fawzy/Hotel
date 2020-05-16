<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title> <?php echo "Login Form" ; ?> </title>
		<link rel="stylesheet" href="loin.css">
		<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Log In Here</h2>
			<form action="" method="POST">
				
				<p>Username</p>
				<input type="text" name="username" placeholder="Enter Your Name">
				<p>Password</p>
				<input type="password" name="password" placeholder="••••••••">
				<input type="submit" value="Login" name="login_user">

	

				<a href="signup.php">Or Sign Up</a></br></br>
				<a href="admin/home.php">Are You Admin?</a>
			</form>

		</div>
		
	</body>
</html>


<?php
require_once 'db.php' ; 


if($_POST)
{

if(isset($_POST['login_user']))
{

$username = $_POST['username'] ; 
$password = $_POST['password'] ; 

require_once 'personclass.php' ;
$p = new person($username,$password,"user@yahoo.com");

if($p->login() == true)
{

	session_start(); 
    $_SESSION['username']=$username ; 
      header("Location: indexu.php");
}

}


}



?>



