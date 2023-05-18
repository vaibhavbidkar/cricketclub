<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="\cricket club\cricketclub\css\merch.css">
    <title>Document</title>
</head>
<body>




  <nav class="navMenu">
    <img src="/images/logo.png" class="mynavbar-brand" style="height: 100px;" alt="" srcset="">
      <div class="mycontainer">
        <a  href="Home.html">Home</a>
        <a  href="teaminfo.html">Team Info</a>
      <a  href="players.html">Players Info</a>
      <a  href="merch.html">merchandise</a>
      <a  href="profile.html">Profile</a>
      </div>
   
    </nav>

         <h2  class="heading" style="color: goldenrod;">Merchandise</h2>

         <?php

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
   $query = "select * from merchandise";
   $data = mysqli_query($conn,$query);
   $total= mysqli_num_rows($data);
   $result = mysqli_fetch_assoc($data);

   echo "<div class=\"products\">";
   echo "<ul class=\"list\">";
   


   if($total!=0){

    
    echo "<li class=\"merchcard\">
        <img src=\"/cricket club/cricketclub/img/{$result['PRODUCT_IMAGE']}\" style=\"height: 120px;\" style=\"height: 150px;\" />
        <h3>₹ {$result['PRICE']}</h3><br>
        <p>
        {$result['PRODUCT_NAME']}
        </p>          
        <a href=\"product.php?product_id={$result['ID']}\" class=\"next\"><button>more</button></a>
        </li>   ";


    while($result=mysqli_fetch_assoc($data)){


      echo "<li class=\"merchcard\">
        <img src=\"/cricket club/cricketclub/img/{$result['PRODUCT_IMAGE']}\" style=\"height: 120px;\" style=\"height: 150px;\" />
        <h3>₹ {$result['PRICE']}</h3><br>
        <p>
        {$result['PRODUCT_NAME']}
        </p>          
        <a href=\"product.php?product_id={$result['ID']}\" class=\"next\"><button>more</button></a>
        </li>   ";
    }
   }else{

    echo "<h1>oops ,kya team banaega re tu </h1>";

   }

   echo "</div>  ";

  //  echo "<div style=\"text-align : center \"><button  ><a href=\"\cricket club\cricketclub\html\addmerch.php\" target=”_blank” >add merch</a></button><div>";


?>



 <!-- <button><a href="\cricket club\cricketclub\html\addmerch.php" target=”_blank” >add merch</a></button> -->

                <script src="../js/merch.js"></script>                
                  
</body>

                    <!-- <div class="footer-basic">
                      <footer>
                         
                          <ul class="list-inline">
                              <li class="list-inline-item"><a href="home.html">Home</a></li>
                              <li class="list-inline-item"><a href="#">About</a></li>
                              <li class="list-inline-item"><a href="#">Terms</a></li>
                              <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                          </ul>
                          <p class="copyright">Srujana and vaibhav © 2023</p>
                        </footer>
                    </div> -->
                  
</html>
