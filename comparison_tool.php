<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <style>
        <?php include "style.css"?>
    </style>
</head>
<body>
<div class="comp">
<h2>Comparison Tool</h2>
    <form method="post">
        <input type="number" name="num1" id="num1" placeholder="Number 1" required><br>
        <input type="number" name="num2" id="num2" placeholder="Number 2" required><br>
        <input type="submit" value="Compare"><br><br>
    </form>
    <div id="result">
<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $largNum = ($num1 == $num2) ? "Both are same Number" : (($num1 > $num2) ? "$num1 is Larger" : "$num2 is Larger");
            echo $largNum;
        }
    ?>
</div>
<div class="developer">
    Developed by Sajib
</div>
</div>
</body>
</html>