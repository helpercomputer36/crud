<?php 
include 'connection.php';

if (isset($_GET['delete'])) {
    $roll = $_GET['delete'];

    $sql = "delete form `student` where roll = $roll";
    $sql_result = mysqli_query($connection, $sql);

    if($sql_result) {
        header('location: index.php');
    } else {
        die(mysqli_error($connection));
    }
}

?>