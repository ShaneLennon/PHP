<html>
<body>
    <?php
        echo "Welcome ". $_POST["firstname"] ." " . $_POST["surname"] . "<br>";
        echo "Your phone number is: " .$_POST["phonenumber"] . "<br>";
        echo "Your home address is: " .$_POST["address"] . "<br>";
        echo "Your email address is: " .$_POST["email"] . "<br>";
        echo "Description: " .$_POST["description"] . "<br>";
        echo "Recommended by: " .$_POST["recommendedBy"] . "<br>";
        echo "Year: " .$_POST["year"] . "<br>";
        echo "Start date: " .$_POST["startdate"] . "<br>";
        echo "Finish date: " .$_POST["finishdate"] . "<br>";
    ?>
</body>
</html>