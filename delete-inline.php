<?php

    $id = $_GET['id'];

    // db connection
    include 'config.php';
    $query = "delete from student where sid = '{$id}'";
    $result = mysqli_query($conn, $query) or die("Query unsuccessful");
    
    header("Location: index.php");

    mysqli_close($conn);
?>