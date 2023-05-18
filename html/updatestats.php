<style>

table {
  border-collapse: collapse;
  width: 100%;
}

/* Style for table rows */
tr {
  background-color: #eaf2f8; /* Light gray background */
  
}

/* Alternate row style */
tr:nth-child(even) {
  background-color: #cddfeb; /* Slightly darker gray background */
}

/* Hover effect for rows */
tr:hover {
  background-color: #dcdcdc; /* Even darker gray background on hover */
}

/* Border styles for table */
td, th {
  border: 1px solid #ccc;
  padding: 8px;
}

/* Header styles */
th {
  background-color: #f2f2f2; /* Light gray background for headers */
  font-weight: bold;
  text-align: left;
}

/* Center-align text in specific column */
td.column-center {
  text-align: center;
}

/* Right-align text in specific column */
td.column-right {
  text-align: right;
}


input[type="text"] {
  border: none;
  background-color: #f8f8f8;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Add hover effect */
input[type="text"]:hover {
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Add focus effect */
input[type="text"]:focus {
  outline: none;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 0 0 2px #387eff;
}

/* Placeholder text styles */
input[type="text"]::placeholder {
  color: #999;
  opacity: 1; /* Ensures placeholder is visible */
}

/* Styling for disabled input */
input[type="text"]:disabled {
  background-color: #f2f2f2;
  color: #999;
}
/* Remove default button styles */
input[type="submit"] {
  border: none;
  background-color: #387eff;
  color: #fff;
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Add hover effect */
input[type="submit"]:hover {
  background-color: #2468e6;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Add focus effect */
input[type="submit"]:focus {
  outline: none;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 0 0 2px #387eff;
}



/* Styling for disabled button */
input[type="submit"]:disabled {
  background-color: #999;
  cursor: not-allowed;
}

</style>




<?php 

$conn=mysqli_connect("localhost","root","","cricketclub");
   
   $playerID=$_GET['player_id'];
   $query = "SELECT * FROM playerinformation WHERE ID = $playerID";
   $data = mysqli_query($conn,$query);
   $result = mysqli_fetch_assoc($data);
   
if(!$conn)
{   
	die("Connection Failed:" . mysqli_connect_error());

}







echo"<form action=\"./updatestats.php?player_id={$result['ID']}\"  method=\"post\"  autocomplete=\"off\" enctype=\"multipart/form-data\">
<table border=\"1\" align=\"center\">
    <tr>
        <td>
        <label >Total Matches Played</label></td>
        <td><input type=\"text\" name =\"matches\"></td>
    </tr>
    <tr>
        <td>
        <label >Total Runs</label></td>
        <td><input  type=\"text\" name=\"totalruns\"></td>
    </tr>

    <tr>
        <td>
        <label >Not Outs</label></td>
        <td><input type=\"text\" name=\"notouts\"></td>
    </tr>
    <tr>
        <td>
        <label >Balls Faced</label></td>
        <td><input type=\"text\" name=\"ballsfaced\"></td>
    </tr>


    <tr>
        <td>
        <label >Balls Bowled</label></td>
        <td><input type=\"text\" name=\"ballsbowled\"></td>
    </tr>
    <tr>
        <td>
        <label >Runs Given</label></td>
        <td><input type=\"text\" name=\"runsgiven\"></td>
    </tr>

    <tr>
        <td>
        <label >Wickets Taken</label></td>
        <td><input type=\"text\" name=\"wickets\"></td>
    </tr>

    <tr class=\"hii\">
        <td colspan=\"2\"  ><input type=\"submit\"  name=\"update\" value=\"Submit\" style=\"font-size:20px\"></td>
    </tr>
</table>
</form>";

 
if(isset($_POST['update']))


{   

    
     $id=$_GET["player_id"];
     
     
     $total_matches=$_POST['matches'];
     $total_runs = $_POST['totalruns'];
     $not_outs = $_POST['notouts'];
     $balls_faced = $_POST['ballsfaced'];
     $balls_bowled = $_POST['ballsbowled'];
     $runs_given = $_POST['runsgiven'];
     $total_wickets = $_POST['wickets'];

$sql="UPDATE `playerinformation` SET `TOTAL_MATCHES`='$total_matches',`TOTAL_RUNS`='$total_runs',`NOT_OUTS`='$not_outs',`BALLS_FACED`='$balls_faced',`BALLS_BOWLED`='$balls_bowled',`RUNS_GIVEN`='$runs_given',`TOTAL_WICKETS`='$total_wickets' WHERE `ID`='$id'";

$result1=mysqli_query($conn,$sql);
if($result1)
{
    echo "<script> alert('updated sucessfully')</script>";
    // header("location:stats.php");
}
else{
    echo "<script> alert('not deleted ')</script>";
}

}




?>