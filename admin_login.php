<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["adminname"]);
    $password = test_input($_POST["password"]);
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$sql = "SELECT * FROM adminlogin WHERE USERNAME='$username' AND PASSWORD='$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)=== 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['USERNAME'] === $username && $row['PASSWORD'] === $password) {
        $_SESSION['USERNAME'] = $row['USERNAME'];
        $_SESSION['NAME'] = $row['NAME'];
        $_SESSION['ID'] = $row['ID'];
        header("Location: admin_home.php");
        exit();
    }
    else{
        header('Location: admin_panel.php');
        exit();
    }
}
else{
    echo "<script language='javascript'>";
    echo "alert('WRONG INFORMATION')";
    echo "</script>";
    die();
    //$_SESSION['message']="Incorrect Username or Password.";
    header('Location: admin_panel.php');
    //exit();  
}

?>