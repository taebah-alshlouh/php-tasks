<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 6</title>
</head>
<body>
    <form method="post">
        <input type="text" name="">
        <input type="submit" name="submit" value="add">
    </form>
    <?php
    echo "<br>Travel takes many forms, whether across town, across the country, or around the world. Here is a list of some common modes of transportation:";
     $transportation=array(" Automobile ", " Jet ", " Ferry ", " Subway ");
     echo "<ul>";
     foreach($transportation as $value){
     echo"<li>$value</li>";
     }
     echo "</ul>";
    ?>
</body>
</html>