
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/cricketclub/css/players.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
`<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<script src="\cricket club\cricketclub\js\search.js" defer></script>
    <title>Document</title>
</head>



<body>

    <nav class="navMenu">
        <img src="/cricketclub/images/logo.png" class="navbar-brand" style="height: 100px;" alt="" srcset="">
          <div class="container">
            <a  href="Home.html">Home</a>
            <a  href="teaminfo.html">Team Info</a>
          <a  href="players.html">Players Info</a>
          <a  href="merch.html">merchandise</a>
          <a  href="profile.html">Profile</a>
          </div>
       
        </nav>


            <div>
                <input class="input-search" id="searchInput" type="text" placeholder="Search">
            </div>

      <h2 style="color:goldenrod; text-align: center;">Meet The Squad</h2>

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

    <div style ="text-align : center "><button style="background :#011f4b" ><a style= "color:goldenrod "href="\cricket club\cricketclub\html\addplayerform.php" target=”_blank” >add player</a></button> </div>
    
    <div class="footer-basic">
        <footer>
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