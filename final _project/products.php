<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proudects</title>
    <style>
        h3{
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
        }
        .card{
            float: right;
            margin-top:5px;
            margin-left:5px ;
            margin-right: 10px ;
        }
        .card img{
            width:100%;
            height: 50px;

        }
        main{
            width: 30px;
        }
        </style>
</head>
<body>
    <center>
       <h3> View all products </h3>        
</center>
<?php
include('config.php');
$result = mysqli_query($con,"SELECT * FROM prod ");
while($row = mysqli_fetch_array($result)){
    echo
    "
    <center>
    <main>
    <div class='card' style='width: 15rem;'>
      <img src= '$row[image]'class='card-img-top' >
      <div class='card-body'>
        <h5 class='card-title'>$row[name]</h5>
        <p class='card-text'>$row[price]</p>
        <a href='delete.php? ID =$row[id]' class='btn btn-danger'> Delete product </a>
        <a href='update.php? ID =$row[id]' class='btn btn-primary'> Product modification </a>
    
      </div>
    </div>
    </main>
    </center>
    
    
    
  

    
    ";
}
?>
<script type="text/javascript">
	$('#delete-btn').click(function (event) {
		event.preventDefault();

		var result = confirm("Are you sure?");

		if (result == true) {
			$(this).parent('form').submit();
		}
	});
</script>


</body>
</html>