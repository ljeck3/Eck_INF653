<?php
function get_classes($db) {
    $query = 'SELECT class_id, class_name FROM classes';
    
    $statement = $db->query($query);
    $classes = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    return $classes;
}

function add_class($db, $class_name) {
    $query = 'INSERT INTO `classes` (`class_name`)
            VALUES (:class_name);';

    $statement = $db->prepare($query);
    $statement->execute([':class_name' => $class_name]);
}