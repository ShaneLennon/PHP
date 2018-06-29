<html>
<head>
<!-- <style>
table{
    width:100%;
}
table, th, td{
    border: 1px solid black;
}
</style>  -->
<link rel="stylesheet" href="../css/style.css">
</head>
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
// echo "Connected successfully";
// echo "<br>";

// sql to update records
$sql = "UPDATE Customers SET surname='Phil' WHERE firstname='Barry'";

if ($conn->query($sql) === TRUE){
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>

</body>
</html>