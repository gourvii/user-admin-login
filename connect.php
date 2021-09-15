<?php
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    //database connection
    $conn = new mysqli('localhost','root','','db_connect');
    if($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("insert into user_details(USERNAME, NAME, EMAIL, GENDER, PASSWORD, PHONE_NO)
            values(?,?,?,?,?,?)");
        $stmt->bind_param("sssssi",$username,$fullname,$email,$gender,$password,$phone);
        $stmt->execute();
        echo "registration sucessfull...\n"; ?>
        <a href="index.php">Login</a>
        <?php
        $stmt->close();
        $conn->close();
    }
?> 
