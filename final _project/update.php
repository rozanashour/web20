<?php
include('config.php');
// Check connection
if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
  }
  $sql = "UPDATE prod SET name='balck watch' WHERE id=27";

if ($con->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();



?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <center>
        <div class="main">
            <form action="#. '?id=' . $_GET['id']; ?>"enctype="multipart/form-data">
                <h2>  Update Products </h2>
               ID     <input type="text"  value="<?= ((isset($row)) ? $row["id"] : "" ) ?>" name= "id" >
                <br>
                <br>
               Name   <input type="text" value="<?= ((isset($row)) ? $row["name"] : "" ) ?>" name= "name"  >
                <br>
                <br>
               Price  <input type="text" value="<?= ((isset($row)) ? $row["price"] : "" ) ?>" name= "price" >
                <br>
                <br>
                <input type="file"  id ="file" name="image" style='display:none;'>
                <label for="file"> Update product image </label> 
                <button name ="update" type = "submit"> Update Products </button>
                <br><br>
                <a href ="products.php">View all products</a> <br> <br>
                <br> <br> <br> <br> 
</form>
</div>
<p>Developer By:Rozan Ali & Amira faris</p>
</center>
</body>
</html>