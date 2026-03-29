<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once('../model/database.php');
require_once('../model/vehicles_db.php');

//Calls the delete funciton if a POST was submitted.

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['action'] == 'delete') {
        $vehicle_id = $_POST['vehicle_id'];
        delete_vehicle($db, $vehicle_id);

    } else if ($_POST['action'] == 'add') {
        $year = $_POST['year'];
        $model = $_POST['model'];
        $price = $_POST['price'];
        $make_id = $_POST['make_id'];
        $type_id = $_POST['type_id'];
        $class_id = $_POST['class_id'];
        add_vehicle($db, $year, $model, $price, $make_id, $type_id, $class_id);
    }
}


//Loads the list of vehicles. 
$vehicles = get_vehicles($db, $order);


include('../view/header.php');

include('view/vehicles.php');

//move this two a it's own page later
include('view/add_vehicle.php');

include('../view/footer.php');