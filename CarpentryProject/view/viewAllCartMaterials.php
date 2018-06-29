<html>
<head>
<link rel="stylesheet" href="../css/style.css">
    <title>View Materials</title>
</head>
<body>
    <h1>THIS IS OUR CART VIEW FILE</h1>
    
    <?php
        require_once("../dao/CartDAO.php");
        require_once("../dao/MaterialDAO.php");
        $cartDAO = new CartDAO;
        $materialDAO = new MaterialDAO;


        if(is_null($allMaterials))
        {
            $allMaterials = $this->materialDAO->getAllMaterials();
        }

        if(is_null($listOfCartMaterialsForCust))
        {
            $listOfCartMaterials = $this->cartDAO->getAllCartMaterialsForCust($customerID);
        }
        
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
                <th>Description</th>
                <th>Price</th>
                <th>Total</th>
                <th>Add</th>
                <th>Remove</th>
            </tr>
   
            <?php $listOfCartMaterialsForCust->data_seek(0);
            ?>
            
            <?php
            while($row1 = $listOfCartMaterialsForCust->fetch_assoc())
            {?>
                <tr>
                   
                    <?php
                    while($row2 = $allMaterials->fetch_assoc())
                    {?>
                        
                        <?php
                        if($row1['materialId'] == $row2['id'])
                        {?>
                            <td><?php echo $row1['cartId']?></td>
                            <td><?php echo $row1['customerId']?></td>
                            <td><?php echo $row1['materialId']?></td>
                            <td><?php echo $row1['quantity']?></td>
                            <td><?php echo $row2['description']?></td>
                            <td><?php echo $row2['totalIncl']?></td>
                            <td><?php echo $row1['quantity']*$row2['totalIncl']?></td>
                        <?php
                        }
                        ?>
                    <?php
                    }
                    ?>
                    <?php $allMaterials->data_seek(0)?>;
                </tr>
                     
            <?php    
            }?>
        </table>
        <p>
                <a href="../controllers/CustomersController.php?action=getAllCustomers">View all Customers</a>
        </p>
        <p>
                <a href="../controllers/MaterialsController.php?action=getAllMaterials&customerID=8">View all Materials</a>
        </p>
        </body>
</html>