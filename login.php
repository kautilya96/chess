<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login form</title>
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
  
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
  
<link href='http://fonts.googleapis.com/css?family=Raleway:300,200' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">
<style type="text/css">
  body {
    background-image: url("chess1.jpg");
}
.form{
  top:35%;
  left:80%;
}

</style>

</head>

<body>

<div class="form">

  <div class="forceColor"></div>
  
   <form method="POST" action="login.php">
   <div class="topbar">
    <div class="spanColor"></div>
    <input type="text" class="input" id="email" placeholder="Email" name="email" />
  </div>
  <div class="topbar">
    <div class="spanColor"></div>
    <input type="password" class="input" id="password" placeholder="Password" name="password" />
  </div>
  <button type="submit" class="submit" id="submit" name="submit" >Login</button>
  

  
<?php
include("config.php");
session_start();

if(isset($_SESSION['email'])){
  header('Location:home.php');
}
/*if(isset($_SESSION['email']))
{
  header('Location:home.php');
}*/
  if(isset($_POST['submit'])){
            
           //echo"<b><span color='red'>akkaksjakjsaksjkajskajs</span></b>"; 

          $email=$_POST["email"];
          
          $password=$_POST["password"];  

          $query = mysqli_query($connect,"SELECT * from `user` where email_id='$email' AND password='$password'");
  
          if($query)
          {
              $rows = mysqli_num_rows($query);
              while ($values=mysqli_fetch_assoc($query)) 
              {
                 $name=$values['firstname'];
                 $lname=$values['lastname'];
              }
              if($rows!=0)
              {
                    $_SESSION['email']=$email;
                    $_SESSION['name']=$name;
                    $q=mysqli_query($connect,"UPDATE `user` SET online='1' WHERE email_id='$email'");
                    header('Location:home.php');
              }
              else
              {
                    echo '<br/><div class="topbar error">
    <div class="spanColor"></div><button class="submit" id="submit">Login Incorrect </button></div><br/>';
   
              }
          }

}

?>
  
</form>
 </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
