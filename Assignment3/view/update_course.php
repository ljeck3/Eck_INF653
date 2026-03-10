<!--Create the update form-->
<?php
include('view/header.php');
?>

    <section>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
            <label for="courseID">Course ID:</label>
            <input type="hidden" id="courseID" name="courseID" required>

            <label for="description">Course Name:</label>
            <input type="text" id="courseName" name="courseName" required>

            <button>Submit</button>
        </form>
    </section>

<?php
include('view/footer.php');
?>