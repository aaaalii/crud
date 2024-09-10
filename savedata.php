<?php
    // insert into db
    $sname = $_POST["sname"];
    $saddress = $_POST['saddress'];
    $sclass = $_POST['class'];
    $sphone = $_POST['sphone'];

    $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed");
    $query = "Insert into student(sname, saddress, sclass, sphone) values ('{$sname}', '{$saddress}', '{$sclass}', '{$sphone}')";
    $result = mysqli_query($conn, $query) or die("Query unsuccessful");

    
    header("Location: index.php");

    mysqli_close($conn);
?>