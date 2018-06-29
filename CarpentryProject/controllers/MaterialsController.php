<?php

  require_once("../dao/MaterialDAO.php");
  class MaterialsController
    { 
        var $materialDAO;

        function __construct()
        {
            $this->materialDAO = new MaterialDAO();
            echo "MaterialsController constructor called <br>";
        }

        
        function doGet() {
            echo "doGet in Carpentry Material project <br>";
            $action = $_GET['action']; 
            echo "action is: " . $action ."<br>";

            if(is_null($action))
            {
                $action = "getAllMaterials";
            }
            
            switch ($action){
            case "insertMaterial":
                $this->insertMaterial();
                break; 
            case "getAllMaterials":
                $this->getAllMaterials();
                break;
            case "showInsertMaterialForm":
                $this->showInsertMaterialForm();
                break;
            case "deleteMaterial":
                $this->deleteMaterial();
                break;
            case "showUpdateMaterialForm":
                $this->showUpdateMaterialForm();
                break;
            case "updateMaterial":
                $this->updateMaterial();
                break;
            case "showMaterialSearchForm":
                $this->showMaterialSearchForm();
                break;
            case "searchForMaterial":
                $this->searchForMaterial();
                break;
            }
        }

        function insertMaterial(){
            echo "In insertMaterial function <br>";
            $item = $_POST['item'];
            echo $item ."<br>";
            $description = $_POST['description'];
            echo $description ."<br>";
            $unitExcl = $_POST['unitExcl'];
            echo $unitExcl . "<br>";
            $totalExcl = $_POST['totalExcl']; 
            echo $totalExcl . "<br>";
            
            $totalInc = $_POST['totalInc'];
            echo $totalInc;
            
            $this->materialDAO->insertMaterial($item, $description, $unitExcl, $totalExcl, $totalInc);
            header('Location: http://localhost/helloworld/CarpentryProject/controllers/MaterialsController.php?action=getAllMaterials');
        }

        function getAllMaterials(){
            echo "Came from deleteMaterial <br>";

            $materials = $this->materialDAO->getAllMaterials();

            include('../view/viewMaterials.php');
        }

        function showInsertMaterialForm()
        {
            echo "In showInsertMaterialForm()";
            header("location: http://localhost/helloworld/CarpentryProject/view/insertMaterial.html"); 
        }

        function deleteMaterial()
        {
            echo "In deleteMaterial <br>";
            $materialID = $_GET['materialID'];
            $customerID = $_GET['customerID'];
            echo "materialID2 :" . $materialID ."<br>";
            echo "customerID2 :" . $customerId . "<br>";
            $this->materialDAO->deleteMaterial($materialID);
            header('Location: http://localhost/helloworld/CarpentryProject/controllers/MaterialsController.php?action=getAllMaterials');
        }

        function showUpdateMaterialForm()
        {
            echo "In showUpdateMaterialForm() <br>";
            $materialID = $_GET['materialID'];
            echo "materialID :" . $materialID ."<br>";
            $material = $this->materialDAO->getMaterialByID($materialID) ->fetch_all();

            var_dump($material);
            echo "<br>";
            
            include('../view/updateMaterial.html');
        }

        function updateMaterial()
        {
            echo "In updateMaterial function <br>";
            //Get all the parameters from the updateMaterial.html
            $materialId = $_POST['materialId'];
            echo "materialId : " . $materialId . "<br>"; 
            $item = $_POST['item'];
            echo "item : " . $item . "<br>"; 
            $description = $_POST['description'];
            echo "description : " . $description . "<br>";
            $unitExcl = $_POST['unitExcl'];
            echo "unitExcl : " . $unitExcl . "<br>";
            $totalExcl = $_POST['totalExcl'];
            echo "totalExcl : " . $totalExcl . "<br>";
            $totalInc = $_POST['totalInc'];
            echo "totalInc: " . $totalInc . "<br>";
            $this->materialDAO->updateMaterial($materialId, $item, $description, $unitExcl, $totalExcl, $totalInc);
            header('Location: http://localhost/helloworld/CarpentryProject/controllers/MaterialsController.php?action=getAllMaterials');
        }

        function showMaterialSearchForm()
        {
            header("location: http://localhost/helloworld/CarpentryProject/view/materialSearch.html"); 
        }

        function searchForMaterial()
        {
            echo "In search for material function";
            echo "<br>";
            $search = $_POST['search'];
            echo "search :".$search;
            echo "<br>";

            $searchType = $_POST['select'];
            echo "search type: " . $searchType;
            echo "<br>";
            $materialsFound = $this->materialDAO->materialSearch($search,$searchType)->fetch_all();
            foreach($materialsFound as $val) 
            {
                foreach($val as $inner) 
                {
                  echo $inner."<br>";
                }
            } 
            include('../view/viewMaterialsFound.php');
        }
    }
   $materialsController = new MaterialsController();
   $materialsController->doGet();
   
?>