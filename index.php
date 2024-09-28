<?php 
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | CRUD Project</title>
    <!-- Milligram CSS -->
    </span><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic"><span class="pln">
    </span><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"><span class="pln">
    </span><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css"><span class="pln">
    </span>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="column">
            <table>
                <thead>
                    <tr>
                    <th>Roll</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Grade</th>
                    <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $sql = "select * from `student`";
                    $sql_result = mysqli_query($connection, $sql);

                    if( $sql_result ) {
                        while( $sql_row = mysqli_fetch_assoc($sql_result)) {
                            $roll = $sql_row['roll'];
                            $name = $sql_row['name'];
                            $email = $sql_row['email'];
                            $phone = $sql_row['phone'];
                            $grade = $sql_row['grade'];

                            echo '<tr>
                                <td>'. $roll .'</td>
                                <td>'. $name .'</td>
                                <td>'. $email .'</td>
                                <td>'. $phone .'</td>
                                <td>'. $grade .'</td>
                                <td><a href="update.php?update='. $roll .'" class="button button-outline">Update</a></td>
                                <td><a href="delete.php?delete='. $roll .'" class="button">Delete</a></td>

                            </tr>';
                        }
                    }
                    ?>
                </tbody>
                </table>
            </div>
        </div> 
        <div class="row">
            <div class="column column-offset-40">
                <a href="adduser.php" class="button">Add User</a>

            </div>
            </div> 
    </div>
    
</body>
</html>