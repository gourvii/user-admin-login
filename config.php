<?php
    //database connection
    //                  host, user, password, database
    $conn = new mysqli('localhost','root','','db_connect');
    if($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
        echo "fail";
    }

?>