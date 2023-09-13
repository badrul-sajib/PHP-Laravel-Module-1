<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>
        <?php include "style.css"?>
    </style>
</head>
<body>
    <div class="temp">
    <h2>Temperature Converter</h2>
    <form method="post" action="">
        <input type="number" id="temperature" name="temperature" placeholder="Enter Temperature:" required>
        <br>
        <select id="conversion" name="conversion" required>
        <option value="none" selected disabled hidden>Select an Option</option>
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select>
        <br>
        <input type="submit" value="Convert">
    </form>
    <div id="result">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $conversion = $_POST["conversion"];
        $result = 0;

        if ($conversion == "celsius_to_fahrenheit") {
            $result = ($temperature * 9/5) + 32;
            echo "<p>$temperature &deg;C is equal to $result &deg;F</p>";
        } elseif ($conversion == "fahrenheit_to_celsius") {
            $result = ($temperature - 32) * 5/9;
            echo "<p>$temperature &deg;F is equal to $result &deg;C</p>";
        }
    }
    ?>
    </div>
    </div>
</body>
</html>