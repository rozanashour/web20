<?php 
// handle reqeset
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $Password = $_POST["password"];
    // $email = $_POST["email"];
    // if(isset($_POST['agree'])){
    //     $agree= true;
    // }else{
    //     $agree = false;
     }

    // التحقق
    if(isset($_POST["password"])&&($_POST["email"])){
        $password = ($_POST["password"]);
        $email = ($_POST["email"]);
        if(empty($email)&&empty($password)){
          if(filter_var($email,FILTER_VALIDATE_EMAIL)){}
        }
  
      }




 
?>