<?php
for ($x = 1; $x <= 10; $x++) {
    if($x<=10){
        echo $x;
    if ($x<10){
        echo"-";
    }    
    } else {
        echo $x."\n";
    }
}
for ($i=1; $i<=5; $i++)	
{	 
for($j=1;$j<=$i;$j++)	  
{	  	
echo " * ";	 
}	  	
echo "<br/>";   	
} 

for ($i=1; $i <=5 ; $i++) { 
    for ($x=6-$i; $x >=1 ; $x--) { 
        echo "*"."\t";
    }
    echo "<br/>";
} 

// حرف ال R 
// for ($row=0; $row<7; $row++)
// {
//   for ($column=0; $column<=7; $column++)
// 	{
//   if ($column == 1 or (($row == 0 or $row == 3) and $column > 1 and $column < 5) or ($column == 5 and $row != 0 and $row < 3) or ($column == $row - 1 and $row > 2))
//             echo "*";    
//         else  
//             echo " ";     
// 	}        
//   echo "\n";
// }

//Factorial 
// ex 1 
$n = 3;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "The factorial of  $n = $x"."\n"."<br>";
// //ex 2
$n = 5;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "The factorial of  $n = $x"."\n"."<br>";
// //ex 3
$n = 4;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "The factorial of  $n = $x"."\n"."<br>";
// ex 
 $x = 5;
while($x <= 15) {
  echo "The number is:  $x <br>";
  $x++;
}
 ?>