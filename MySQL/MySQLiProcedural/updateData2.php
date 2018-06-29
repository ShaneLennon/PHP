<html>
<head>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php

$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "CarpentryDB2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to update a record
$sql = "UPDATE Customers SET surname='Doe' WHERE firstname='Joseph'";

if (mysqli_query($conn, $sql)){
    echo "Record updated successfully";
}else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>