<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>
    <style>
        <?php include "style.css"?>
    </style>
</head>
<body>
<div class="odd_even">
<h1>Even Odd Checker</h1>
    <form method="post" action="">
        <input type="number" name="number">
        <input type="submit" value="Check">
    </form>
<div id="result">
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        echo ($number % 2 == 0) ? "$number is even." : "$number is odd.";
    }
    ?>
</div>
</div>
</body>
</html>