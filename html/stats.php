<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/stats.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
   <script src="/js/stats.js" defer></script>
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

   $playerID = $_GET['player_id'];
   $query = "SELECT * FROM playerinformation WHERE ID = $playerID";
   $data = mysqli_query($conn,$query);
   $total= mysqli_num_rows($data);
   $result = mysqli_fetch_assoc($data);

   
    $batting_strike_rate=round(($result['TOTAL_RUNS']/$result['BALLS_FACED'])*100,2);
    $batting_average=round(($result['TOTAL_RUNS']/($result['TOTAL_MATCHES']-$result['NOT_OUTS'])),2);
    $bowling_strike_rate=round($result['BALLS_BOWLED']/$result['TOTAL_WICKETS'],2);
    $economy=round($result['RUNS_GIVEN']/($result['BALLS_BOWLED']/6),2);
    
   echo "
   
   <h1>STATS OF {$result['NAME']}</h1>
   <table border=\"1\" align=\"center\">

   <tr>
       <td>
       <label style=\"color : goldenrod \">TOTAL MATCHES PLAYED</label></td>
       <td><label>{$result['TOTAL_MATCHES']}</label></td>
   </tr>
   <tr>
       <td>
       <label style=\"color : goldenrod \">TOTAL RUNS SCORED</label></td>
       <td><label>{$result['TOTAL_RUNS']}</label></td>
   </tr>
   <tr>
       <td>
       <label style=\"color : goldenrod \">NOT OUTS</label></td>
       <td><label>{$result['NOT_OUTS']}</label></td>
   </tr>
   <tr>
       <td>
       <label style=\"color : goldenrod \">TOTAL BALLS FACED</label></td>
       <td><label>{$result['BALLS_FACED']}</label></td>
   </tr>
   <tr>
       <td>
       <label style=\"color : goldenrod \">TOTAL BALLS BOWLED</label></td>
       <td><label>{$result['BALLS_BOWLED']}</label></td>
   </tr>
   <tr>
       <td>
       <label style=\"color : goldenrod \">TOTAL RUNS CONCEDED</label></td>
       <td><label>{$result['RUNS_GIVEN']}</label></td>
   </tr>
   <tr>
       <td>
       <label style=\"color : goldenrod \">TOTAL WICKETS TAKEN</label></td>
       <td><label>{$result['TOTAL_WICKETS']}</label></td>
   </tr>
   <tr>
       <td>
       <label style=\"color : goldenrod \">BATTING STRIKE RATE</label></td>
       <td><label>{$batting_strike_rate}</label></td>
   </tr>
   <tr>
       <td>
       <label style=\"color : goldenrod \">BATTING AVERAGE</label></td>
       <td><label>{$batting_average}</label></td>
   </tr>
   <tr>
       <td>
       <label style=\"color : goldenrod \">BOWLING STRIKE RATE</label></td>
       <td><label>{$bowling_strike_rate}</label></td>
   </tr>
   <tr>
       <td>
       <label style=\"color : goldenrod \">ECONOMY</label></td>
       <td><label>{$economy}</label></td>
   </tr>
    </table>
    
    
    <a href=\"deleteplayer.php?player_id={$result['ID']}\" class=\"next\"><button>delete this player </button></a>

    <a name=\"update1\" href=\"updatestats.php?player_id={$result['ID']}  \" class=\"next\"><button>update stats</button></a>

</form> 
    
    
   " ;




   
            ?>
            
















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

