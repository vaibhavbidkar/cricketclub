<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <script src="/js/addPlayer.js" defer></script>
    <title>Document</title>
</head>
<body>

<!-- <style>
    body{

background :	#03396c;
}

</style> -->

     <h1>ADD PLAYER</h1>
    <form action="./addplayerform.php" method="post"  autocomplete="off" enctype="multipart/form-data">
        <table border="1" align="center">
            <tr>
                <td>
                <label style="color : goldenrod ">Enter Player Name</label></td>
                <td><input style="background :#011f4b; color: goldenrod" type="text" name="name"></td>
            </tr>
            <tr>
                <td>
                <label style="color : goldenrod ">Age</label></td>
                <td><input  style="background :#011f4b; color: goldenrod" type="text" name="age"></td>
            </tr>
            <tr>
                <td>
                <label style="color : goldenrod ">Photo</label></td>
                <td><input type="file"  style="background :#011f4b; color: goldenrod" name="image" accept=".jpg, .jpeg, .png"></td>
            </tr>
            <tr>
                <td>
                <label style="color : goldenrod ">Jersey Number</label></td>
                <td><input style="background :#011f4b; color: goldenrod" type="text" name="jersey"></td>
            </tr>
            
            <tr>
                <td>
                <label style="color : goldenrod ">Role</label></td>
                <td><input  style="background :#011f4b; color: goldenrod"type="radio" name="role" value="batsman">Batsman </td>
                <td><input  style="background :#011f4b; color: goldenrod"type="radio" name="role" value="bowler">Bowler </td>
                <td><input  style="background :#011f4b; color: goldenrod"type="radio" name="role" value="all rounder">All Rounder </td>               
            </tr>

            <tr>
                <td>
                <label style="color : goldenrod ">Total Matches Played</label></td>
                <td><input style="background :#011f4b; color: goldenrod" type="text" name="matches"></td>
            </tr>
            
            <tr>
                <td>
                <label style="color : goldenrod ">Total Runs</label></td>
                <td><input style="background :#011f4b; color: goldenrod" type="text" name="totalruns"></td>
            </tr>

            <tr>
                <td>
                <label style="color : goldenrod ">Not Outs</label></td>
                <td><input style="background :#011f4b; color: goldenrod" type="text" name="notouts"></td>
            </tr>
            


            <tr>
                <td>
                <label style="color : goldenrod ">Balls Faced</label></td>
                <td><input style="background :#011f4b; color: goldenrod" type="text" name="ballsfaced"></td>
            </tr>


            <tr>
                <td>
                <label style="color : goldenrod ">Balls Bowled</label></td>
                <td><input style="background :#011f4b; color: goldenrod" type="text" name="ballsbowled"></td>
            </tr>
            <tr>
                <td>
                <label style="color : goldenrod ">Runs Given</label></td>
                <td><input style="background :#011f4b; color: goldenrod" type="text" name="runsgiven"></td>
            </tr>

            <tr>
                <td>
                <label style="color : goldenrod ">Wickets Taken</label></td>
                <td><input style="background :#011f4b; color: goldenrod" type="text" name="wickets"></td>
            </tr>

            <tr>
                <td colspan="2"  ><input type="submit" style="color : goldenrod ; background :#011f4b" name="save" value="Submit" style="font-size:20px"></td>
            </tr>
        </table>
    </form>
</body>
</html>


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
if(isset($_POST['save']))
{	


	 $first_name = $_POST['name'];
     $age = $_POST['age'];
	 $jersey = $_POST['jersey'];
	 $role = $_POST['role'];
     $total_matches=$_POST['matches'];
     $total_runs = $_POST['totalruns'];
     $not_outs = $_POST['notouts'];
     $balls_faced = $_POST['ballsfaced'];
     $balls_bowled = $_POST['ballsbowled'];
     $runs_given = $_POST['runsgiven'];
     $total_wickets = $_POST['wickets'];

	 if($_FILES["image"]["error"] == 4){
		echo
		"<script> alert('Image Does Not Exist'); </script>"
		;
	  }
	  else{
		$fileName = $_FILES["image"]["name"];
		$fileSize = $_FILES["image"]["size"];
		$tmpName = $_FILES["image"]["tmp_name"];
		$validImageExtension = ['jpg', 'jpeg', 'png'];
		$imageExtension = explode('.', $fileName);
		$imageExtension = strtolower(end($imageExtension));
		if ( !in_array($imageExtension, $validImageExtension) ){
		  echo
		  "
		  <script>
			alert('Invalid Image Extension');
		  </script>
		  ";
		}
		else if($fileSize > 10000000000000){
		  echo
		  "
		  <script>
			alert('Image Size Is Too Large');
		  </script>
		  ";
		}
		else{
		  $newImageName = uniqid();
		  $newImageName = $newImageName.'.'.$imageExtension;
	      echo $newImageName;
		  move_uploaded_file($tmpName, "C:/xampp/htdocs/cricket club/cricketclub/img/".$newImageName);
		  $query = "INSERT INTO playerinformation (ID,NAME,AGE,PHOTO,JERSEY_NO,ROLE,TOTAL_MATCHES,TOTAL_RUNS,NOT_OUTS,BALLS_FACED,BALLS_BOWLED,RUNS_GIVEN,TOTAL_WICKETS)
		  VALUES ('','$first_name','$age','$newImageName','$jersey','$role','$total_matches',' $total_runs','$not_outs','$balls_faced','$balls_bowled','$runs_given','$total_wickets')";
		  mysqli_query($conn, $query);
		  echo
		  "
		  <script>
			alert('Successfully Added');
		  </script>

          <h1><a href=\"./players.php\">go back</a></h1>
		  ";
		}
	  }
	}
	?>
	