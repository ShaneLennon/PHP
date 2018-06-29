<?php
// Start the session
//session_start();

class CustomerDAO{

    public function __construct()
    {
        print "CustomerDAO constructor called <br>";
    }

    public function insertCustomer($firstname, $surname, $phonenumber, $address, $email, $description, $recommendedby, $year, $startdate, $finishdate )
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

        $sql = "INSERT INTO Customers (firstname, surname, phonenumber,address, email, description, recommendedby, year, startdate, finishdate)
        VALUES ('$firstname','$surname', '$phonenumber', '$address', '$email', '$description', '$recommendedby', '$year', '$startdate', '$finishdate')";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }

    public function updateCustomer($customerId,$firstname, $surname, $phonenumber, $address, $email, $description, $recommendedby, $year, $startdate, $finishdate)
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

        echo "Connected successfully in updateCustomer<br>";

        $sql = "UPDATE Customers 
        SET firstname='$firstname', surname='$surname', phonenumber='$phonenumber', address='$address', 
        email='$email', description='$description', recommendedby='$recommendedby', year='$year', startdate='$startdate', finishdate='$finishdate'
        WHERE id=$customerId";
    
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }

    function customerSearch($search, $searchType)
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
        
        $sql = "SELECT * FROM Customers WHERE ".$searchType." LIKE ".$search2;

        echo "<br>";
        echo $sql;
        echo "<br>";
        $result = $conn->query($sql);

        return $result;
        $conn->close();
    }

    function getAllCustomers()
    {       echo "getAllCustomers() in DAO <br>";
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
            $sql = "SELECT * FROM Customers";
            echo $sql;
            echo "<br>";

            //This line runs the query  and puts the resulting data into a variable called $result
            $result = $conn->query($sql);

            return $result;
            $conn->close();
    }

    function deleteCustomer($customerID)
    {
        echo "deleteCustomer() in DAO <br>";

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
        $sql = "DELETE FROM Customers WHERE id=$customerID";

        if ($conn->query($sql) === TRUE){
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
        $conn->close();
    }

    function getCustomerByID($customerID)
    {
        echo "getCustomerByID() in DAO <br>";
        
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
            $sql = "SELECT * FROM Customers WHERE id=$customerID";
            //echo $sql;
            echo "<br>";

            //This line runs the query  and puts the resulting data into a variable called $result
            $result = $conn->query($sql);

            return $result;
            $conn->close();
    }
}     
// $firstname = 'Ultra';
// $surname = 'Sonic';
// $phonenumber = '087';
// $address = 'Santry';
// $email = 'shanegmail';
// $description = 'attic';
// $recommendedby = 'Grace';
// $year = '2017';
// $startdate = '4444';
// $finishdate = '3333';

$customers = new CustomerDAO();
$customers->getAllCustomers();

?>
