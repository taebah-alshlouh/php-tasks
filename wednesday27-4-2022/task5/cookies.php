<?php
// 9.	Creating Cookies include cookie_name, cookie_value, [expiry_time], [cookie_path], [domain], [secure], [httponly] . Then Retrieve all cookies value after that delete the cookies . 
// setcookie("user", "Taebah", time()+(120), "/",true,true);
// if( isset($_COOKIE["user"]))
//             echo "Welcome " . $_COOKIE["user"] . "<br />";
         
//          else
//             echo "Sorry... Not recognized" . "<br />";


// echo $_COOKIE["user"]."<br>";
// setcookie("user", "Taebah", time()- (60), "/",true,true);


setcookie("user","Taebah",time()+(120),"/","",true,true);
echo $_COOKIE["user"]."<br>";
echo isset($_COOKIE["user"]);

// setcookie("user","Taebah",time()-(120),"/","",true,true);

?>
