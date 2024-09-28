<?php

$connection = new mysqli('localhost', 'root', '', 'crud');

if($connection) {
    echo "Database Connected!";
} else {
    die(mysqli_error($connection));
}


?>