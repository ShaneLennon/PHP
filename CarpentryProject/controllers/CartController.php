<?php

    require_once("../dao/CartDAO.php");
    require_once("../dao/MaterialDAO.php");
    require_once("../dao/CustomerDAO.php");
    class CartController
    {
        var $cartDAO;
        var $materialDAO;
        var $customerDAO;
       

        function __construct()
        {
            $this->cartDAO = new CartDAO();
            echo "CartController constructor called <br>";
            $this->materialDAO = new MaterialDAO();
            $this->customerDAO = new CustomerDAO();
        }

        function doGet(){
            echo "doGet in CartController <br>";
            $action = $_GET['action'];

            echo "action is: " . $action . "<br>";
            switch($action){
            case "addCartMaterial":
                $this->addCartMaterial();
                break;
            case "addCartMaterial2":
                $this->addCartMaterial2();
                break;
            case "deleteCartMaterial":
                $this->deleteCartMaterial();
                break;
            case "getAllCartMaterials":
                $this->getAllCartMaterials();
                break;
            }

        }

        function addCartMaterial(){

            echo "In addCartMaterial <br>";

            $customerID = $_GET['customerID'];
            $materialID = $_GET['materialID'];
            
            // fetch_all
            echo "customerID: " . $customerID . "<br>";
            echo "materialID: " . $materialID . "<br>";

            $listOfCartMaterialsExists = $this->cartDAO->cartMaterialExists($customerID,$materialID)->fetch_all();

            $cartLength = count($listOfCartMaterialsExists);

            echo "Cart Length: " .$cartLength . "<br>";

            if($cartLength == 0)
            {
                echo "The Cart is empty";
                $this->cartDAO->insertCartMaterial($customerID,$materialID,1);
                $listOfCartMaterials = $this->cartDAO->getAllCartMaterials() ; # ->fetch_all();
                //include('../view/viewAllCartMaterials.php');

            }
            else 
            {
                $updateCartMaterial =  $this->cartDAO->getCartObjectByID($customerID,$materialID)->fetch_assoc();
                echo "Updating cart material";
                echo "<br>";

                //var_dump($updateCartMaterial);

                echo "<br>";
                $materialQuantity = $updateCartMaterial['quantity'];
                echo "The quantity of material is: " .$materialQuantity;
                echo "<br>";
                echo "<br>";

                $this->cartDAO->updateCart($customerID,$materialID,$materialQuantity+1);
            }
                // $listOfCartMaterialsForCust = $this->cartDAO->getAllCartMaterialsForCust($customerID);
                // $allMaterials = $this->materialDAO->getAllMaterials();
                // $customer = $this->customerDAO->getCustomerByID($customerID);
                // include('../view/viewCustomerCart.php');
                header("location: http://localhost/helloworld/CarpentryProject/controllers/MaterialsController.php?action=getAllMaterials&customerID=".$customerID); 

                
        }

        function addCartMaterial2(){

            echo "In addCartMaterial2 <br>";

            $customerID = $_GET['customerID'];
            $materialID = $_GET['materialID'];
            
            // fetch_all
            echo "customerID: " . $customerID . "<br>";
            echo "materialID: " . $materialID . "<br>";

            $listOfCartMaterialsExists = $this->cartDAO->cartMaterialExists($customerID,$materialID)->fetch_all();

            $cartLength = count($listOfCartMaterialsExists);

            echo "Cart Length: " .$cartLength . "<br>";

            if($cartLength == 0)
            {
                echo "The Cart is empty";
                $this->cartDAO->insertCartMaterial($customerID,$materialID,1);
                $listOfCartMaterials = $this->cartDAO->getAllCartMaterials() ; # ->fetch_all();
                //include('../view/viewAllCartMaterials.php');

            }
            else 
            {
                $updateCartMaterial =  $this->cartDAO->getCartObjectByID($customerID,$materialID)->fetch_assoc();
                echo "Updating cart material";
                echo "<br>";

                //var_dump($updateCartMaterial);

                echo "<br>";
                $materialQuantity = $updateCartMaterial['quantity'];
                echo "The quantity of material is: " .$materialQuantity;
                echo "<br>";
                echo "<br>";

                $this->cartDAO->updateCart($customerID,$materialID,$materialQuantity+1);
            }
                header("Location: http://localhost/helloworld/CarpentryProject/controllers/CartController.php?action=getAllCartMaterials&customerID=".$customerID."&materialID=".$materialID);
        }

        function deleteCartMaterial()
        {
            echo "In deleteCartMaterial";

            $customerID = $_GET['customerID'];
            $materialID = $_GET['materialID'];
            
            // fetch_all
            echo "customerID: " . $customerID . "<br>";
            echo "materialID: " . $materialID . "<br>";

            $updateCartMaterialQuantity =  $this->cartDAO->getCartObjectByID($customerID,$materialID)->fetch_assoc();
            
            foreach($updateCartMaterialQuantity as $x => $x_value) 
            {
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }

            $materialQuantity = $updateCartMaterialQuantity['quantity'];
            echo "materialQuantity: ".$materialQuantity;

            if(($materialQuantity-1) == 0)
            {
                $this->cartDAO->deleteCartMaterialByID($customerID,$materialID);
            }
            else
            {
                $materialQuantity = $materialQuantity-1;
                $this->cartDAO->updateCartMaterialByID($customerID, $materialID,$materialQuantity);
            }

            header("Location: http://localhost/helloworld/CarpentryProject/controllers/CartController.php?action=getAllCartMaterials&customerID=".$customerID."&materialID=".$materialID);

        }
        

        function getAllCartMaterials(){
            echo("!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!<br>");

            foreach($_GET as $x => $x_value) {
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }

            $customerID = $_GET['customerID'];
            echo ('*****************************');
            if (is_null($customerID)) 
            {
                echo "Shane inside if <br>";
                echo('<<<<<<<<<<<<<<<<<<<');
                $listOfCartMaterials = $this->cartDAO->getAllCartMaterials();
                $customerID = $_GET['customerID'];
                include('../view/viewAllCart.php');
            } else {
                echo 'HOOOOY!';
                $listOfCartMaterials = $this->cartDAO->getAllCartMaterialsForCust($_GET['customerID']);
                include('../view/viewAllCart.php');
            }
        }
    }
    $cartController = new CartController();
    //var_dump($cartController);
    $cartController->doGet();
?>