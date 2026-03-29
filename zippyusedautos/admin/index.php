<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once('../model/database.php');
require_once('../model/vehicles_db.php');

//Calls the delete funciton if a POST was submitted.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vehicle_id = $_POST['vehicle_id'];
    delete_vehicle($db, $vehicle_id);
}
//Loads the list of vehicles. 
$vehicles = get_vehicles($db, $order);


include('../view/header.php');

include('view/vehicles.php');

include('../view/footer.php');