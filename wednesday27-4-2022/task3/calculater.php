<?php
// 3.	make a Calculator that contain Basic Mathematical operations (+,-,*,/)
$fNum= (int)$_POST['f_num'];
$operation= $_POST['ope'];
$sNum= (int)$_POST['s_num'];
$result;
switch ($operation){
    case"+":
        $result= $fNum + $sNum;
        break;
    case"-":
        $result= $fNum - $sNum;
        break;
    case"*":
        $result= $fNum * $sNum;
        break;
    case"/":
        $result= $fNum / $sNum;
        break;
}
echo "Result= ".$result;
?>