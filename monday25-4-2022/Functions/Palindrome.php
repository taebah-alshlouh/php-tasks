<?php
function Palindrome($number){
    $temp = $number;
    $new = 0;
    while (floor($temp)) {
        $d = $temp % 10;
        $new = $new * 10 + $d;
        $temp = $temp/10;
    }
    if ($new == $number){
        return 1;
    }
    else{
        return 0;
    }
}

$original ="Eva, can I see bees in a cave?";
if (Palindrome($original)){
    echo " Yes it is a Palindrome";
}
else {
echo "Not a Palindrome";
}

?>