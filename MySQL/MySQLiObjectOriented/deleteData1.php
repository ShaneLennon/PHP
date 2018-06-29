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

// sql to delete a record
$sql = "DELETE FROM Customers WHERE firstname='Colin'";

if ($conn->query($sql) === TRUE){
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>

</body>
</html>