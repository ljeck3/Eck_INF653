<section>
    <p>Admin</p>
</section>
<section>
    <h1>Types</h1>
    <table>
    <tr>
        <th></th>
    </tr>
    <?php foreach($types as $type): ?>
        <tr>
            <td><?= $type['type_name'] ?></td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="type_id" value="<?= $type['type_id'] ?>">
                    <button type="submit" name="action" value="deleteType">Delete</button>
                </form>
        </tr>
    <?php endforeach; ?>
    </table>

    <form action="" method="post">

        <label for="type_name">New Type</label><br>
        <input type="text" name="type_name"><br><br>

        <button type="submit" name="action" value="type">Add type</button>
    </form>
</section>