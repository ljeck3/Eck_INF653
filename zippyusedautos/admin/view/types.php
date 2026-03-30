<section>
    <h1>Types</h1>

    <?php foreach($types as $type): ?>
        <p><?= $type['type_name'] ?></p>
    <?php endforeach; ?>

    <form action="" method="post">

        <label for="type_name">Type</label><br>
        <input type="text" name="type_name"><br><br>

        <button type="submit" name="action" value="type">Add type</button>
    </form>
</section>