<?php  
include('config.php');
// Check connection
if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
  }
  $sql = "DELETE FROM prod WHERE id=30";

if ($con->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $con->error;
}

$con->close();



 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="products.php">View products</a>
</body>
</html>