<!DOCTYPE html>
<body>
<?php
    #challenge1
    $number1 = 10;
    $number2 = 5;

    echo "Number 1: " . $number1 . "<br>";
    echo "Number 2: " . $number2 . "<br>";
    echo "Addition: " . ($number1 + $number2) . "<br>";
    echo "Subraction: " . ($number1 - $number2) . "<br>";
    echo "Multiplication: " . ($number1 * $number2) . "<br>";
    echo "Division: " . ($number1 / $number2) . "<br>";
    echo "Modulus: " . ($number1 % $number2) . "<br>";
?>
<br>
<?php
    #challenge2
    $input = 7;

    echo "Input: " . $input . "<br>";

    if ($input % 2 == 0) {
        echo "hi";
    } else {
        echo "Output: " . $input . " is an odd number." . "<br>";
    };
?>
<br>
<?php
    #challenge3
    $start = 10;

    echo "Starting number: " . $start . "<br>";
    echo "After increment: " . ++$start . "<br>";
    echo "After decrement: " . --$start . "<br>";
?>
<br>
<?php
    #challenge4
    $grade = 85;
    echo "Input: " . $grade . "<br>";

    if ($grade >= 90) {
        $letter_grade = "A";
    } elseif ($grade <90 && $grade >= 80) {
        $letter_grade = "B";
    } elseif ($grade <80 && $grade >= 70) {
        $letter_grade = "C";
    } elseif ($grade <70 && $grade >= 60) {
        $letter_grade = "D";
    } elseif ($grade <60 && $grade >= 50) {
        $letter_grade = "F";
    };

    echo "Output: You got a " . $letter_grade . "!<br>";
?>
<br>
<?php
    #challenge5
    $year = 2026;
    echo "Input: " . $year . "<br>";

    if (($year % 400 ==0) || ($year % 4 == 0) && ($year % 100 !== 0)) {
        echo $year . " is a leap year";
    } else {
        echo "Output: " . $year . " is not a leap year.";
    };
?>
</body>
</html>
