<?php
// Array

// index array
$arr = array('A' ,15,30.5,"rozan");
echo $arr[2];

// //multidimantional arrays
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

 //Assoicative array
 $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
 echo "Peter is " . $age['Peter'] . " years old.";

// دوال مصفوفة 
 $car = array("volvo","bmw","toyota");
sort($car);
 print_r($car);

  $car = array("volvo","bmw","toyota");
 rsort($car);
 print_r($car);

 $car = array("volvo","bmw","toyota");
 ksort($car);
  print_r($car);

  $car = array("volvo","bmw","toyota");
 krsort($car);
 print_r($car);
 ?>