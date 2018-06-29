<?php
    // Start the session
    session_start();
    echo "test worked <br>";

    //Echo session variables that were set on previous page
    echo "Favourite color is " .$_SESSION["favcolor"] . ".<br>";
    echo "Favourite animal is " .$_SESSION["favanimal"] . ".<br>";

    $cars = $_SESSION['cars'];
    var_dump($cars);
    
    $cars = unserialize($cars);
    //var_dump($cars);

    foreach($cars as $x => $x_value) {
        
        foreach($x_value as $y => $y_value) {
            echo "Key=" . $y . ", Value=" . $y_value;
            echo "<br>";
        }
    }
?>