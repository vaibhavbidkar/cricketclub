<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/cricketclub/css/profile.css">
    <title>profile</title>
</head>
<body>
    <nav class="navMenu">
        <img src="/images/logo.png" class="navbar-brand" style="height: 100px;" alt="" srcset="">
          <div class="container">
            <a  href="home.php">Home</a>
            <a  href="teaminfo.php">Team Info</a>
          <a  href="players.php">Players Info</a>
          <a  href="merch.php">merchandise</a>
          <a  href="profile.php">Profile</a>
          </div>
       
        </nav>
        
      
        <?php
        
        session_start();
         $conn=mysqli_connect("localhost","root","","cricketclub");

         $user_id=$_SESSION['ID'];
         

          $query = "SELECT * FROM users WHERE ID = $user_id";
          $data = mysqli_query($conn,$query);
          $total= mysqli_num_rows($data);
          $result = mysqli_fetch_assoc($data);


           echo "<div class=\"box\">
           <ul class=\"list\">
             
                 <h2>Name : {$result['USER_NAME']}</h2>
                 <h3>Teamname : {$result['TEAM_NAME']}</p>
                   <p>Email : {$result['EMAIL']}</p>
                   <p>Phone no : {$result['PHONE_NUMBER']}</p>
                   <p>Date of birth : {$result['DATE_OF_BIRTH']}</p>
                   <p>Gender : {$result['GENDER']}</p>
       
               
                 </ul>
         </div>";




        
        
        
        
        
        ?>





        <br><h1 class="heading">Profile</h1>
        
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
        
</body>
</html>