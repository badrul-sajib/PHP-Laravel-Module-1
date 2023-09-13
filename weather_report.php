<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <style>
        <?php include "style.css"?>
    </style>
</head>
<body>
    <div class="weather">
    <h1>Weather Report</h1>
    <form method="post">
        <input type="number" name="temperature" placeholder="Enter Temperature (in Celsius):" required>
        <input type="submit" value="Submit">
    </form>
    <div id="result">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        if ($temperature < 0) {
            echo "The weather is freezing!";
        } elseif ($temperature >= 0 && $temperature < 15) {
            echo "The weather is cool.";
        } elseif ($temperature >= 15 && $temperature < 25) {
            echo "The weather is warm.";
        } elseif($temperature >= 25 && $temperature <100){
            echo "The weather is hot!";
        } else{
            echo "The weather is very hot";
        }
    }
    ?>
    </div>
    </div>
</body>
</html>