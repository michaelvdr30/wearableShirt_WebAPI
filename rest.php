<?php
    include_once('database/db_connect.php');

    $query = $connection->prepare("INSERT INTO test_data (data) VALUES (?)");


    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['sensor_data'])) {
            $val = mysqli_real_escape_string($connection, $_POST['sensor_data']);
            $query->bind_param("s", $val);
            $query->execute();
        }
        echo "success";
    }
?>