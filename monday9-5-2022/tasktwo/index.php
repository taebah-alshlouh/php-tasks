<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task2</title>
    <style>
        fieldset{
            margin:15% 0 0 25%;
            border:2px solid pink;
            border-radius:5px;
            width:35%;
        }
       p, input{
            margin:1% 0 0 25%;
            width:40%;
        }
        legend{
          padding:2%;
        }
    </style>
</head>
<body>
    <form method="post">
    <fieldset>
    <legend>Enter Your favorite city</legend>
        <input type="text" name="city"><br><br>
        <input type="submit" name="submit" value="submit">
        <br>
    </fieldset>
    </form>
    
</body>
</html>


<?php
if(isset($_POST['submit']))
{
    echo "<br><p>Your favorite city is: ". $_POST['city']."</p>";
    $data=array($_POST['city']);
}

?>