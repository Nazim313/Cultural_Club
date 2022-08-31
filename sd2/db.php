<?php 
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'sd2';

    $conn = mysqli_connect($host, $username, $password, $db_name);

    // $result = mysqli_query($db, 'SELECT * FROM `data`');

    // $user_array = [];
    // if ($result->num_rows > 0) {
    //     while($row = $result->fetch_assoc()) {
    //       array_push($user_array, $row['username']);
    //     }
    //   } else {
    //     echo "0 results";
    // }
    // header("Content-Type: application/json");
    // echo json_encode($user_array);
    // mysqli_close($db);