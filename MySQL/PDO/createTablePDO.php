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

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table Customers created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>

</body>
</html>