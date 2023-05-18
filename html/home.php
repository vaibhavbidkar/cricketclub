<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
    <link rel="stylesheet" href="\cricket club\cricketclub\css\Home.css">
    <script src="\cricket club\cricketclub\js\slideshow.js" defer></script>


    <title>Home Page</title>

</head>
<body >



<?php
        
        session_start();
         $conn=mysqli_connect("localhost","root","","cricketclub");

        ?>

       


    <nav >
        
          <div class="nav_div">
          <img class="nav_image" src="\cricket club\cricketclub\images\logo.png">
          <a class="nav_link" href="home.php">Home</a>
          <a class="nav_link" href="teaminfo.php">Team Info</a>
          <a class="nav_link" href="players.php">Players Info</a>
          <a class="nav_link" href="merch.php">merchandise</a>
          <a class="nav_link" href="profile.php">Profile</a>
          </div>
        </nav>

       
<div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="\cricket club\cricketclub\images\home.jpg" style="width:100%">
    <div class="text">World Cup 2011</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="\cricket club\cricketclub\images\carousal1.webp" style="width:100%">
    <div class="text">Modern Team INDIA</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="\cricket club\cricketclub\images\carousal2.jpg" style="width:100%">
    <div class="text">BCCI</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>









        <div class="about-card">
        <div class="about-section">
          <h1>About Website</h1>
          <p>This website can be used by the Coaches to manage A Team</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse maiores quasi unde recusandae illo, dolore repellat autem dicta veritatis tenetur minus, impedit optio itaque nisi ea delectus iusto quia saepe.</p>
        </div>
        <div class="vertical-line"></div>
        <div class="about-section">
          <h1>About Us</h1>
          <p>This website is created by srujana prabhu and vaibhav bidkar</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse maiores quasi unde recusandae illo, dolore repellat autem dicta veritatis tenetur minus, impedit optio itaque nisi ea delectus iusto quia saepe.</p>
        </div>
        </div>





        
        <div class="vid">
          
         <h1 class="vh">videos</h1><br>
          <iframe width="420" height="315"
             src="https://youtube.com/embed/mEOBGY4-7JA">
           </iframe>
        
        <iframe width="420" height="315"
        src="https://youtube.com/embed/h_H57Y1d2TI">
        </iframe>

        <iframe width="420" height="315"
        src="https://youtube.com/embed/r_PhcTbj4Uk">
        </iframe>

        <iframe width="420" height="315"
        src="https://youtube.com/embed/3naWqgRa1pk">
        </iframe>

        <iframe width="420" height="315"
        src="https://youtube.com/embed/AA5xIWGsgVQ">
        </iframe>

        <iframe width="420" height="315"
        src="https://youtube.com/embed/ksqLmXy2syw">
        </iframe>
        
        </div>
        





        <div class="footer-basic">
          <footer>
              <ul class="list-inline">
                  <li class="list-inline-item"><a href="#">Instagram</a></li>
                  <li class="list-inline-item"><a href="#">Facebook</a></li>
                  <li class="list-inline-item"><a href="#">Youtube</a></li>
              </ul>
              <p class="copyright">Srujana and vaibhav © 2023</p>
            </footer>
        </div>
</body>
</html>