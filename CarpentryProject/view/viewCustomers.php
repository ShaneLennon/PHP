<html>
<head>
<link rel="stylesheet" href="../css/style.css">
    <title>View Customers</title>
</head>
<body>
    <h1>THIS IS OUR CUSTOMER VIEW FILE</h1>

    <?php
    $custArrayLength = 0;

    while ($row = $customers->fetch_assoc()){
        $custArrayLength++;
    }
    
    $customers->data_seek(0);

    if($custArrayLength == 0){
        echo "There are no customers in the database";
    }
    else{
        echo "There are ". $custArrayLength. " customers in the database";
    }
    
    ?>

    <?php
    
    if($custArrayLength > 0){
    ?>

    <table>
            <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Surname</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Description</th>
                    <th>Recommended By</th>
                    <th>Year</th>
                    <th>Start Date</th>
                    <th>Finish Date</th>
                    <th>Delete</th>
                    <th>Update</th>
                    <th>Materials</th>
            </tr>
    <?php
    }
    ?>       
            <?php
            while ($row = $customers->fetch_assoc()) {
            ?>
            <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['firstname'] ?></td>
                    <td><?php echo $row['surname'] ?></td>
                    <td><?php echo $row['phonenumber'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo $row['recommendedby'] ?></td>
                    <td><?php echo $row['year'] ?></td>
                    <td><?php echo $row['startdate'] ?></td>
                    <td><?php echo $row['finishdate'] ?></td>
                    <td><a href="../controllers/CustomersController.php?action=deleteCustomer&customerID=<?php echo $row['id']?>">Delete</a></td>
                    <td><a href="../controllers/CustomersController.php?action=showUpdateCustomerForm&customerID=<?php echo $row['id']?>">Update</a></td>
                    <td><a href="../controllers/MaterialsController.php?action=getAllMaterials&customerID=<?php echo $row['id']?>">Materials</a></td>
            </tr>
            <?php   
              }
            ?>
            </table>
            <p>
                <a href="../controllers/CustomersController.php?action=showInsertCustomerForm">Insert New Customer</a>
            </p>
            <p>
			    <a href="../controllers/CustomersController.php?action=showCustomerSearchForm">Search for Customer</a>
            </p>
        </body>
</html>