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
<button>Sort By Year</button>
<button>Sort By Price</button>
</section>