<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="./addmerchform.php" method="post"  autocomplete="off" enctype="multipart/form-data">
        <table border="1" align="center">
			<tr>
                <td>
                <label style="color : goldenrod ">PRODUCT NAME</label></td>
                <td><input style="background :#011f4b ; color: goldenrod" type="text" name="name"></td>
            </tr>
            <tr>
                <td>
                <label style="color : goldenrod ">PRODUCT IMAGE</label></td>
                <td><input type="file"  style="background :#011f4b; color: goldenrod"name="img" accept=".jpg, .jpeg, .png"></td>
            </tr>
            <tr>
                <td>
                <label style="color : goldenrod ">PRICE</label></td>
                <td><input  style="background :#011f4b ; color: goldenrod" type="text" name="price"></td>
            </tr>
            
            <tr>
                <td>
                <label style="color : goldenrod ">DESCRIPTION</label></td>
                <td><input style="background :#011f4b ; color: goldenrod" type="text" name="desc"></td>
            </tr>
            
            <tr>
                <td colspan="2"  ><input style="color : goldenrod ; background :#011f4b" type="submit" name="save1" value="Submit" style="font-size:20px"></td>
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

if(isset($_POST['save1']))
{	
	echo "<h1>hii</h1>";
	 $price = $_POST['price'];
	 $desc = $_POST['desc'];
     $name =$_POST['name'];


	 if($_FILES["img"]["error"] == 4){
		echo
		"<script> alert('Image Does Not Exist'); </script>"
		;
	  }
	  else{
		$fileName = $_FILES["img"]["name"];
		$fileSize = $_FILES["img"]["size"];
		$tmpName = $_FILES["img"]["tmp_name"];
	
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
		  move_uploaded_file($tmpName, 'C:/xampp/htdocs/cricket club/cricketclub/img/'.$newImageName);
		  $query = "INSERT INTO merchandise (ID,PRODUCT_NAME,PRODUCT_IMAGE,PRICE,DESCRIPTION)
		  VALUES ('','$name','$newImageName','$price','$desc')";
		  mysqli_query($conn, $query);
		  echo
		  "
		  <script>
			alert('Successfully Added');
		  </script>
		  ";
		}
	  }
	}
	?>
	

