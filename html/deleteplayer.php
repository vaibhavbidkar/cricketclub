<?php
$conn=mysqli_connect("localhost","root","","cricketclub");

$id=$_GET["player_id"];
$sql="delete from playerinformation where ID='$id'";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "<script> alert('deleted sucessfully')</script>";
    header("location:players.php");
}
else{
    echo "<script> alert('not deleted ')</script>";
}
?>