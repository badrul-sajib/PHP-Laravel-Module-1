<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <style>
        <?php include "style.css"?>
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Basic Calculator</h2>
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter Your First Number" required> <br>
            <input type="number" name="num2" placeholder="Enter Your second Number" required> <br>
            <select name="oparetion" id="">
                <option value="none" selected disabled hidden>Select an Option</option>
                <option value="addition">Addition</option>
                <option value="substruction">Substruction</option>
                <option value="multiplication">Multiplication</option>
                <option value="division">Division</option>
                <option value="binary">Binary Coversion</option>
                <option value="octal">Octal Coversion</option>
                <option value="hexadesimal">Hexadesimal Coversion</option>
            </select> <br>
            <button type="submit" value="yes" name="submit">Calculate</button>
        </form>
        <div id="result">

        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $num1= $_POST["num1"];
            $num2= $_POST["num2"];
            $oparetion= $_POST["oparetion"];
            switch($oparetion){
                case "addition":
                    $result = $num1 + $num2;
                    echo "Result : $num1+$num2= $result";
                   break;
                case "substruction":
                    $result = $num1 - $num2;
                    echo "Result : $result";
                    break;
                case "multiplication":
                    $result = $num1 * $num2;
                    echo "Result : $result";
                    break;
                case "division":
                    if($num1 != 0){
                        $result = $num1 / $num2;
                        echo "Result : $result";
                    } else{
                        echo "Can't Divide By Zero";
                    }
            }
        }
        ?>


        </div>
    </div>
</body>
</html>