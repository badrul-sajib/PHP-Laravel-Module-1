<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        <?php include "style.css"?>
    </style>
</head>
<body>
    <div class="grade">
    <h1>Grade Calculator</h1>
    <form method="post" action="">
        <input type="number" id="test1" name="test1" placeholder="Bangla" required>
        <br>
        <input type="number" id="test2" name="test2" placeholder="English" required>
        <br>
        <input type="number" id="test3" name="test3" placeholder="Mathmatics" required>
        <br>
        <input type="submit" value="Calculate">
    </form>
    <div id="result">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $test1 = $_POST["test1"];
        $test2 = $_POST["test2"];
        $test3 = $_POST["test3"];

        $average = ($test1 + $test2 + $test3) / 3;

        if ($average >= 80 && $average <= 100) {
            $grade = 'A+';
        } elseif ($average >= 70 && $average <= 79) {
            $grade = 'A';
        } elseif ($average >= 60 && $average <= 69) {
            $grade = 'A-';
        } elseif ($average >= 50 && $average <= 59) {
            $grade = 'B';
        } elseif ($average >= 40 && $average <= 49) {
            $grade = 'C';
        } elseif ($average >= 33 && $average <= 39) {
            $grade = 'D';
        } elseif ($average <= 32 && $average >= 0) {
            $grade = 'F';
        } else {
            $grade = "Invalid Input";
        }

        echo "<p>Average Score: $average</p>";
        echo "<p>Grade: $grade</p>";
    }
    ?>
    </div>
    </div>
</body>

</html>