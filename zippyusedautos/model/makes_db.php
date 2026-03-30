<?php
function get_makes($db) {
    $query = 'SELECT make_id, make_name FROM makes';
    
    $statement = $db->query($query);
    $makes = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    return $makes;
}

function add_make($db, $make_name) {
    $query = 'INSERT INTO `makes` (`make_name`)
            VALUES (:make_name);';

    $statement = $db->prepare($query);
    $statement->execute([':make_name' => $make_name]);
}

function delete_make($db, $make_id) {
    $query = 'DELETE FROM makes WHERE make_id = :make_id';
    $statement = $db->prepare($query);
    $statement->execute([':make_id' => $make_id]);
}