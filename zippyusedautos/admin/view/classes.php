<section>
    <h1>Classes</h1>

    <?php foreach($classes as $class): ?>
        <p><?= $class['class_name'] ?></p>
    <?php endforeach; ?>

    <form action="" method="post">

        <label for="class_name">Class</label><br>
        <input type="text" name="class_name"><br><br>

        <button type="submit" name="action" value="class">Add class</button>
    </form>
</section>