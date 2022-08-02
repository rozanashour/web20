<?php
// if
//  $t = date("H");
// if ($t < "20") {
//   echo "Have a good day!";
// }
// //if else
// $t = date("H");
// if ($t < "10") {
//   echo "Have a good day!";
// } else {
//   echo "Have a good night!";
// }
// // if else if
// $t = date("H");
// if ($t < "10") {
//   echo "Have a good morning!";
// } elseif ($t < "5") {
//   echo "Have a good day!";
// } else {
//   echo "Have a good night!";
// }

//switch 
 //example 1
 $favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
// example 2
switch
 ($color) {
  
case
 "red":
    echo "Hello";
    break;
case
 "green":
    echo "Welcome";
    break;
 }
 // example 3 
 $t = 10;
 switch($t){
  case 9 :
    echo"good day";
    break;
    case 14:
      echo "hi ";
      break;
      case 10:
        echo "its correct answer";
        break;
        default:
        echo"yes";

 }
 ?>