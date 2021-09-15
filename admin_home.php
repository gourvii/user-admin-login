<?php
include "config.php";

$sql = "SELECT * FROM user_details ";
$result = $conn->query($sql);

include "header.php";
?>
<title>Admin Home</title>
    </head>
    <body>
    <div class="row justify-content-center" id="user-table">
                
                 <div class="col-lg-10 my-auto">
                    <div class="card-group">
                        <div class="card rounded-left p-4" style="flex-grow:1.4;">
                            <h1 class="text-center font-weight-bold text-primary">User Details</h1>
                            
                            <table align="center" border="2" width="100%">
                                <tr>
                                    <th>ID</th>
                                    <th>USERNAME</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>GENDER</th>
                                    <th>PASSWORD</th>
                                    <th>PHONE NO</th>
                                    <th>EDIT</th>
                                    <th>DELETE</th>
                                </tr>
                            <?php
                            if ($result->num_rows > 0){
                                //output data of each row
                                while($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['ID']; ?></td>
                                        <td><?php echo $row['USERNAME']; ?></td>
                                        <td><?php echo $row['NAME']; ?></td>
                                        <td><?php echo $row['EMAIL']; ?></td>
                                        <td><?php echo $row['GENDER']; ?></td>
                                        <td><?php echo $row['PASSWORD']; ?></td>
                                        <td><?php echo $row['PHONE_NO']; ?></td>
                                        <td><a href="edit_user.php?id=<?php echo $row['ID']; ?>">Edit</a></td>
                                        <td><a href="delete_user.php?id=<?php echo $row['ID']; ?>">Delete</a></td>
                                    </tr>
                                    <br>
                                <?php
                                }
                            }
                            else {
                                echo " 0 results";
                            }
                            ?>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
<?php include "footer.php"?>