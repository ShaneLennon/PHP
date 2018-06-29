<?php

  require_once("../dao/CustomerDAO.php");
  class CustomersController
    { 
        //var $customerDAO;

        function __construct()
        {
            $this->customerDAO = new CustomerDAO();
            echo "CustomersController constructor called <br>";
        }

        
        function doGet() {
            echo "doGet in Carpentry project <br>";
            $action = $_GET['action']; //action = "insertCustomer"
            
            echo "action is: " . $action ."<br>";
            
            if(is_null($action))
            {
                $action = "getAllCustomers";
            }
            
            switch ($action){
            case "insertCustomer":
                $this->insertCustomer();//include('../view/viewAllCartMaterials.php');
                break;    
            case "getAllCustomers":
                $this->getAllCustomers();
                break; 
            case "deleteCustomer":
                $this->deleteCustomer();
                break;
            case "showInsertCustomerForm":
                $this->showInsertCustomerForm();
                break;
            case "showUpdateCustomerForm":
                $this->showUpdateCustomerForm();
                break;
            case "searchForCustomer":
                $this->searchForCustomer();
                break;
            case "updateCustomer":
                $this->updateCustomer();
                break;
            case "showCustomerSearchForm":
                header("location: http://localhost/helloworld/CarpentryProject/view/customerSearch.html"); 
                break;
            }
        }

        function insertCustomer(){
            $firstname = $_POST['firstname'];
            $surname = $_POST['surname'];
            $phonenumber = $_POST['phonenumber'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $description = $_POST['description'];
            $recommendedBy = $_POST['recommendedBy'];
            $year = $_POST['year']; 
            $startdate = $_POST['startdate'];
            $finishdate = $_POST['finishdate'];                       
            //include('viewCustomers.php');
            $this->customerDAO->insertCustomer($firstname, $surname, $phonenumber, $address, $email, $description, $recommendedBy, $year, $startdate, $finishdate);
            header('Location: http://localhost/helloworld/CarpentryProject/controllers/CustomersController.php?action=getAllCustomers');
        }

        function updateCustomer(){
            echo "*******************************************";
            //Get all the parameters from the updateCustomer.html
            $customerId = $_POST['customerId'];
            $firstname = $_POST['firstname'];
            $surname = $_POST['surname'];
            $phonenumber = $_POST['phonenumber'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $description = $_POST['description'];
            $recommendedBy = $_POST['recommendedBy'];
            $year = $_POST['year'];
            $startdate = $_POST['startdate'];
            $finishdate = $_POST['finishdate'];                       
            $this->customerDAO->updateCustomer($customerId, $firstname, $surname, $phonenumber, $address, $email, $description, $recommendedBy, $year, $startdate, $finishdate);
            header('Location: http://localhost/helloworld/CarpentryProject/controllers/CustomersController.php?action=getAllCustomers');
        }

        function searchForCustomer(){

            echo "****************In search for customer";
            echo "<br>";
            $search = $_POST['search'];
            echo "search :".$search;
            echo "<br>";

            $searchType = $_POST['select'];
            echo "search type: " . $searchType;
            echo "<br>";
            $customersFound = $this->customerDAO->customerSearch($search,$searchType)->fetch_all();
        //     foreach($customersFound as $val) {
        //        foreach($val as $inner) {
        //            echo $inner."<br>";
        //        }
        //    }
            include('../view/viewCustomersFound.php');
        }

        function getAllCustomers() {
            $customers = $this->customerDAO->getAllCustomers();
            include('../view/viewCustomers.php');
        }

        function deleteCustomer(){
            echo "In deleteCustomer()";
            $customerID = $_GET['customerID'];
            $this->customerDAO->deleteCustomer($customerID);
            header('Location: http://localhost/helloworld/CarpentryProject/controllers/CustomersController.php?action=getAllCustomers');
        }

        function showInsertCustomerForm()
        {
            echo "In showInsertCustomerForm()";
            header("location: http://localhost/helloworld/CarpentryProject/view/insertCustomer.html"); 
        }

        function showUpdateCustomerForm()
        {
            echo "In showUpdateCustomerForm() <br>";
            $customerID = $_GET['customerID'];
            echo "customer to update is Id ". $customerID . "<br>";
            $customer = $this->customerDAO->getCustomerByID($customerID) ->fetch_all();
            
            var_dump($customer);
            echo "<br>";
            
            include('../view/updateCustomer.html');
            //header("location: http://localhost/helloworld/CarpentryProject/updateCustomer.html"); 
        }
    }
   $customersController = new CustomersController();
   $customersController->doGet();
   
?>