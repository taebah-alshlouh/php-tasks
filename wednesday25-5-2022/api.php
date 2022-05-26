<?php

header("Content-Type:application/json");
include('connection.php');

    $query = "SELECT * FROM `employees`";
    $result = mysqli_query($conn,$query);
    // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   while($row=mysqli_fetch_assoc($result)){
    $emplyeeInfo['emp_id'] = $row['emp_id'];
    $emplyeeInfo['emp_name'] = $row['emp_name'];
    $emplyeeInfo['emp_email'] = $row['emp_email'];
    $emplyeeInfo['emp_img'] = $row['emp_img'];
    $emplyeeInfo['emp_salary'] = $row['emp_salary'];
    $emplyeeInfo['emp_department'] = $row['emp_department'];
    $emplyeeInfo['emp_address'] = $row['emp_address'];
    // $response["status"] = "true";
    // $response["message"] = "emplyeeInfo";
    // $response["employees"] = $emplyeeInfo;

    // exit;
   }
   echo json_encode($emplyeeInfo); 





?>