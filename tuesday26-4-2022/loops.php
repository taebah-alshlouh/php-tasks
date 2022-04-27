<?php
// 1.	Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the start and end position. 
for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x"."\n";
  }
}
////////////////////
echo "<br>".str_repeat("*",50)."<br>";
/////////////////////
// 2.	Create a script using a for loop to add all the integers between 0 and 30 and display the total. 
$sum = 0;
for($x=1; $x<=30; $x++)
{
$sum +=$x;
}
echo "The sum of the numbers 0 to 30 is $sum"."\n";
/////////////////////////
echo "<br>".str_repeat("*",50)."<br>";
/////////////////////////
// 3.	Create a script to generate the following pattern, using the nested for loop. 

for ($i=1; $i <=5 ; $i++) {
  $letters='A'; 
  for ($n=1; $n <=4 ; $n++) { 
      echo $letters++;
  }
  echo $letters."<br>";
}
////////////////
echo "<br>".str_repeat("*",50)."<br>";
////////////////
// 4.	Create a script to generate the following pattern, using the nested for loop. 
$n=1;
for ($i=0; $i <5 ; $i++) { 
   echo $n."   ";
  for ($c=0; $c <4 ; $c++) { 
    echo $n."  ";
  }
  $n++;
  echo "<br>";
}


////////////////
echo "<br>".str_repeat("*",50)."<br>";
////////////////
// 5.	Create a script to generate the following pattern, using the nested for loop. 
$n=1;
for ($i=0; $i <5 ; $i++) { 
   echo $n."   ";
  for ($c=0; $c <4 ; $c++) { 
    echo "0";
  }
  $n++;
  echo "<br>";
}
////////////////
echo "<br>".str_repeat("*",50)."<br>";
////////////////
// 6.	Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number.
$n = 5;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "$x";
////////////////
echo "<br>".str_repeat("*",50)."<br>";
////////////////
//7.	Write a program to calculate and print the Fibonacci sequence using a for loop.
// Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 

    $fib = array();
    $i;
    $n=9;
   $fib[0] = 0;
   $fib[1] = 1;
     echo  $fib[0].", ". $fib[1].", ";
    for ($i = 2; $i <= $n; $i++)
    {
        $fib[$i] = $fib[$i-1] + $fib[$i-2];
        echo $fib[$i].", ";
    }
  
/////////////////
echo "<br>".str_repeat("*",50)."<br>";
////////////////
// 8.	Write a program which will count the "c" characters in the text "Orange Coding Academy". 
$text="Orange Coding Academy";
$text1= strtolower($text);
echo substr_count($text1 ,"c");
////////////////
echo "<br>".str_repeat("*",50)."<br>";
////////////////
// 9.	Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cell spacing="0px" to the table tag. 
echo '<table style="border: 1px solid"cellpadding="3px" cell spacing="0px">';

for ($i=1; $i <=6 ; $i++) { 
  echo "<tr>";
  for ($x=1; $x <=5 ; $x++) { 
    echo '<td style="border: 1px solid">'.$i."*".$x."=".$i*$x."</td>";
  }
  echo "</tr>";
}
echo"</table>";
////////////////
echo "<br>".str_repeat("*",50)."<br>";
////////////////
//10.	Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "Fizz" instead of the number, and for multiples of five print "Buzz". For numbers that are multiples of both three and five, print "FizzBuzz".
 for ($i=1; $i <=50 ; $i++) { 
      if( $i%3 == 0)
      {
        echo  " Fizz "."\n";
      }
      else if ( $i%5 == 0 ) 
      {
        echo " Buzz"."\n";
      }
      else if ( $i%3 == 0 && $i%5 == 0 ) 
      {
        echo " FizzBuzz"."\n" ;
      }
      else
      {
        echo $i."\n";
      }
 }
 ////////////////////////
 echo "<br>".str_repeat("*",50)."<br>";
  ///////////////////////
//  11.	Write a PHP program to generate and display the first n lines of a Floyd triangle
$n=5;
$temp=1;
for ($i=$n; $i > 0; $i--) {
  for ($c=$i; $c <$n+1 ; $c++) { 
    echo $temp." ";
    $temp++;
  }
  echo "<br>";
}

/////////////////
echo "<br>".str_repeat("*",50)."<br>";
/////////////////
// 12.	Write a PHP program to print the following pattern. 



function print_pattern($num)
{
// Outer loop handles number of rows
for ($i = 1; $i <= $num; $i++)
{
// inner loop handles indentation
for($k = $num; $k > $i; $k-- )
{
// Print spaces
echo "  ";
}
// inner loop handles number of stars
for($j = 1; $j <= $i; $j++ )
{
// Print characters
echo chr(64+$j)." ";
}
for($j = $i-1; $j >= 1; $j-- )
{
// Print characters
echo chr(64+$j)." ";
}
// go to new line after each row pattern is printed
echo "<br>";
}
}
//Call function and send number of lines as parameter
$num = 5;
print_pattern($num);


/////////////////
echo "<br>".str_repeat("*",50)."<br>";
/////////////////
?>