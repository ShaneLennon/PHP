<html>
<head>
<link rel="stylesheet" href="../css/style.css">
    <title>View Materials</title>
</head>
<body>
    <h1>Customer Cart</h1>
    
    <?php
        
        
        $numRowsInCart = 0;    
        while($row2 = $listOfCartMaterialsForCust->fetch_assoc()){
            $numRowsInCart++;
        }

        
        
        echo "There are ".$numRowsInCart. " rows in the cart <br>";
        
        
        if($numRowsInCart == 0){
            echo "There are no materials in the cart <br>";
        }
    ?>

    <table>
            <tr>
                <th>Cart Id</th>
                <th>Customer Id</th>
                <th>Material Id</th>
                <th>Quantity</th>
                <th>Add</th>
                <th>Remove</th>
            </tr>
   
            <?php $listOfCartMaterialsForCust->data_seek(0);
            ?>
            
            <?php
            while($row1 = $listOfCartMaterialsForCust->fetch_assoc())
            {?>
                <tr>
                    <td><?php echo $row1['cartId']?></td>
                    <td><?php echo $row1['customerId']?></td>
                    <td><?php echo $row1['materialId']?></td>
                    <td><?php echo $row1['quantity']?></td>
                </tr>
            <?php    
            }?>
        </table>
        <!-- <p>
                <a href="../controllers/CustomersController.php?action=getAllCustomers">View all Customers</a>
        </p>
        <p>
                <a href="../controllers/MaterialsController.php?action=getAllMaterials&customerID=8">View all Materials</a>
        </p> -->
        </body>
</html>