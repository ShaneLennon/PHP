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

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO Customers (firstname, surname, phonenumber, 
    address, email, description, recommendedby, year, startdate, 
    finishdate) 
    VALUES (:firstname, :surname, :phonenumber, :address, :email,
    :description, :recommendedby, :year, :startdate, :finishdate)");

    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':phonenumber', $phonenumber);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':recommendedby', $recommendedby);
    $stmt->bindParam(':year', $year);
    $stmt->bindParam(':startdate', $startdate);
    $stmt->bindParam(':finishdate', $finishdate);

    // insert a row
    $firstname = "Cathal";
    $surname = "Browne";
    $phonenumber = "0871234567";
    $address = "Maple House, Central Park";
    $email = "cathal.browne@topfloor.ie";
    $description = "new floor";
    $recommendedby = "barry dunne";
    $year = "2018";
    $startdate = "6/6/18";
    $finishdate = "14/6/18";

    $stmt->execute();

    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>

</body>
</html>