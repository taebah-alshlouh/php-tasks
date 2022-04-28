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
// a.	For first 50 units – 2.50 JOD/Unit
// b.	For next 100 units – 5.00 JOD/Unit
// c.	For next 100 units – 6.20 JOD/Unit
// d.	For units above 250 – 7.50 JOD/Unit
function monthly_electricity_bill($units){
if ($units ==50) {
    # code...
}
}
monthly_electricity_bill($units)


///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
 ////////////////////// 
//  9.	 Write php script to make a calculator, the calculator should contain the four main operations 
// e.	Addition
// f.	Subtraction
// g.	Multiplication
// h.	Division



 
 ///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
 //////////////////////
//  10.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.
// Sample Input: 15
// Sample Output: ‘is no eligible to vote’




 
 ///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
 //////////////////////
//  11.	Write php script  to check whether a number is positive, negative or zero
// Sample Input: -60
// Sample Output: ‘Negative’

 




 
 ///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
 //////////////////////
//  12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

// Sample Inputs: [60,86,95,63,55,74,79,62,50]
// Sample Output: ‘D’
// <60	F
// <70	D
// <80	C
// <90	 B
// <100 A





 ///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
 //////////////////////
?>