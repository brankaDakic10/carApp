<?php

require_once '../controller/Controller.php';

$controller = new Controller();

// svaka akcija stize preko ovog objekta $page
$page = isset($_GET['page']) ? $_GET['page'] : '';

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
         

}

?>