<html>
<head>
<link rel="stylesheet" href="../css/style.css">
    <title>View Customers Found</title>
</head>
<body>
    <h1>Customers found</h1>

    <?php
    $custArrayLength = count($customersFound);
    echo "length of customersFound array is " . $custArrayLength ."<br>";
    if($custArrayLength == 0){
        echo "There are no customers in the database";
    }?>

    <?php
    if($custArrayLength > 0)
    {?>

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
             foreach($customersFound as $customer_key => $customer_value)
            {?>
               <tr>
                    <td><?php echo $customer_value[0] ?></td>
                    <td><?php echo $customer_value[1] ?></td>
                    <td><?php echo $customer_value[2] ?></td>
                    <td><?php echo $customer_value[3] ?></td>
                    <td><?php echo $customer_value[4] ?></td>
                    <td><?php echo $customer_value[5] ?></td>
                    <td><?php echo $customer_value[6] ?></td>
                    <td><?php echo $customer_value[7] ?></td>
                    <td><?php echo $customer_value[8] ?></td>
                    <td><?php echo $customer_value[9] ?></td>
                    <td><?php echo $customer_value[10] ?></td>
                    <td><a href="CustomersController.php?action=deleteCustomer&customerID=<?php echo $customer_value[0]?>">Delete</a></td>
                    <td><a href="CustomersController.php?action=showUpdateCustomerForm&customerID=<?php echo $customer_value[0]?>">Update</a></td>
                 </tr>
             <?php   
            }
            ?>
            </table>
            <p>
                <a href="CustomersController.php?action=getAllCustomers">View all Customers</a>
            </p>
           
    </body>
</html>