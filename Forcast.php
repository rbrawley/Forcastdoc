<!DOCTYPE html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<?php
$year = date("Y");

?>

<html>
    <head>
        <title>Your Forcast Information</title>
        <script type="module"
        src="https://pyscript.net/releases/2023.11.2/core.js">
    </script>
    </head>

    <body>
    <py-script src="./project.py"></py-script>
        <?php
            $forcastFile = file_get_contents('forcastInfo.json');
            $forcastFileData = json_decode($forcastFile);

            echo "<div class='w3-container'>";
            echo "<h2 class = 'w3-center'>Your Upcoming Weather Forecast</h2>";
            echo "<table class = 'w3-table w3-border w3-bordered w3-centered w3-xlarge w3-green'>";
            echo "<tr>";
            echo "<th>When</th>";
            echo "<th>Temperature</th>";
            echo "<th>Wind Speed</th>";
            echo "<th>Wind Direction</th>";
            echo "<th>Short Forecast</th>";

            echo "</tr>";        
            foreach($forcastFileData->properties->periods as $row){
                #echo var_dump($row);
                echo "<tr>";
                echo "<td>{$row->name} </td>";
                echo "<td>{$row->temperature}{$row->temperatureUnit}</td>";
                echo "<td>{$row->windSpeed}</td>";
                echo "<td>{$row->windDirection}</td>";
                echo "<td>{$row->shortForecast}</td>";
                echo "</tr>";
                
        
            }
            echo "</table>";
            echo "</div>";
            echo "test0";



        ?>
    </body>
    <footer class = 'w3-center'>&copy; <?php echo $year; ?> Richard Brawley</footer>
</html>