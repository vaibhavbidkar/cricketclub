<?php
session_start();
$conn=mysqli_connect("localhost","root","","cricketclub");

if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $date=$_POST["date"];
    $gender=$_POST["gender"];
    $password=$_POST["password"];
    $teamname=$_POST["teamname"];
    $duplicate=mysqli_query($conn,"SELECT * FROM users WHERE EMAIL='$email' ");
    if(mysqli_num_rows($duplicate)>0)
    {
        echo "<script> alert('email is already taken')</script>";
    }else{
        $query="INSERT INTO users VALUES ('', '$name', '$email', '$phone', '$password', '$date', '$gender', '$teamname')";
        mysqli_query($conn,$query);
        echo "<script> alert('Registartion successful')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>registration form</title>
</head>
<body>
    <br><br>
    <h1 style="color: aliceblue; text-align: center;">Cricket Club</h1>
<div class="card" style="width: 25rem;">
    <div class="card-body">
    <h2>Register</h2>
    <form action="" method="post">
        <div class="inputboxes">
        <label for=""> Name :</label>
        <input type="text" name="name" placeholder="Enter first name">
        <br>
        <label for="">Email :</label>
        <input type="email" name="email" id="" >
        <br>
        <label for="">Phone No :</label>
        <input type="number" name="phone" id="" >
        <br>
        <label for="">Password :</label>
        <input type="number" name="password" id="" >
        <br>
        <label for="">Date of birth:</label>
        <input type="date" id="start" name="date"
           value=""
           min="2023-01-01" max="2023-12-31">
           <br>
        <fieldset>
            <legend>Gender :</legend>
            <label for="">Female</label>
            <input type="radio" value="female" name="gender" id="">
            <label for="">Male</label>
            <input type="radio" value="male" name="gender" id="">
        </fieldset>
        <br>
        <label for="">Make a team </label>
        <input type="text" name="teamname" id=" " placeholder="Enter your Team name">
        <br><br>
        <div style="text-align: center;">
        <button class="btn" name="submit">Register</button>
    </div>
</div>
        <br><br>
        <p>Already a member ? <span><a href="loginpage.php">Login</a></span></p>
    </form>
    </div>
    </div>
    
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
