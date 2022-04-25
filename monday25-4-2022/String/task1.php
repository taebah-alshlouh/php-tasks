<?php
// a.	Convert the entered string to uppercase.
$str = "Original String";
$cap_str = strtoupper($str);
echo "<br>";
print ($cap_str);
echo "<br>";
// b.	Convert the entered string to lowercase.
$resStr = strtolower($str);
print_r($resStr); 
echo "<br>";

// c.	Make the first letter of the string uppercase.
$first_letter= ucfirst($str);
print_r($str);
echo "<br>";
// d.	Make the first letter of each word capitalized.
$capitalize= ucwords($str);
print_r($str);
///////////////////////////
echo "<br>";
echo str_repeat("*",50);
echo "<br>";
// 2.	Write a PHP script splitting the following numeric string to be a date format. 
$str1= '085119'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
////////////////////
echo "<br>";
echo str_repeat("*",50);
echo "<br>";
// 3.	Write a PHP script to check whether the sentence contains a specific word.
$word="Orange";
$String1="I am a full stack developer at Orange coding academy";
if(strpos($String1,$word) !== false){
    echo "Word Found!";
}
    else{
        echo "Word Not Found!";
    }
////////////////////
echo "<br>";
echo str_repeat("*",50);
echo "<br>";
// 4.	Write a PHP script to extract the file name from the URL. 

$path = 'www.orange.com/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; 

////////////////////
echo "<br>";
echo str_repeat("*",50);
echo "<br>";
// 5.	Write a PHP script to extract the username from the following email address.

$emailAddress='info@orange.com';
$user_name = strstr($emailAddress,"@", true);
echo $user_name."\n"; 
////////////////////
echo "<br>";
echo str_repeat("*",50);
echo "<br>";
// 6.	Write a PHP script to get the last three characters from the string. 
$str2='info@orange.com';
echo substr($str2,-3)."\n";

////////////////////
echo "<br>";
echo str_repeat("*",50);
echo "<br>";

// 7.	Write a PHP script to generate simple random passwords [do not use rand () function] from a given string. 
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n";

////////////////////
echo "<br>";
echo str_repeat("*",50);
echo "<br>";
// 8.	Write a PHP script to replace the first word of the sentence with another word.

$str3 ='That new trainee is so genius.';
echo preg_replace('/That/', 'The', $str3, 1)."\n"; 

////////////////////
echo "<br>";
echo str_repeat("*",50);
echo "<br>";
// 9.	Write a PHP script to find the first character that is different between two strings. 

$str4 = 'dragonball';
$str5 = 'dragonboll';
$str_pos = strspn($str4 ^ $str5, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str4[$str_pos], $str5[$str_pos]);
printf("\n");

////////////////////
echo "<br>";
echo str_repeat("*",50);
echo "<br>";
// 10.	Write a PHP script to put a string in an array, use the (var_dump) to view the array. 

$str6="Twinkle, twinkle, little star";
$array0 = explode("<br>", $str6);
var_dump($array0);

////////////////////
echo "<br>";
echo str_repeat("*",50);
echo "<br>";
// 11.	Write a PHP script to print the next letter of the inputted letter. 


function NextLetter($cha){
    $next_cha = ++$cha; 

if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
}
echo NextLetter('a')."<br>";
echo NextLetter('z');
////////////////////
echo "<br>";
echo str_repeat("*",50);
echo "<br>";
// 12.	Write a PHP script to insert a string at the specified position in a given string. 

function NewStr($original_string,$string_to_insert,$insert_pos){
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";
}
echo NewStr('The brown fox','quick',4)."<br>";

$s = 'The quick brown fox';
$arr7 = explode(' ',trim($s));
echo $arr7[0]."\n";
////////////////////
echo "<br>";
echo str_repeat("*",50);
echo "<br>";
// 13.	Write a PHP script to remove zeroes from the given number. 

$x = '000065722.24';
$str8 = ltrim($x, '0');
echo $str8."\n";

////////////////////
echo "<br>";
echo str_repeat("*",50);
echo "<br>";
//14.	Write a PHP script to remove part of a string. 

$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";

////////////////////
echo "<br>";
echo str_repeat("*",50);
echo "<br>";
//15.	Write a PHP script to remove trailing dashes from a string. 

$tra_str = 'The quick brown fox jumps over the lazy dog///';
echo rtrim($tra_str, '/')."\n";

////////////////////
echo "<br>";
echo str_repeat("*",50);
echo "<br>";
// 16.	Write a PHP script to remove Special characters from the following string. 

$rem_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $rem_str)."\n";

////////////////////
echo "<br>";
echo str_repeat("*",50);
echo "<br>";
//17.	Write a PHP script to select first 5 words from the following string. 

$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";

////////////////////
echo "<br>";
echo str_repeat("*",50);
echo "<br>";
// 18.	Write a PHP script to remove comma(s) from the following numeric string.

$str9 = "2,543.12";
$x = str_replace( ',', '', $str9);
if( is_numeric($x))
  {
  echo $x."\n";
  }

////////////////////
echo "<br>";
echo str_repeat("*",50);
echo "<br>";
// 19.	Write a PHP script to print letters from 'a' to 'z'. 

for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x)."\n";

////////////////////
echo "<br>";
echo str_repeat("*",50);
echo "<br>";
?>