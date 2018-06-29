<?php

    class CartDAO{

        public function __construct()
        {
            print "CartDAO constructor called <br>";
        }

        public function getAllCartMaterials()
        {
            echo "getAllCartMaterials() in DAO <br>";
            $servername = "localhost:3306";
            $username = "root";
            $password = "root";
            $dbname = "CarpentryDB1";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";
            echo "<br>";

            //SQL query selects all the columns from the Customers table
            $sql = "SELECT Cart.cartId, Cart.customerId, Customers.firstname, Cart.materialId, Cart.quantity, Materials.description, Materials.totalIncl, Materials.totalIncl*Cart.quantity
            FROM ((Cart
            INNER JOIN
            Materials
            ON Materials.id = Cart.materialId)
            INNER JOIN Customers
            ON Cart.customerId = Customers.id)";
            echo $sql;
            echo "<br>";

            //This line runs the query  and puts the resulting data into a variable called $result
            $result = $conn->query($sql);

            return $result;
            $conn->close();
        }

        function cartMaterialExists($customerID, $materialID)
        {
            echo "cartMaterialExists() in DAO <br>";
            $servername = "localhost:3306";
            $username = "root";
            $password = "root";
            $dbname = "CarpentryDB1";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";
            echo "<br>";

            //SQL query selects all the columns from the Cart table
            $sql = "SELECT * FROM Cart WHERE customerId = $customerID AND materialId = $materialID"; 
            echo $sql;
            echo "<br>";

            //This line runs the query  and puts the resulting data into a variable called $result
            $result = $conn->query($sql);

            return $result;
            $conn->close();
        }

        function updateCart($customerID,$materialID,$quantity)
        {
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "CarpentryDB1";

            //Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }

            echo "Connected successfully <br>";

            $sql = "UPDATE Cart 
            SET quantity='$quantity'
            WHERE customerId=$customerID AND materialId=$materialID";

            if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully <br>";
            } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();


        }

        public function insertCartMaterial($customerId,$materialId,$quantity)
        {       
    
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "CarpentryDB1";

            //Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }

            echo "Connected successfully <br>";

            $sql = "INSERT INTO Cart (customerId, materialId, quantity)
            VALUES ('$customerId','$materialId','$quantity')";
        
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully <br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $conn->close();
        }

        function getCartObjectByID($customerID, $materialID)
        {
            echo "getCartObjectByID() in DAO <br>";
        
            $servername = "localhost:3306";
            $username = "root";
            $password = "root";
            $dbname = "CarpentryDB1";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";
            echo "<br>";

            //SQL query selects all the columns from the Customers table
            $sql = "SELECT * FROM Cart WHERE customerId=$customerID AND materialId=$materialID";
            //echo $sql;
            echo "<br>";

            //This line runs the query  and puts the resulting data into a variable called $result
            $result = $conn->query($sql);

            return $result;
            $conn->close();
        }

        function deleteCartMaterialByID($customerID, $materialID)
        {
            echo "getCartObjectByID() in DAO <br>";
        
            $servername = "localhost:3306";
            $username = "root";
            $password = "root";
            $dbname = "CarpentryDB1";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";
            echo "<br>";

            //SQL query selects all the columns from the Customers table
            $sql = "DELETE FROM Cart WHERE customerId=$customerID AND materialId=$materialID";
            //echo $sql;
            echo "<br>";

            //This line runs the query  and puts the resulting data into a variable called $result
            $result = $conn->query($sql);

            return $result;
            $conn->close();
        }

        function updateCartMaterialByID($customerID, $materialID, $quantity)
        {
            echo "getCartObjectByID() in DAO <br>";
        
            $servername = "localhost:3306";
            $username = "root";
            $password = "root";
            $dbname = "CarpentryDB1";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";
            echo "<br>";

            //SQL query selects all the columns from the Customers table
            $sql = "UPDATE Cart 
            SET quantity='$quantity'
            WHERE customerId=$customerID AND materialId=$materialID";
            //echo $sql;
            echo "<br>";

            //This line runs the query  and puts the resulting data into a variable called $result
            $result = $conn->query($sql);

            return $result;
            $conn->close();
        }

        function getAllCartMaterialsForCust($customerId)
        {
            echo "In getAllCartMaterials in CartDAO";

            $servername = "localhost:3306";
            $username = "root";
            $password = "root";
            $dbname = "CarpentryDB1";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";
            echo "<br>";

            $sql = "SELECT Cart.cartId, Cart.customerId, Customers.firstname, Cart.materialId, Cart.quantity, Materials.description, Materials.totalIncl, Materials.totalIncl*Cart.quantity
            FROM ((Cart
            INNER JOIN
            Materials
            ON Materials.id = Cart.materialId)
            INNER JOIN Customers
            ON Cart.customerId = Customers.id)
            WHERE Cart.customerId=$customerId";

            //echo $sql;
            echo "<br>";

            //This line runs the query  and puts the resulting data into a variable called $result
            $result = $conn->query($sql);

            return $result;
            $conn->close();

        }
    }
?>