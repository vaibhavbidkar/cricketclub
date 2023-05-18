<?php
session_start();
$conn=mysqli_connect("localhost","root","","cricketclub");

if(isset($_POST["submit"])){
  $username=$_POST["username"];
  $password=$_POST["password"];
  $result=mysqli_query($conn,"SELECT * FROM users where USER_NAME='$username' OR EMAIL='$username'");
  $row=mysqli_fetch_assoc($result);
  // $_SESSION["user_id"]=$result['ID'];
  if(mysqli_num_rows($result)>0)
    {
        if($password== $row["PASSWORD"])
        {
            $_SESSION["login"]=true;
            $_SESSION["ID"]=$row["ID"];
           
            if($username=="admin")
            {
              echo "<script> alert('login sucessful')</script>";
              header("Location:Admin.php");
               
            }
            else{
              header("Location:home.php");
            }

        }else{
          echo "<script> alert('Wrong password')</script>";
        }
    }else{
      echo "<script> alert('user not Registered')</script>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <title>login page</title>
</head>
<body>
    
  <h2 class="heading" style="color: aliceblue;">Cricket Club</h2>
<div class="card" style="width: 27rem;">
    <div class="card-body">
        <h2 class="card-title">Login</h2>
      <form action="" method="post" class="content" >
        <label for="">Username</label>
        <input type="text" name="username">
        <br><br>
        <label for="">password</label>
        <input type="password" name="password" id="">
        <br><br>
        <button type="submit" name="submit"  class="loginbtn">Login</button>
        <br><br>
        <p>New user ? <span><a href="register.php">Register Here</a></span></p>
    </form>
    
      
    </div>
  </div>
      <br><br>
</body>
<div class="footer-basic">
  <footer>
      <!-- <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div> -->
      <ul class="list-inline">
          <li class="list-inline-item"><a href="home.html">Home</a></li>
          <li class="list-inline-item"><a href="#">About</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
      </ul>
      <p class="copyright">Srujana and vaibhav © 2023</p>
    </footer>
</div>
</html>
