<?php
// 1.	Write a script to generate the following paragraph 
$color=array("red","green","white");
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the ".$color[0]." carpet, the ".$color[1]." lawn, the ".$color[2]." house, the leaden sky. The new president and his first lady. - Richard M. Nixon<br>";

echo str_repeat("-",50)."<br>";

// 2. Write a PHP script that will display the colors as unordered list :
sort($color);
echo "<ul>";
foreach ($color as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
echo str_repeat("-",50)."<br>";

// 3.Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

function display($c){
asort($c);
foreach($c as $country => $capital)
{
echo "The capital of $country is $capital"."\n" ;
echo "<br>";
}
}
display($cities);

echo str_repeat("-",50)."<br>";

$color = array (4 => 'white', 6 => 'green', 11=> 'red');

function First_element($array){
echo reset($array)."\n";
}
First_element($color);

echo "<br>";
echo str_repeat("-",50)."<br>";
// 5.	Write a PHP script that inserts a specific new item in an array in any position
$original = array( '1','2','3','4','5' );
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
foreach ($original as $x) 
{echo "$x ";}

echo "<br>";
echo str_repeat("-",50)."<br>";
// 6.	Write a PHP script to sort the following associative array depending on the key value [asc] : 
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $value) {
    echo $key."=".$value."<br>";
}
echo "<br>";
echo str_repeat("-",50)."<br>";
// 7.	Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures 
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"."<br>"; 
sort($temp_array);
echo " List of seven lowest temperatures :";
for ($i=0; $i< 7; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>";
echo "List of seven highest temperatures :";
for ($i=($temp_array_length-7); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
//////////////////////
echo "<br>";
echo str_repeat("-",50)."<br>";
// 8.	Write a PHP program to merge the following two arrays. Sample Input: 

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$result = array_merge($array1, $array2);
foreach ($result as $key => $value) {
    echo "[$key] => $value <br>";
}
////////////////////////
echo str_repeat("-",50)."<br>";
// 9.	Write a PHP function to change the following array's and convert all the strings to upper case.Sample Input:
$colors = array("red","blue", "white","yellow");
function myfunction($v) 
{
$v=strtoupper($v);
  return $v."<br>";
}
print_r(array_map("myfunction",$colors));
/////////////////////////////////////
echo "<br>";
echo str_repeat("-",50)."<br>";
// 10.	Write a PHP function to change the following array's and convert all the strings to lower case. 
function changeToLowerCase($v){
    $v=strtolower($v);
    return $v."<br>";
}
print_r(array_map("changeToLowerCase",$colors));
/////////////////////////////////////
echo "<br>";
echo str_repeat("-",50)."<br>";
// 11.	 Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.
echo implode(",",range(200,250,4))."\n";
/////////////////////////////////////
echo "<br>";
echo str_repeat("-",50)."<br>";
// 12.	Write a PHP script to get the shortest/longest string length from an array. 
$words =  array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $words);
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';
/////////////////////////////////////
echo "<br>";
echo str_repeat("-",50)."<br>";
// 13.	Write a PHP script to generate unique random 10 numbers within a specific range. 
$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}
echo "\n";
/////////////////////////////////////
echo "<br>";
echo str_repeat("-",50)."<br>";
// 14.	Write a PHP script that returns the lowest integer in the array  that is not 0. 

function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero(array( 2, 0, 10, 12, 6))."\n");

?>