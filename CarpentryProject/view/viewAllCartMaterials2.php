<html>
<head>
<link rel="stylesheet" href="../css/style.css">
    <title>View Materials</title>
</head>
<body>
    <h1>THIS IS OUR CART VIEW FILE</h1>

    <?php
        
        var_dump($listOfCartMaterials);
        echo "<br>";
        var_dump($allMaterials);
        echo "<br>";
        while($row1 = $allMaterials->fetch_assoc()){
            foreach($row1 as $key => $val) {
                echo "Key=" .$key . " Value= ".$val;
                echo "<br>";
            }
            echo "<br>";
        }

        $allMaterials->data_seek(0);
        $numRowsInCart = 0;    
        while($row2 = $listOfCartMaterials->fetch_assoc()){
            $numRowsInCart++;
            foreach($row2 as $key => $val) {
                
                echo "Key=" .$key . " Value= ".$val;
                echo "<br>";
            }
            echo "<br>";
        }

        $listOfCartMaterials->data_seek(0);
        echo "Number of rows in the cart is :".$numRowsInCart. "<br>";
        
        if($numRowsInCart == 0){
            echo "There are no materials in the cart <br>";
        }
    ?>

    <!-- <?php
    if($cartLength > 0)
    
    {?> -->

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
    <?php
    }
    ?>   
        <?php
            while($row1 = $listOfCartMaterials->fetch_assoc())
            {?>
                 <tr><?php
                     while($row2 = $allMaterials->fetch_assoc())
                     {?>
                        <?php $material = $row2['id'] ?>;
                        <?php $cart = $row1['materialId']?>
                        
                        <?php echo "material = ". $material . " cart = ".$cart?>
                       
                        <!-- <?php
                        if($material == $cart)
                        {?> -->
                            <!-- <td><?php echo $row1['cartId'] ?></td>
                            <td><?php echo $row1['customerId'] ?></td>
                            <td><?php echo $row1['materialId'] ?></td>
                            <td><?php echo $row1['quantity'] ?></td> -->
                        <!-- <?php
                        }
                        ?> -->

                    <?php
                     }
                     ?>
                 </tr>
             <?php   
            }
            ?>
            </table>
        </body>
</html>