<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task four</title>
</head>
<body>
    
    <form method="post">
        <p>Enter A day of the week</p>
        <input type="text" name="day"><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>


</body>
</html>
<?php
if(isset($_POST['submit']))
{   echo '<br>';
    $day=strtolower($_POST['day']);
    switch ($day) {
        case 'monday':
            echo 'Laugh on Monday, laugh for danger.';
            break;
        case 'tuesday':
            echo 'Laugh on Tuesday, kiss a stranger.';
            break;
        case 'wednesday':
            echo 'Laugh on Wednesday, laugh for a letter.';
            break;
        case 'thursday':
            echo 'Laugh on Thursday, something better.';
            break;
        case 'friday':
            echo 'Laugh on Friday, laugh for sorrow.';
            break;
        case 'saturday':
            echo 'Laugh on Saturday, joy tomorrow.';
            break; 
        default:
            echo 'HAPPY HOLIDAY!';
            break;
    }
}
?>