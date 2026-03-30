<?php
function get_types($db) {
    $query = 'SELECT type_id, type_name FROM types';
    
    $statement = $db->query($query);
    $types = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    return $types;
}

function add_type($db, $type_name) {
    $query = 'INSERT INTO `types` (`type_name`)
            VALUES (:type_name);';

    $statement = $db->prepare($query);
    $statement->execute([':type_name' => $type_name]);
}

function delete_type($db, $type_id) {
    $query = 'DELETE FROM types WHERE type_id = :type_id';
    $statement = $db->prepare($query);
    $statement->execute([':type_id' => $type_id]);
}