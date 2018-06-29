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
$sql = "CREATE TABLE Materials (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
item VARCHAR(30) NOT NULL,
description VARCHAR(60) NOT NULL,
unitExcl FLOAT(10,2) NOT NULL,
totalExcl FLOAT(10,2) NOT NULL,
totalIncl FLOAT(10,2) NOT NULL
)";

if ($conn->query($sql) === TRUE){
    echo "Table Materials created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

</body>
</html>