<?php
function swap($x, $y) {
 //Swap 
  $x = $x + $y;
  $y = $x - $y;
  $x = $x - $y;
  echo "y = $y \n";
  echo "x = $x \n";
 
}
swap(12, 10);
?>