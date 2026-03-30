<section>
    <p>Admin</p>
</section>
<section class="">
    <h1>Vehicles</h1>
    <table>
    <tr>
        <th>Year</th>
        <th>Make</th>
        <th>Model</th>
        <th>Type</th>
        <th>Class</th>
        <th>Price</th>
        <th>Delete</th>
    </tr>
    <?php foreach($vehicles as $vehicle): ?>
        <tr>
            <td><?= $vehicle['year'] ?></td>
            <td><?= $vehicle['make_name'] ?></td>
            <td><?= $vehicle['model'] ?></td>
            <td><?= $vehicle['type_name'] ?></td>
            <td><?= $vehicle['class_name'] ?></td>
            <td>$<?= $vehicle['price'] ?></td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="vehicle_id" value="<?= $vehicle['vehicle_id'] ?>">
                    <button type="submit" name="action" value="delete">Delete</button>
                </form>
        </tr>
    <?php endforeach; ?>
    </table>
<button><a href="?order=price">Sort by Price</a></button>
<button><a href="?order=year">Sort by Year</a></button>

<form method="get" action="">
    <label for="filter">Filter By</label><br>
    <select name="filter">
        <option value="default">-- Select a filter --</option>
        <option value="make">Make</option>
        <option value="type">Type</option>
        <option value="class">Class</option>
    </select>
    <button type="submit">Go</button>
</form>
</section>

<section>
    <h1>Manage</h1>
    <button><a href="controllers/ctrl_add_vehicle.php">Add Vehicle</a></button>
    <button><a href="controllers/ctrl_makes.php">Edit Makes</a></button>  
    <button><a href="controllers/ctrl_types.php">Edit Types</a></button>  
    <button><a href="controllers/ctrl_classes.php">Edit Classes</a></button>  
</section>