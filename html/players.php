
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="\cricket club\cricketclub\css\Players.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="\cricket club\cricketclub\js\search.js" defer></script>
    <title>Players</title>
  </head>



<body>

      


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

            <div class="div-search">
                <input class="input-search" id="searchInput" type="text" placeholder="Search Player">
            </div>

      <h2 style="color:#ffd700;
    font-family: Arial, sans-serif; text-align: center;">Meet The Squad</h2>

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
   $query = "select * from playerinformation";
   $data = mysqli_query($conn,$query);
   $total= mysqli_num_rows($data);
   $result = mysqli_fetch_assoc($data);
   

   

   echo "<ul class=\"list\">";
   


   if($total!=0){
   
    $_SESSION['ID'] =$result['ID'];
    echo "<li class=\"li\">
    <img src=\"/cricket club/cricketclub/img/{$result['PHOTO']}\" style=\"height: 120px;\" />
            <h2>{$result['JERSEY_NO']}</h2> 
            <h3 class=\"name\">{$result['NAME']}</h3><br>
            <p>
                age :{$result['AGE']} <br><br> {$result['ROLE']}
            </p>
            
            <a href=\"stats.php?player_id={$result['ID']}\" class=\"next\"><button>Stats</button></a>
        </li>";



    while($result=mysqli_fetch_assoc($data)){

      $_SESSION['ID'] =$result['ID'];
      echo "<li class=\"li\">
      <img src=\"/cricket club/cricketclub/img/{$result['PHOTO']}\" style=\"height: 120px;\" />
              <h2>{$result['JERSEY_NO']}</h2> 
              <h3 class=\"name\">{$result['NAME']}</h3><br>
              <p>
                  age :{$result['AGE']} <br><br> {$result['ROLE']}
              </p>
              
              <a href=\"stats.php?player_id={$result['ID']}\" class=\"next\"><button>Stats</button></a>
          </li>";
    }
 
   }else{

    echo "<h1>oops ,kya team banaega re tu </h1>";

   }

   echo "</ul>";

?>


    </ul>

    <div class="button-container">
  <button class="add-player-btn">
    <a href="\cricket club\cricketclub\html\addplayerform.php" target="_blank">Add Player</a>
  </button>
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