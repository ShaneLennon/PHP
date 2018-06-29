<html>
<body>

    <?php
    $cars = array
        (
        array("Mitsubishi",22,18),
        array("Toyota",15,13),
        array("Nissan",5,7),
        array("Volvo",12,89),
        array("BMW",5,32),
        array("Mercedes",7,4),
        array("Saab",1,4),
        array("Ferarri",7,1)
        );
    
        echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
        echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
        echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
        echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
        echo $cars[4][0].": In stock: ".$cars[4][1].", sold: ".$cars[4][2].".<br>";
        echo $cars[5][0].": In stock: ".$cars[5][1].", sold: ".$cars[5][2].".<br>";
        echo $cars[6][0].": In stock: ".$cars[6][1].", sold: ".$cars[6][2].".<br>";
        echo $cars[7][0].": In stock: ".$cars[7][1].", sold: ".$cars[7][2].".<br>";

        for ($row = 0; $row < 8; $row++){
            echo "<p><b>Row number $row</b></p>";
            echo "<ul>";
            for($col = 0; $col < 3; $col++){
                echo "<li>".$cars[$row][$col]."</li>";
            }
            echo "</ul>";
        }
    ?>
</body>
</html>