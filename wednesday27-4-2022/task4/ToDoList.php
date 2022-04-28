<?php
// 4.	Create a To Do List Page.

session_start();
// session_destroy();
$_SESSION["Task"] .= $_POST['task']."+";
echo $_SESSION["Task"];
$dataArr= explode("+", $_SESSION["Task"]);
$l= count($dataArr);
echo "<form style=margin: 5% 0% 5% 5%;
width: 80%;>";
for($i=0; $i<$l; $i++){
    echo "<input type='checkbox' name='value$i'>";
    echo $dataArr[$i]."<br>";
}
echo "</form>";

?>