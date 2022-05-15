<?php
 include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
</head>
<body>
<?php
    $name= $_POST['emp_name'] ;
    $position=$_POST['position'];
    $salary=$_POST['salary'];

    $sql= " INSERT INTO nurse (emp_name, position ,salary )
    VALUES ('$name','$position','$salary'); ";

    if(mysqli_query($conn , $sql)){
        echo 'new record created sucessfuly ';
    }else{
        echo "error:".$sql."<br>".mysqli_error($conn);
    }
    
    mysqli_close($conn);
    
    ?>
</body>
</html>