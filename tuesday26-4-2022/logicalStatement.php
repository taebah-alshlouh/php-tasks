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

if ($units <=50) {
    $units=$units*2.50;
    echo "The total is:".$units."<br>";
}
else if($units>50 && $units <=100){
    $units=$units*5.00;
    echo "The total is:".$units."<br>";
}
elseif($units>100 && $units <=250){
    $units=$units*6.20;
    echo "The total is:".$units."<br>";
}else{
    $units=$units*7.50;
    echo "The total is:".$units."<br>";
}
}
monthly_electricity_bill(50);
monthly_electricity_bill(100);
monthly_electricity_bill(101);
monthly_electricity_bill(51);
monthly_electricity_bill(251);

///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
 ////////////////////// 
//  9.	 Write php script to make a calculator, the calculator should contain the four main operations 
// e.	Addition
// f.	Subtraction
// g.	Multiplication
// h.	Division

function calculater($num1,$operation,$num2){
    $calclate;
switch ($operation) {
    case '+':
        $calclate=$num1+$num2;
        echo "The result of the addition operation is:".$calclate."<br>";
        break;
    case '-':
        $calclate=$num1-$num2;
        echo "The result of the Subtraction operation is:".$calclate."<br>";
        break;
    case '*':
        $calclate=$num1*$num2;
        echo "The result of the Multiplication operation is:".$calclate."<br>";
        break;
     case '/':
        $calclate=$num1/$num2;
        echo "The result of the Division operation is:".$calclate."<br>";
        break;
}
}

calculater(5,"+",5);
calculater(7,"-",2);
calculater(4,"*",2);
calculater(7,"/",2);

 ///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
 //////////////////////
//  10.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.
// Sample Input: 15
// Sample Output: ‘is no eligible to vote’

function check_voteAge($age){
    if ($age>= 18) {
        echo "is eligible to vote"."<br>";
    }
    else{
        echo "is no eligible to vote"."<br>";
    }
}
check_voteAge(18);
check_voteAge(17);

 ///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
 //////////////////////
//  11.	Write php script  to check whether a number is positive, negative or zero
// Sample Input: -60
// Sample Output: ‘Negative’

function number_check($number){
  if($number==0){
      echo "Zero"."<br>";
  }
  elseif ($number>0) {
    echo "positive"."<br>";
  }
  elseif($number<0)
  {
    echo "negative"."<br>";
  }
} 
number_check(-60);
number_check(0);
number_check(60);



 
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

function grade($arr){
    $sum=array_sum($arr);
    $num=count($arr);
    $average=($sum)/$num;
    $grade;
  if ($average<60) {
    $grade="F";
    echo "The Grade is: ".$grade."<br>";
  }
  elseif($average<70){
  $grade="D";
  echo "The Grade is: ".$grade."<br>";
  }
  elseif($average<80){
    $grade="C";
    echo "The Grade is: ".$grade."<br>";
    }
  elseif($average<90){
      $grade="B";
      echo "The Grade is: ".$grade."<br>";
        }
  elseif($average<100){
    $grade="A";
    echo "The Grade is: ".$grade."<br>";
    }   
}

grade(array(60,86,95,63,55,74,79,62,50));
grade(array(81,92,85,89,87,84,86,82,86));
grade(array(95,92,95,91,98,94,96,94,93));
grade(array(81,78,60,87,77,60,86,65,86));
 ///////////////////////
 echo "<br>".str_repeat("*--*--*",15)."<br>";
 //////////////////////
?>