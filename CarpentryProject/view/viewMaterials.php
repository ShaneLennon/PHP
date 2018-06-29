<html>
<head>
<link rel="stylesheet" href="../css/style.css">
    <title>View Materials</title>
</head>
<body>
    <h1>THIS IS OUR MATERIALS VIEW FILE</h1>

    <?php
    $customerID = $_GET['customerID'];
     
    $materialsArrayLength = 0;

    while($row = $materials->fetch_assoc()){
        $materialsArrayLength++;
    }

    $materials->data_seek(0);
    echo "length of materials array is " . $materialsArrayLength ."<br>";
    if($materialsArrayLength == 0){
        echo "There are no materials in the database";
    }
    else
    {
        echo "There are ". $materialsArrayLength. " materials in the database";
    }
    ?>

    <?php
    if($materialsArrayLength > 0)
    
    {?>

    <table>
                <tr>
                    <th>Id</th>
                    <th>Qty</th>
                    <th>Sell Unit</th>
                    <th>Item</th>
                    <th>Description</th>
                    <th>Unit Excl.</th>
                    <th>Total Excl.</th>
                    <th>Total Incl.</th>
                    <th>Delete</th>
                    <th>Update</th>
                    <th>Add to cart</th>
                </tr>
    <?php
    }
    ?>       
            <?php
           echo "***********************************<br>";
           echo "CustomerID is :" . $customerID ."<br>";
           echo "***********************************<br>";
            while($row = $materials->fetch_assoc())
            {?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td>1</td>
                    <td>EACH</td>
                    <td><?php echo $row['item'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo $row['unitExcl'] ?></td>
                    <td><?php echo $row['totalExcl'] ?></td>
                    <td><?php echo $row['totalIncl'] ?></td>
                    <td><a href="../controllers/MaterialsController.php?action=deleteMaterial&customerID=<?php echo $customerID ?>&materialID=<?php echo $row['id']?>">Delete</a></td>
                    <td><a href="../controllers/MaterialsController.php?action=showUpdateMaterialForm&customerID=<?php echo $customerID ?>&materialID=<?php echo $row['id']?>">Update</a></td>
                    <td><a href="../controllers/CartController.php?action=addCartMaterial&customerID=<?php echo $customerID ?>&materialID=<?php echo $row['id']?>">Add to cart</a></td>
                </tr>
            <?php   
            }
            ?>
            </table>
            <p>
                <a href="../controllers/MaterialsController.php?action=showInsertMaterialForm">Insert New Material</a>
            </p>
            <p>
			    <a href="../controllers/MaterialsController.php?action=showMaterialSearchForm">Search for Material</a>
            </p>
            <p>
                <a href="../controllers/CustomersController.php?action=getAllCustomers">View all Customers</a>
            </p>
            <p>
                <a href="../controllers/CartController.php?action=getAllCartMaterials&cart=Shane">View all Materials in Cart</a>
            </p>
            <p>
                <a href="../controllers/CartController.php?action=getAllCartMaterials&customerID=<?php echo $customerID?>">View Customer Cart</a>
            </p>
    </body>
</html>