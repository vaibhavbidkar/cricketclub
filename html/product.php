<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/product.css">
    <title>Document</title>

</head>
<body>
  <nav class="navMenu">
    <img src="/images/logo.png" class="navbar-brand" style="height: 100px;" alt="" srcset="">
      <div class="container">
        <a  href="Home.html">Home</a>
        <a  href="teaminfo.html">Team Info</a>
      <a  href="players.html">Players Info</a>
      <a  href="merch.html">merchandise</a>
      <a  href="profile.html">Profile</a>
      </div>
   
    </nav>



    <?php
      
      
      session_start();
$server_name="localhost";
$username="root";
$password="";
$database_name="cricketclub";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

   $id = $_GET['product_id'];
   $query = "SELECT * FROM merchandise WHERE ID = $id";
   $data = mysqli_query($conn,$query);
   $total= mysqli_num_rows($data);
   $result = mysqli_fetch_assoc($data);


   echo "<div class=\"card\">
        <img src=\"/cricket club/cricketclub/img/{$result['PRODUCT_IMAGE']}\"  class=\"prodimg\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">₹ {$result['PRICE']}</h5>
            <p class=\"card-text\">{$result['PRODUCT_NAME']}</p>
            <p>{$result['DESCRIPTION']}</p>
          </div>
    </div>" 

    ?>



</body>
<br><br>
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