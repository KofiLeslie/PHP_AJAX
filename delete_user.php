<?php
require 'connection.php';

// Delete User
    $id = $_GET['id'];
    $sql = "DELETE FROM table1 WHERE id = '$id'";
    $res = mysqli_query($con, $sql);
    if ($res) {
        echo "<script>alert('User Deleted Successfully')</script>";
        header("location: index.php");
    } else {
        echo "<script>alert('User Delete Failed')</script>";
    }
    
?>