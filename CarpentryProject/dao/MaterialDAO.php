<?php
// Start the session
//session_start();

class MaterialDAO{

    public function __construct()
    {
        print "MaterialDAO constructor called <br>";
    }

    public function insertMaterial($item, $description, $unitExcl, $totalExcl, $totalIncl)
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

        $sql = "INSERT INTO Materials (item, description, unitExcl, totalExcl, totalIncl)
        VALUES ('$item', '$description' ,'$unitExcl', '$totalExcl', '$totalIncl')";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }

    public function updateMaterial($materialId, $item, $description, $unitExcl, $totalExcl, $totalInc)
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

        echo "Connected successfully in updateMaterial<br>";

        $sql = "UPDATE Materials 
        SET item='$item', description='$description', unitExcl='$unitExcl', totalExcl='$totalExcl', totalIncl='$totalInc' 
        WHERE id=$materialId";
    
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }

    function getAllMaterials()
    {       echo "getAllMaterials() in DAO <br>";
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
            $sql = "SELECT * FROM Materials";
            echo $sql;
            echo "<br>";

            //This line runs the query  and puts the resulting data into a variable called $result
            $result = $conn->query($sql);

            return $result;
            $conn->close();
    }

    function deleteMaterial($materialID)
    {
        echo "deleteMaterial() in DAO <br>";

        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "CarpentryDB1";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // echo "Connected successfully";
        // echo "<br>";

        // sql to delete a record
        $sql = "DELETE FROM Materials WHERE id=$materialID";

        if ($conn->query($sql) === TRUE){
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
        $conn->close();
    }

    function getMaterialByID($materialID)
    {
        echo "getMaterialByID() in DAO <br>";
        
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
            $sql = "SELECT * FROM Materials WHERE id=$materialID";
            //echo $sql;
            echo "<br>";

            //This line runs the query  and puts the resulting data into a variable called $result
            $result = $conn->query($sql);

            return $result;
            $conn->close();
    }

    function materialSearch($search, $searchType)
    {
        echo "customerSearch() in DAO <br>";
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "CarpentryDB1";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if($conn->connect_error){
            die("Connection failed: "  . $conn->connect_error);
        }
        echo "Connected successfully";
        echo "<br>";

        echo "searchType: ".$searchType;
        echo "<br>";
        $search2 = "'%".$search."%'";
        echo "search2: ".$search2;
        
        $sql = "SELECT * FROM Materials WHERE ".$searchType." LIKE ".$search2;

        echo "<br>";
        echo $sql;
        echo "<br>";
        $result = $conn->query($sql);

        return $result;
        $conn->close();
    }
}     
?>