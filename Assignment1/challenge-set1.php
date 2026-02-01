<!DOCTYPE html>
<body>
<?php
    #challenge1
    $name = "Levi";
    $age = "22";
    $favorite_color = "Blue";
    echo "My name is $name, I am $age years old, and my favorite color is $favorite_color.". "<br>";
?>
<br>
<?php
    #challenge2
    echo "\"He said, \"PHP is fun!\" and left.\"". "<br>";
    echo "First line \n<br>Second line". "<br>"; //added <br> so it renders in browser.
?>
<br>
<?php
    #challenge3
    $greeting = 'Welcome to the PHP world!';
    echo $greeting . "<br>";
    echo "\nYour age is " . $age. ".<br>";
?>
<br>
<?php
    #challenge4
    echo "Welcome to PHP! ";
    $name= "John";
    echo "Hello, " . $name . ".<br>";
?>
<br>
<?php
    #challenge5
    
    /* This challenge works on adding comments.
    Different styles will be demonstrated */

    $price = 50; // sets the price variable
    $discount = 10; // sets the discount variable
    $finalPrice = $price - $discount; //does the math
    echo "Total price: $" . $finalPrice;
?>
</body>
</html>
