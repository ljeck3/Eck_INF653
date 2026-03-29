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