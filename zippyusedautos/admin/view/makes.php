<section>
    <p>Admin</p>
</section>
<section>
    <h1>Makes</h1>
    <table>
    <tr>
        <th></th>
    </tr>
    <?php foreach($makes as $make): ?>
        <tr>
            <td><?= $make['make_name'] ?></td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="make_id" value="<?= $make['make_id'] ?>">
                    <button type="submit" name="action" value="deleteMake">Delete</button>
                </form>
        </tr>
    <?php endforeach; ?>
    </table>

    <form action="" method="post">

        <label for="make_name">New Make</label><br>
        <input type="text" name="make_name"><br><br>

        <button type="submit" name="action" value="make">Add Make</button>
    </form>
</section>