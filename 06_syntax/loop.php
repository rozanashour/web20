<?php 
// for loop
//example 1
for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
  }
 // example 2
for
($i = 0; $i < 10; 
$i++
) {
 echo $i."<br>";
} 

// example 3 
$arr = ["element1","element2","element3","element4"];
for($i=0;$i<count($arr);$i++){
    echo $arr[$i]."<br>";
}
//example 4
$arr = ["orange","apple","banana","blueberry"];
for($i=0;$i<count($arr);$i++){
    echo $arr[$i]."<br>";
}
//foreach loop
// example 1
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
// example 2
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
// while loop
// example 1
$x = 0;
while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
}
// example 2 
$i = 1; 
while
 ($i < 6) 
{
  echo $i;
  $i++;
}
// do while loop 

// example 1
$x = 1;
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
// example 2 
$x = 6;
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>