<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once('model/database.php');
require_once('model/vehicles_db.php');

$vehicles = get_vehicles($db);


include('view/header.php');

include('view/vehicles.php');

include('view/footer.php');