<html>
<body>
<?php
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

// sql to create table
$sql = "CREATE TABLE Customers (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    surname VARCHAR(30) NOT NULL,
    phonenumber VARCHAR(30) NOT NULL,
    address VARCHAR(100) NOT NULL,
    email VARCHAR(50) NOT NULL,
    description VARCHAR(50) NOT NULL,
    recommendedby VARCHAR(30) NOT NULL,
    year VARCHAR(4) NOT NULL,
    startdate VARCHAR(30) NOT NULL,
    finishdate VARCHAR(30) NOT NULL
    )";

if ($conn->query($sql) === TRUE){
    echo "Table Customers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

</body>
</html>