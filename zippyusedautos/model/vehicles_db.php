<?php

$order = $_GET['order']; //This value is determined by the button the user clicks from the vehicles view page

//get all vehicles
function get_vehicles($db, $order) {
    //loads by year
    if ($order == 'year') {
        $query = 'SELECT year, model, price, make_name, type_name, class_name, vehicle_id
            FROM vehicles 
            INNER JOIN makes ON vehicles.make_id = makes.make_id
            INNER JOIN types ON vehicles.type_id = types.type_id
            INNER JOIN classes ON vehicles.class_id = classes.class_id
            ORDER BY year DESC'; 
    //loads by price
    } else {
        $query = 'SELECT year, model, price, make_name, type_name, class_name, vehicle_id
            FROM vehicles 
            INNER JOIN makes ON vehicles.make_id = makes.make_id
            INNER JOIN types ON vehicles.type_id = types.type_id
            INNER JOIN classes ON vehicles.class_id = classes.class_id
            ORDER BY price DESC';
    }
    
    $statement = $db->query($query);
    $vehicles = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    return $vehicles;
}

//delete vehicle
function delete_vehicle($db, $vehicle_id) {
    $query = 'DELETE FROM vehicles WHERE vehicle_id = :vehicle_id';
    $statement = $db->prepare($query);
    $statement->execute([':vehicle_id' => $vehicle_id]);
}

//add vehicle
function add_vehicle($db, $year, $model, $price, $make_id, $type_id, $class_id) {
    $query = 'INSERT INTO `vehicles` (`year`, `model`, `price`, `make_id`, `type_id`, `class_id`)
            VALUES (:year, :model, :price, :make_id, :type_id, :class_id);';

    $statement = $db->prepare($query);
    $statement->execute([
        ':year' => $year,
        ':model' => $model,
        ':price' => $price,
        ':make_id' => $make_id,
        ':type_id' => $type_id,
        ':class_id' => $class_id
]);
}