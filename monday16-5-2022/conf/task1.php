<?php
$hostname="localhost";
$dbName = "Taebah&Saja";
$username="root";
$password="";

try{
    $conn= new PDO("mysql:host=$hostname;dbname=$dbName",$username,$password);
    // $command = "INSERT INTO student (student_name,average,city) VALUES ('kenda','79','amman');";
    $command1="DELETE FROM student WHERE Id='5';";////////////////delete a record from a table////////////
    $command2="UPDATE student SET city ='amman' WHERE Id='2';";///////////////update a data from a table/////////////////////
    $command3="CREATE TABLE branch (Id INT(100) NOT NULL ,branch_name VARCHAR(100) NOT NULL, city VARCHAR(100) NOT NULL );";////////////create a table///////////////////
    // $command4="INSERT INTO branch (branch_name,city) VALUES ('zaieen','Irbid');";///////////insert or add a data in a table///////////////
    $command5="CREATE TABLE city (Id INT(100) NOT NULL ,city_name VARCHAR(100) NOT NULL );";//////////create another table////////////
    $command6="SELECT student_name FROM student
    INNER JOIN city ON city.city_name=student.city;";//////the output is://///////// student_name	
                                                                                         // saly
                                                                                        // narmeen
                                                                                       // Huda
                                                                                      // Israr 
                                                                                     // yamman
                                                                                    // candy
                                                                                   // kenda/
  // $conn->exec($command);
    $conn->exec($command1);
    $conn->exec($command2);
    $conn->exec($command3);
    // $conn->exec($command4);
    $conn->exec($command5);
    $conn->exec($command6);

    echo"Connection succeeded";
}
catch(Exeption $err){
     echo "Connection failed". $err->getMessage();
}

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>task one</title>
</head>
<body>
<form>
    <label> Enter a database name : </label>
    <input type="text" name="database">
    <input type="button" name="submit" value="create">
</form>
</body>
</html> -->