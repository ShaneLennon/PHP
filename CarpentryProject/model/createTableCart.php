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
$sql = "CREATE TABLE Cart (
    cartId INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    customerId INT NOT NULL,
    materialId INT NOT NULL,
    quantity INT NOT NULL
    )";

if ($conn->query($sql) === TRUE){
    echo "Table Cart created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

</body>
</html>