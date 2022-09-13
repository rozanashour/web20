<?php
include('config.php');
// handell
// if($_SERVER['REQUEST METHOD']=='POST'){
//     $ID=$_POST['id'];
//     $NAME=$_POST['name'];
//     $PRICE=$_POST['price'];
//     $IMAGE=$_FILES['image'];
// }
// رفع البيانات وتخزينها في داتابيز
if(isset($_POST['upload'])){
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location=$_FILES['image']['tmp_name'];
    $image_name=$_FILES['image']['name'];
    $image_up="./images/".$image_name ;
    $insert = "INSERT INTO prod (name,price,image) VALUES ('$NAME','$PRICE','$image_up')";

    mysqli_query($con,$insert);

    if(move_uploaded_file($image_location,"./images/".$image_name)){
    echo"<script>alert(تم رفع بنجاح)</script>";
    }else{
    echo"<script>alert(لم يتم رفع بنجاح)</script>";
    }

    header('location:index.php');
}

?>