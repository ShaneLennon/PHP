<html>
<head>

<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
echo "<table style='border: solid 1px black; width:100%;'>";
echo "<tr><th>Id</th><th>First name</th><th>Surname</th>
<th>Phone number</th><th>Address</th><th>Email</th>
<th>Description</th><th>Recommended By</th><th>Year</th>
<th>Start date</th><th>Finish date</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 


$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "CarpentryDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, firstname, surname, phonenumber, address, email, description, recommendedby, year, startdate, finishdate FROM Customers"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
    


$conn = null;
echo "</table>";
?>

</body>
</html>