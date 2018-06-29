<html>
<head>

<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php

$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "CarpentryDBPDO";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM Customers WHERE firstname='Shane'";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
}
catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();

}

$conn = null;
?>

</body>
</html>