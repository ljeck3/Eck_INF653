<section>
    <p>Admin</p>
</section>
<section>
    <h1>Add Vehicle</h1>
    <form action="" method="post">

        <label for="year">Year</label><br>
        <input type="text" name="year"><br>

        <label for="model">Model</label><br>
        <input type="text" name="model"><br>

        <label for="price">Price</label><br>
        <input type="text" name="price"><br>

        <label for="make_id">Make</label><br>
        <select name="make_id">
            <option value="1">Chevy</option>
            <option value="2">Ford</option>
            <option value="3">Cadillac</option>
            <option value="4">Nissan</option>
            <option value="5">Hyundai</option>
            <option value="6">Dodge</option>
            <option value="7">Infiniti</option>
            <option value="8">Buick</option>
        </select><br>

        <label for="type_id">Type</label><br>
        <select name="type_id">
            <option value="1">SUV</option>
            <option value="2">Truck</option>
            <option value="3">Sedan</option>
            <option value="4">Coupe</option>
        </select><br>

        <label for="class_id">Class</label><br>
        <select name="class_id">
            <option value="1">Utility</option>
            <option value="2">Economy</option>
            <option value="3">Luxury</option>
            <option value="4">Sports</option>
        </select><br><br>

        <button type="submit" name="action" value="add">Add Vehicle</button>
    </form>
</section>