<html>
<body>
<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "CarpentryDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // begin the transaction
    $conn->beginTransaction();

    // our SQL statements
    $conn->exec("INSERT INTO Customers (firstname, surname, phonenumber, 
    address, email, description, recommendedby, year, startdate, 
    finishdate)
    VALUES ('Gary','Lennon', '0876654628','160 Shanliss Road',
    'shanelennon7blue@gmail.com','new kitchen', 'Barry Dunne', '2018', 
    '04/09/1982','05/06/2018')");
    $conn->exec("INSERT INTO Customers (firstname, surname, phonenumber, 
    address, email, description, recommendedby, year, startdate, 
    finishdate)
    VALUES ('Alan','Lennon', '0876654628','160 Shanliss Road',
    'shanelennon7blue@gmail.com','new kitchen', 'Barry Dunne', '2018', 
    '04/09/1982','05/06/2018')");
    $conn->exec("INSERT INTO Customers (firstname, surname, phonenumber, 
    address, email, description, recommendedby, year, startdate, 
    finishdate)
    VALUES ('Ingrid','Lennon', '0876654628','160 Shanliss Road',
    'shanelennon7blue@gmail.com','new kitchen', 'Barry Dunne', '2018', 
    '04/09/1982','05/06/2018')");

    // use exec() because no results are returned
    // $conn->exec($sql);
    // commit the transaction
    $conn->commit();
    $last_id = $conn->lastInsertId();

    echo "New record created successfully. Last inserted ID is: " . $last_id;
    }
catch(PDOException $e)
    {
    // roll back the transaction if something failed
    $conn->rollback();
    echo "Error: " . $e->getMessage();
    //echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>

</body>
</html>