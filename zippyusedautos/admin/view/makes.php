<section>
    <h1>Makes</h1>

    <?php foreach($makes as $make): ?>
        <p><?= $make['make_name'] ?></p>
    <?php endforeach; ?>

    <form action="" method="post">

        <label for="make_name">Make</label><br>
        <input type="text" name="make_name"><br><br>

        <button type="submit" name="action" value="make">Add Make</button>
    </form>
</section>