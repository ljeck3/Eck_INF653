<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once('../../model/database.php');
require_once('../../model/vehicles_db.php');
require_once('../../model/makes_db.php');
require_once('../../model/types_db.php');
require_once('../../model/classes_db.php');

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
        
    } else if ($_POST['action'] == 'make') {
        $make_name = $_POST['make_name'];
        add_make($db, $make_name);

    } else if ($_POST['action'] == 'type') {
        $type_name = $_POST['type_name'];
        add_type($db, $type_name);
        
    } else if ($_POST['action'] == 'class') {
        $class_name = $_POST['class_name'];
        add_class($db, $class_name);

    } else if ($_POST['action'] == 'deleteMake') {
        $make_id = $_POST['make_id'];
        delete_make($db, $make_id);

    } else if ($_POST['action'] == 'deleteType') {
        $type_id = $_POST['type_id'];
        delete_type($db, $type_id);

    } else if ($_POST['action'] == 'deleteClass') {
        $class_id = $_POST['class_id'];
        delete_class($db, $class_id);
    }
}


//Loads the list of vehicles. 
$vehicles = get_vehicles($db, $order, $filter);
$makes = get_makes($db);
$types = get_types($db);
$classes = get_classes($db);

include('../../view/header.php');

include('../view/types.php');

include('../../view/footer.php');