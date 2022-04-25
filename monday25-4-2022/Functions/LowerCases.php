<?php
$arr = array('remove');

   foreach ($arr as $x) {
      if (ctype_lower($x)) {
         echo " Your String is Ok  \n";
      }else {
         echo "Your String is not  Ok  \n";
      }
   }
?>