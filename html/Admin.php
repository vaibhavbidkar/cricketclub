<?php  
$conn=mysqli_connect("localhost","root","","cricketclub");
$query="SELECT * FROM users";
$result=mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2 class="text-center">Admin</h2>
    <br>

<table class="table table-bordered text-center">
        <tr class="bg-dark text-white">
          <td>Name</td>
          <td>Team Name</td>
          <td>Email</td>
          <td>Phone</td>
         <td>Delete</td>
        </tr>
        <tr>
  <?php
  
   while( $row=mysqli_fetch_assoc($result)){;
    
  ?>

  <td><?php echo $row['name'] ?></td>
  <td><?php echo $row['teamname'] ?></td>
  <td><?php echo $row['email'] ?></td>
  <td><?php echo $row['phone'] ?></td>
<form action="deleteusers.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
<td><input type="submit" class="btn btn-danger" value="Delete" name="delete"></td>

</form> 
  
        </tr>
        <?php }?>
       </table>
</body>
</html>