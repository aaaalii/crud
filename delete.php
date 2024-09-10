<?php include 'header.php'; ?>

<?php
if (isset($_POST['deletebtn'])) {
    include 'config.php';
    $id = $_POST['sid'];

    $query = "delete from student where sid = '{$id}'";
    $result = mysqli_query($conn, $query) or die("Query unsuccessful");

    header("Location: index.php");

    mysqli_close($conn);
}
?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>

</html>