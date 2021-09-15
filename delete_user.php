<?php 
include "config.php";
$user_id = $_GET['ID']; // get user_id through query string
if ($user_id != 0) {
$query = "DELETE FROM user_details WHERE ID='$user_id'"; // select query
$result = mysqli_query($conn,$query);
echo "User deleted successfully.\n";
}
?>
<a href="admin_home.php">HOME</a>