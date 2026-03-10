<!--Create the update form-->
<?php
include('view/header.php');
?>

    <section>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
            <label for="assignementID">Assignment ID:</label>
            <input type="hidden" id="assignmentID" name="assignmentID" required>

            <label for="description">Description:</label>
            <input type="text" id="description" name="description" required>

            <label for="course">Course:</label>
            <select id="course" name="course" required>

            <button>Submit</button>
        </form>
    </section>

<?php
include('view/footer.php');
?>