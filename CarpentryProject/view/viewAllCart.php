<html>
<head>
<link rel="stylesheet" href="../css/style.css">
    <title>View All Cart Materials</title>
</head>
<body>
    <?php
    $check;
    if(is_null($customerID))
    {?>
        <h1>This is Cart of all Materials</h1>
        <?php $check = true;
        echo "check : ". $check; ?>

    <?php    
    }
    else
    {?>
        <h1>This is the Customer Cart</h1>
        <?php $check = false;
        echo "check :". $check; ?>
    <?php
    }?>
  
    
    <?php
        
        $numRowsInCart = 0; 
        $total = 0;   
        while($row2 = $listOfCartMaterials->fetch_assoc()){
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
                <th>First Name</th>
                <th>Material Id</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Total Incl</th>
                <th>Total</th>
                <th>Add</th>
                <th>Remove</th>
            </tr>

             <?php $listOfCartMaterials->data_seek(0);
            ?>
            <?php
            while($row1 = $listOfCartMaterials->fetch_assoc())
            {?>
                <tr>
                    <td><?php echo $row1['cartId']?></td>
                    <td><?php echo $row1['customerId']?></td>
                    <td><?php echo $row1['firstname']?></td>
                    <td><?php echo $row1['materialId']?></td>
                    <td><?php echo $row1['quantity']?></td>
                    <td><?php echo $row1['description']?></td>
                    <td>&euro;<?php echo $row1['totalIncl']?></td>
                    <td>&euro;<?php echo $row1['totalIncl']*$row1['quantity']?></td>
                    <?php $total = $total + $row1['totalIncl']*$row1['quantity']?>
                    <td><a href="../controllers/CartController.php?action=addCartMaterial2&customerID=<?php echo $row1['customerId'] ?>&materialID=<?php echo $row1['materialId']?>">Add</a></td>
                    <td><a href="../controllers/CartController.php?action=deleteCartMaterial&customerID=<?php echo $row1['customerId'] ?>&materialID=<?php echo $row1['materialId']?>">Remove</a></td>
                </tr>
            <?php    
            }?>
        </table>
        <p>
                <a href="../controllers/CustomersController.php?action=getAllCustomers">View all Customers</a>
        </p>
        <p>
                <a href="../controllers/MaterialsController.php?action=getAllMaterials">View all Materials</a>
        </p>
        <p>
            Total cost of materials: &euro;<?php echo $total?>
        </p>
        </body>
</html>