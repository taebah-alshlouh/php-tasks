<?php
// 1.	Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the start and end position. Expected Output: 1-2-3-4-5-6-7-8-9-10
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
// Expected Output:  total as a number 
$sum = 0;
for($x=1; $x<=30; $x++)
{
$sum +=$x;
}
echo "The sum of the numbers from '0' to '30' is : ($sum)"."\n";
/////////////////////////
echo "<br>".str_repeat("*",50)."<br>";
/////////////////////////
// 3.	Create a script to generate the following pattern, using the nested for loop. 
// Expected Output:
// A A A A A 
// A A A B B 
// A A C C C 
// A D D D D 
// E E E E E
for ($i=0; $i <5 ; $i++) {
  for ($n=0; $n <5 ; $n++) { 
      if($i == 1 && $n>=3)
       {
      echo " B ";          
       }
       elseif($i == 2 && $n>=2)
       {
         echo " C ";
       }
       elseif($i == 3 && $n>=1)
       {
         echo " D ";
        }
       elseif($i == 4)
       {
        echo " E ";
       }
       else
       {
        echo " A ";
       }    
  }
  echo "<br>";
}

////////////////
echo "<br>".str_repeat("*",50)."<br>";
////////////////
// 4.	Create a script to generate the following pattern, using the nested for loop.
// Expected Output:
// 1 1 1 1 1 
// 1 1 1 2 2 
// 1 1 3 3 3 
// 1 4 4 4 4 
// 5 5 5 5 5
for ($i=0; $i < 5  ; $i++) { 

  for ($x=0; $x < 5 ; $x++) { 
      if($i == 1 && $x>=3)
      {
          echo " "."2"." ";
      }
      elseif($i == 2 && $x>=2)
      {
          echo " "."3"." ";
      }
      elseif($i == 3 && $x>=1)
      {
          echo " "."4"." ";
      }
      elseif($i == 4 )
      {
          echo " "."5"." ";
      }
      else
      {
          echo " "."1"." ";
      }
  }
  echo "<br>";
}
////////////////
echo "<br>".str_repeat("*",50)."<br>";
////////////////
// 5.	Create a script to generate the following pattern, using the nested for loop. 
// Expected Output:
// 1 0 0 0 0 
// 0 2 0 0 0 
// 0 0 3 0 0 
// 0 0 0 4 0 
// 0 0 0 0 5
for ($i=1; $i <=5 ; $i++) { 
  for ($c=1; $c <=5 ; $c++) { 
    if ($c==$i) {
      echo $i;
    }
    else
    {
      echo " 0 ";
    }
    
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
// Sample output:
// 1
// 2 3
// 4 5 6
// 7 8 9 10
// 11 12 13 14 15
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
// Expected Output:
//      A 
//     A B 
//    A B C 
//   A B C D 
//  A B C D E 
//   A B C D 
//    A B C 
//     A B 
//      A

$space = 0;
$letters = 4;
for ($i=0; $i < 5 ; $i++) { 
 echo "<pre>";
    for ($x=$space; $x < 4; $x++ ) { 
       echo " ";
       
    }
    $letter = "A";
    for ($y=$letters; $y <=4 ; $y++) { 
        
        
        echo $letter . " ";
        $letter++;
    }
    echo "</pre>";
 
    $space++;
    $letters--;
}
$space1 = 0;
$letters1 = 3;
for ($i=0; $i < 5 ; $i++) { 
    echo "<pre>";
       for ($x=$letters1; $x < 4; $x++ ) { 
          echo " ";
          
       }
       $letter = "A";
       for ($y=$space1; $y <=3 ; $y++) { 
           echo $letter . " ";
           $letter++;
       }
       echo "</pre>";
    
       $space1++;
       $letters1--;
   }

/////////////////
echo "<br>".str_repeat("*",50)."<br>";
/////////////////
?>