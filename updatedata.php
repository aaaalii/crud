<?php

    $new_name = $_POST["sname"];
    $new_address = $_POST['saddress'];
    $new_class = $_POST['sclass'];
    $new_phone = $_POST['sphone'];

    // db connection
    $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed");
    $query = "Update student set sname = '{$new_name}', saddress = '{$new_address}', sclass = '{$new_class}', sphone = '{$new_phone}' where sid = '{$_POST['sid']}'";
    $result = mysqli_query($conn, $query) or die("Query unsuccessful");
    
    header("Location: index.php");

    mysqli_close($conn);
?>