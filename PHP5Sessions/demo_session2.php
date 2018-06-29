<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page

echo "Favorite color is " . $_SESSION["favcolor"] . "<br>";
echo "Favourite animal is " . $_SESSION["favanimal"] . "<br>";
print_r($_SESSION);
$_SESSION["favcolor"] = "black";

// remove all session variables
session_unset();

// destroy the session
session_destroy();

echo "All session variables are now removed, and the session is destroyed."
?>
</body>
</html>