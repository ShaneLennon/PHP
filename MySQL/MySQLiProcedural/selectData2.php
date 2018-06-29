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
$dbname = "CarpentryDB2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
// echo "<br>";

//SQL query selects all the columns from the Customers table
$sql = "SELECT id, firstname, surname, phonenumber, address, email, description, recommendedby, year, startdate, finishdate FROM Customers";

//This line runs the query  and puts the resulting data into a varaible called $result
$result = mysqli_query($conn, $sql);

//The function num_rows() checks if there are more than zero rows returned
if(mysqli_num_rows($result) > 0){
    // output data of each row
    
    echo "<table>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>First name</th>";
    echo "<th>Surname</th>";
    echo "<th>Phone number</th>";
    echo "<th>Address</th>";
    echo "<th>E-mail</th>";
    echo "<th>Description</th>";
    echo "<th>Recommended by</th>";
    echo "<th>Year</th>";
    echo "<th>Start date</th>";
    echo "<th>Finish date</th>";
    echo "</tr>";
    //echo "</table>";
    //echo "<table>";
    //If there are more than zero rows returned, the function fetch_assoc()
    // puts all the results into an associative array that we can loop 
    //through. The while() loop loops through the result set and outputs the
    // data from all of the columns
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>";
        echo $row["id"];
        echo "</td>";
        echo "<td>";
        echo $row["firstname"];
        echo "</td>";
        echo "<td>";
        echo $row["surname"];
        echo "</td>";
        echo "<td>";
        echo $row["phonenumber"];
        echo "</td>";
        echo "<td>";
        echo $row["address"];
        echo "</td>";
        echo "<td>";
        echo $row["email"];
        echo "</td>";
        echo "<td>";
        echo $row["description"];
        echo "</td>";
        echo "<td>";
        echo $row["recommendedby"];
        echo "</td>";
        echo "<td>";
        echo $row["year"];
        echo "</td>";
        echo "<td>";
        echo $row["startdate"];
        echo "</td>";
        echo "<td>";
        echo $row["finishdate"];
        echo "</td>";

        echo "</tr>";
    }
    echo "</table>";
    
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>