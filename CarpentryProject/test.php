<?php
// Start the session
session_start();
    // Set session variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";

    $cars = array
    (
    array("Volvo",22,18),
    array("BMW", 15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
    );

   
    //var_dump($cars);

    $a = serialize($cars);
    echo $a;
    $_SESSION["cars"] = $a;
    echo "Session variables are set.";
    echo "request to open another php page";
    header('Location: http://localhost/helloworld/CarpentryProject/test2.php');
?>