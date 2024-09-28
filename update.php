<?php 
include 'connection.php';
$roll = $_GET['update'];
$sql = "Select * form `student` where roll = $roll";
$sql_result = mysqli_query($connection, $sql);



if( isset($_POST['update']) ) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $grade = $_POST['grade'];

    $sql = "update `student` set roll = $roll, name = '$name', email = '$email', phone = '$phone', grade = '$grade' where roll = $roll";
    $sql_result = mysqli_query($connection, $sql);

    if( $sql_result) {
         header('location: index.php');
    } else {
        die(mysqli_error($connection));
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
                <input type="text" placeholder="Jhon Doe" id="nameField" name="name" value="<?php echo $sql_row['name'] ?>">

                <label for="emailField">Email</label>
                <input type="email" placeholder="jhon@example.com" id="emailField" name="email" value="<?php echo $sql_row['email'] ?>">

                <label for="phoneField">Phone</label>
                <input type="number" placeholder="01711000000" id="phoneField" name="phone" value="<?php echo $sql_row['phone'] ?>">

                <label for="gradeField">Grade</label>
                <input type="text" placeholder="A+" id="gradeField" name="grade" value="<?php echo $sql_row['grade'] ?>">

                <input class="button-primary" type="submit" value="Update" name="update">

            </fieldset>
        </form>

        </div>
        </div>
    </div>

    
</body>
</html>