<?php

require_once "../controller/Controller.php";

$controller = new Controller();

// svaka akcija stize preko ovog objekta $page
$page = isset($_GET["page"]) ? $_GET["page"] : "";

switch ($page) {

    case "showinsertvehicle":
        $controller->showInsertVehicle();
        break;
    case "Insert Vehicle":
        $controller->insertVehicle();
        break;
    case "showinsertdriver":
        $controller->showInsertDriver();
        break;
    case "Insert Driver":
        $controller->insertDriver();;
        break;
    case "showdrivervehicle":
        $controller->showDriverVehicle();
        break; 
    case "Assign Vehicle":
        $controller->assignVehicle();
        break;  
    case "alldrivers":
        $controller->allDrivers();
        break;
    case "deletedriver":
        $controller->deleteDriver();
        break;  
    case "showeditdriver":
        $controller->showEditDriver();
        break; 
    case "Edit Driver":
        $controller->editDriver();
        break;   
    case "allvehicles":
        $controller->allVehicles();
        break;
    case "deletevehicle":
        $controller->deleteVehicle();
        break;
    case "showeditvehicle":
        $controller->showEditVehicle();
        break; 
    case "Edit Vehicle":
        $controller->editVehicle();
        break;
    case "logout":
        $controller->logout();
        break; 
        
}
if($_SERVER['REQUEST_METHOD'] == "POST"){

    $page = isset($_POST['page'])?$_POST['page']:"";

    switch($page){
        case "Log in":
        $controller->login();
        break; 
        
    }

}

?>