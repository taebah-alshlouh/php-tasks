<?php
// 1.	Write a PHP script to see if the specified year is a leap year or not.
$year=2013;
if($year% 400== 0)
 echo "It is a leap year";
 elseif($year% 100== 0)
 echo "This year is not a leap year";
 elseif($year% 4 == 0)
 echo "It is a leap year";
 else
 echo"This year is not a leap year";
 ///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
//////////////////////
///2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.

$tmp= 27;
if ($tmp > 20) {
    echo "It is summer time! ";
}
else
{
    echo"we are in winter ";
}
 ///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
//////////////////////
// 3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
$firstNum=2;
$secNum=2;
if ($firstNum == $secNum) {
    $cal=($firstNum+$secNum)*3;
    echo $cal; 
}else{
    echo "the are not same";
}
 ///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
//////////////////////
// 4.	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false

function check_the_sum($x, $y) 
{
    if ($x + $y == 30) {
        return true;
    }
    else{
        return false;
    }
}
var_dump(check_the_sum(10, 10));
 ///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
//////////////////////
// 5.	Write in PHP script to check if the given positive number is a multiple of 3.
// $num=20;
function test($num){
if ($num %3==0 && $num>=0) 
    echo "true"."<br>";
else
    echo "false"."<br>";
}
test(20);
test(-3);
test(3);
 ///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
//////////////////////
// 6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
function check_range($number){
if ($number>= 20 && $number<= 50)
    echo "true"."<br>";
else
echo "false"."<br>";
}
check_range(50);
check_range(110);
check_range(15);
 ///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
//////////////////////
// 7.	Write PHP script to find the largest number between the three integers
function largest($x, $y, $z) {
    $max = $x;
    if ($x >= $y && $x >= $z)
      $max = $x;
    if ($y >= $x && $y >= $z)
      $max = $y;
    if ($z >= $x && $z >= $y)
      $max = $z;
    echo $max."<br>";
  } 
  largest(100, 50, 25);
  largest(50, 50, 25);
 ///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
//////////////////////
// 8.	Write PHP script to calculate the monthly electricity bill according to these rules





///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
 ////////////////////// 
//  9.	 Write php script to make a calculator, the calculator should contain the four main operations 




 
 ///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
 //////////////////////
//  10.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.




 
 ///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
 //////////////////////
//  11.	Write php script  to check whether a number is positive, negative or zero
 
 
 
 ///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
 //////////////////////
//  12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 




 ///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
 //////////////////////
?>