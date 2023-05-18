<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
    <link rel="stylesheet" href="\cricket club\cricketclub\css\Teaminfo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <title>Team Information</title>
</head>
<body>

<?php
  
  session_start();?>

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
      

      <br>
      <div class="team_info">
      <h2>Team Information</h2>
      <br><br>
      <img class ="teamlogo" src="\cricket club\cricketclub\images\teamlogo.png"  style="height: 140px;" >
      <br><br>
      <p>The India men's national cricket team, also known as Team India or the Men in Blue, represents India in men's international cricket. It is governed by the Board of Control for Cricket in India (BCCI), and is a Full Member of the International Cricket Council (ICC) with Test,
         One Day International (ODI) and Twenty20 International (T20I) status.Cricket was introduced to the Indian subcontinent by British sailors in the 18th century, and the first cricket club was established in 1792. India's men's national cricket team played its first international match on 25 June 1932 in a Lord's Test, becoming the sixth team to be granted Test cricket status. India had to wait until 1952, almost twenty years, for its first Test victory. In its first fifty years of international cricket, success was limited, with only 35 wins in 196 Tests.The team, however, gained strength in the 1970s with the emergence of players like Sunil Gavaskar, Gundappa Viswanath, Kapil Dev, and the Indian spin quartet.</p>
         <br><br>
</div>



<div class="team_achievements">
  <h3>ICC Achievements</h3>
  <br><br>
  <figure>
    <div class="cups">
      <img src="\cricket club\cricketclub\images\t20wc.png" />
      <figcaption class="caption">T20 WC: 2007</figcaption>
    </div>
    <div class="cups">
      <img src="\cricket club\cricketclub\images\odiwc.png" />
      <figcaption class="caption">ODI WC: 1983/2011</figcaption>
    </div>
    <div class="cups">
      <img src="\cricket club\cricketclub\images\ct.png" />
      <figcaption class="caption">CT: 2002/2013</figcaption>
    </div>
  </figure>
</div>

<br><br>

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