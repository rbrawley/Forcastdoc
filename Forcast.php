<!DOCTYPE html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<?php
$year = date("Y");
$forcastFile = fopen('forcastInfo.txt', 'r');
$forcast = fread($forcastFile, filesize('forcastInfo.txt'));
echo $forcast;


?>

<html>
    <head>
        <title>Your Forcast Information</title>
    </head>

    <body>

        <table>


        </table>




    </body>
    <footer class = 'w3-center'>&copy; <?php echo $year; ?> Richard Brawley</footer>
</html>