<html>
<head>
<link rel="stylesheet" href="../css/style.css">
    <title>View Materials</title>
</head>
<body>
    <h1>THIS IS OUR MATERIALS FOUND VIEW FILE</h1>

    <?php
    $materialsFoundArrayLength = count($materialsFound);
    echo "length of materials array is " . $materialsFoundArrayLength ."<br>";
    if($materialsFoundArrayLength == 0){
        echo "There are no materials found in the database";
    }?>

    <?php
    if($materialsFoundArrayLength > 0)
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
            foreach($materialsFound as $material_key => $material_value)
            {?>
                <tr>
                    <td><?php echo $material_value[0] ?></td>
                    <td>1</td>
                    <td>EACH</td>
                    <td><?php echo $material_value[1] ?></td>
                    <td><?php echo $material_value[2] ?></td>
                    <td><?php echo $material_value[3] ?></td>
                    <td><?php echo $material_value[4] ?></td>
                    <td><?php echo $material_value[5] ?></td>
                    <td><a href="../controllers/MaterialsController.php?action=deleteMaterial&materialID=<?php echo $material_value[0]?>">Delete</a></td>
                    <td><a href="../controllers/MaterialsController.php?action=showUpdateMaterialForm&materialID=<?php echo $material_value[0]?>">Update</a></td>
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
    </body>
</html>