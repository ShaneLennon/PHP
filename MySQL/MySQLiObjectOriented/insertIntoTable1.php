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

$sql = "INSERT INTO Customers (firstname, surname, phonenumber, 
address, email, description, recommendedby, year, startdate, 
finishdate)
VALUES ('Brendan','Lennon', '0872805669','160 Shanliss Road, Santry, Dublin 9',
'colin.lennon@mail.dcu.ie','new kitchen', 'Barry Dunne', '2018', 
'04/09/1982','05/06/2018');";

$sql .= "INSERT INTO Customers (firstname, surname, phonenumber, 
address, email, description, recommendedby, year, startdate, 
finishdate)
VALUES ('Bernadette','Lennon', '0872805669','160 Shanliss Road, Santry, Dublin 9',
'colin.lennon@mail.dcu.ie','new kitchen', 'Barry Dunne', '2018', 
'04/09/1982','05/06/2018')";

if($conn->multi_query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New multi-record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

</body>
</html>