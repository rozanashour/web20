<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop online</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="muiltpart/form-data">
                <h2>  Online shopping site</h2>
                <img src="roz.jpg"alt="logo" width="450px">
                <br>
                <br>
               Name   <input type="text" name="name">
                <br>
                <br>
               Price  <input type="text" name="price">
                <br>
                <br>
                <input type="file"  id ="file" name="image" style='display:none;'>
                <label for="file"> Choose a product image </label> 
                <button name ="upload"> product lift </button>
                <br><br>
                <a href ="products.php">View all products</a> <br> <br>
                <br> <br> <br> <br> 
</form>
</div>
<p>Developer By:Rozan Ali & Amira faris</p>
</center>
</body>
</html>