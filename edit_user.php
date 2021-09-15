<?php
include "config.php";
$user_id = $_GET['ID']; // get user_id through query string
$query = "SELECT * FROM user_details WHERE ID='$user_id'"; // select query
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result); // fetch row

if(isset($_POST['update'])) // when click on Update button
{
    $id = $_REQUEST['ID'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    
	
    $edit = mysqli_query($conn,"UPDATE user_details SET NAME='$name', USERNAME='$username', EMAIL='$email', PASSWORD='$password', PHONE_NO='$phone' WHERE ID='$user_id'");
	
    if($edit)
    {
        header("Location:admin_home.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo "mysqli_error";
    }    	
}
include "header.php";
?>
</head>
<body>
<div class="container">
    <div class="row justify-content-center" id="register-form">
                <div class="col-lg-10 my-auto">
                    <div class="card-group">
                        <div class="card rounded-left p-4" style="flex-grow:1.4;">
                            <h1 class="text-center font-weight-bold text-primary">Update Data</h1>
                            <hr class="my-3">
                            <form  method="POST">
                            <table>

<tr>
<td><input type="hidden" name="id" value="<?php echo "$row[ID]" ?>"></td>
</tr>

<tr>
<td>Name:</td>
<td><input type="text" name="name" value="<?php echo "$row[NAME]" ?>"></td>
</tr>

<tr>
<td>Username:</td>
<td><input type="text" name="username" value="<?php echo "$row[USERNAME]" ?>"></td>
</tr>

<tr>
<td>E-mail:</td>
<td><input type="text" name="email" value="<?php echo "$row[EMAIL]" ?>"></td>
</tr>

<tr>
<td>Password</td>
<td><input type="text" name="password" value="<?php echo "$row[PASSWORD]" ?>"></td>
</tr>

<tr>
<td>Phone Number:</td>
<td><input type="text" name="phone" value="<?php echo "$row[PHONE_NO]" ?>"></td>
</tr>

<tr>
<td><button type="submit" id="update" name="update">Update</button></td>
</tr>

</table>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>