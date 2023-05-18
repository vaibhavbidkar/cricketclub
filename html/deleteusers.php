<?php
$conn=mysqli_connect("localhost","root","","cricketclub");
if(isset($_POST["delete"])){
$id=$_POST["id"];
$sql="delete from users where ID='$id'";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "<script> alert('deleted sucessfully')</script>";
    header("location:Admin.php");
}
else{
    echo "<script> alert('nottt deleted ')</script>";
}
}
?>