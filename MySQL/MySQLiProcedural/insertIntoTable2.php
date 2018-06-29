<html>
<body>
<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "CarpentryDB2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

$sql = "INSERT INTO Customers (firstname, surname, phonenumber, 
address, email, description, recommendedby, year, startdate, 
finishdate)
VALUES ('Paddy','Lennon', '0871112345','160 Shanliss Road',
'joelennon@gmail.com','new kitchen', 'Barry Dunne', '2018', 
'04/09/1982','05/06/2018');";

$sql .= "INSERT INTO Customers (firstname, surname, phonenumber, 
address, email, description, recommendedby, year, startdate, 
finishdate)
VALUES ('Atracta','Lennon', '0871112345','160 Shanliss Road',
'joelennon@gmail.com','new kitchen', 'Barry Dunne', '2018', 
'04/09/1982','05/06/2018')";

if(mysqli_multi_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "New multi-record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();
?>

</body>
</html>