<?php 
//ex 1
function writeMsg() {
    echo "Hello world!"."<br>";
  }
  
  writeMsg();

  //ex2
  function addNumbers(float $a, float $b) : int {
    return (int)($a + $b);
  }
  echo addNumbers(1.2, 5.2)."<br>";
  // ex 3
  function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = IsPrime(6);
if ($a==0)
echo 'This is not a Prime Number.....'."<br>";
else
echo 'This is a Prime Number..'."<br>";

//ex 4 
function factorial_number($n)
{
  if($n ==0)
    {
	   return 1;
    }
  else 
    {	
	   return $n * factorial_number($n-1);
    }
	}
echo(factorial_number(5));
echo "<br>";
//ex 5 
function check_palindrome($string) 
{
  if ($string == strrev($string))
      echo "palindrome";
  else
  echo "notpalindrome";
	  
}
echo check_palindrome('madam')."<br>";
echo check_palindrome('meme')."<br>";

// ex6 
function reverse_string($str)
{
 $r = strlen($str);
 if($r == 1)
   {
    return $str;
   }
 else
   {
   return reverse_string(substr($str,1, $r)) . substr($str, 0, 1);
   }
}
echo(reverse_string('rozan'))."<br>";
echo(reverse_string('salma'))."<br>";
echo(reverse_string('amira'))."<br>";
echo(reverse_string('marwa'))."<br>";



?>