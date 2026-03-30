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
    </tr>
    <?php foreach($vehicles as $vehicle): ?>
        <tr>
            <td><?= $vehicle['year'] ?></td>
            <td><?= $vehicle['make_name'] ?></td>
            <td><?= $vehicle['model'] ?></td>
            <td><?= $vehicle['type_name'] ?></td>
            <td><?= $vehicle['class_name'] ?></td>
            <td>$<?= $vehicle['price'] ?></td>
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