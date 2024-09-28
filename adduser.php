<?php 
include 'connection.php';
if( isset($_POST['add']) ) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $grade = $_POST['grade'];

    $sql = "insert into `student` (name, email, phone, grade) values('$name', '$email', '$phone', '$grade')";
    $sql_result = mysqli_query($connection, $sql);

    if( $sql_result) {
        header('location: index.php');
    } else {
        die(mysqli_errno($connection));
    }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User | CRUD Project</title>
    <span class="pln">
    </span><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic"><span class="pln">
    </span><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"><span class="pln">
    </span><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css"><span class="pln">
    </span>
</head>
<body>

    <div class="container">
        <div class="row">
        <div class="colum">

        <form method="post">
            <fieldset>
                <label for="nameField">Name</label>
                <input type="text" placeholder="Jhon Doe" id="nameField" name="name">

                <label for="emailField">Email</label>
                <input type="email" placeholder="jhon@example.com" id="emailField" name="email">

                <label for="phoneField">Phone</label>
                <input type="number" placeholder="01711000000" id="phoneField" name="phone">

                <label for="gradeField">Grade</label>
                <input type="text" placeholder="A+" id="gradeField" name="grade">

                <input class="button-primary" type="submit" value="Add User" name="add">

            </fieldset>
        </form>

        </div>
        </div>
    </div>

    
</body>
</html>