<?php

header("Content-Type:application/json");
include('connection.php');

    $query = "SELECT * FROM `employees`";
    $result = mysqli_query($conn,$query);
    // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){

    $emplyeeInfo[]= array(
    'emp_id'=> $row['emp_id'],'emp_name'=> $row['emp_name'],'emp_email'=> $row['emp_email'],'emp_img'=> $row['emp_img'],'emp_salary'=> $row['emp_salary'],'emp_department'=> $row['emp_department'],
    'emp_address'=> $row['emp_address'],
    );

    $response["status"] = "true";
    $response["message"] = "emplyeeInfo";
    $response["employees"] = $emplyeeInfo;
   }
   echo json_encode($emplyeeInfo); 
    exit;

?>