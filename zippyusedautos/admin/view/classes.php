<section>
    <h1>Classes</h1>
    <table>
    <tr>
        <th></th>
    </tr>
    <?php foreach($classes as $class): ?>
        <tr>
            <td><?= $class['class_name'] ?></td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="class_id" value="<?= $class['class_id'] ?>">
                    <button type="submit" name="action" value="deleteClass">Delete</button>
                </form>
        </tr>
    <?php endforeach; ?>
    </table>

    <form action="" method="post">

        <label for="class_name">New Class</label><br>
        <input type="text" name="class_name"><br><br>

        <button type="submit" name="action" value="class">Add class</button>
    </form>
</section>