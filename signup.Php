
<?php 

include 'db.php';
$message="";
if(isset($_POST['reg_user'])){
    
    $username=$_POST['username'];
    $email   =$_POST['email1'];
    $password1=$_POST['password'];
    $password=$_POST['passwordv'];
   
     
        if($password1 !=  $password )
          {
 echo "<script type='text/javascript'>
                 alert('tow passwords are not identical  ');
              </script> ";

          }else if($username=="" or  $email=="" or $password1=="" )
          {
            echo "<script type='text/javascript'>
                 alert('please fill all inputs ');
              </script> ";
          }
          else if(strlen($username) < 6 or strlen($password) <6)
          {
        echo "<script type='text/javascript'>
                 alert('username or password must be at least 6 digits');
              </script> ";

          }

        else{
            require_once 'personclass.php' ; 

            $s = new person( $username , $password1 , $email ) ; 
            if($s->signup()==true){

              session_start(); 
      $_SESSION['username']=$username ; 
      header("Location: indexu.php");
}
            }
        }
    

?>  
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title> sign up Form</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{font-family: "Comic Sans MS", Arial, Helvetica, sans-serif;}
</style>
  </head>
  <body>
     
  
    <div class="loginBox">
      <img src="user.png" class="user">
       <h1 style="color: white; text-align: center;">Sign up</h1>
   <form action="#" method="POST"> 
    

    <input type="text" name="username"     placeholder="Username" />
    <input type="text" name="email1"       placeholder="E-mail" />
    <input type="password" name="password" placeholder="Password" />
    <input type="password" name="passwordv" placeholder="Retype password" />
   
   <input type="submit" name="reg_user" value="Sign me up" />

        
      </form>
    </div>
  </body>
</html>