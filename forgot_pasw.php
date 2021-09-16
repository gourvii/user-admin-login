<?php include "header.php" ?>
        <title>Forgot Password</title>        
    </head>
    <body>
    <div class="container">
    <div class="row justify-content-center" id="login-box">
                <div class="col-lg-10 my-auto">
                    <div class="card-group">
                        <div class="card rounded-left p-4" style="flex-grow:1.4;">
                            <h1 class="text-center font-weight-bold text-primary">Forgot your password?</h1>
                            <hr class="my-3">
                            <p class="lead text-center text-secondary">Enter the registered e-mail 
                                address and we will send you your password <p>
                            <form method="POST" id="forgot">
                                <fieldset>
                                    <div>
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                                    </div> <br>
                                    <button type="submit" name="forgot" id="forgot">Send password</button>
                                    <br> <br>
                                    <a href="index.php">Back to Login</a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "footer.php" ?>
        <?php
        include "config.php";
        if(isset($_POST['forgot'])) {

            $email_id = $_POST['email'];
            $result = mysqli_query($conn,"SELECT EMAIL,NAME,PASSWORD FROM user_details where EMAIL='.$email_id.'");

            if(mysqli_num_rows($result)=== 1) {
                $row = mysqli_fetch_assoc($result);
                if($row['EMAIL'] == $email_id) {
                    $to = $row['EMAIL'];
                    $subject = "Password";
                    $msg = "Hello ". $row['NAME']. ", your password is ". $row['PASSWORD']; 
                    $header="From: gourvikala@gmail.com"; 
                    mail($to, $subject, $content, $header); 
                    echo "Email has been sent" 
                    ?> <a href="index.php">Back to Login</a> <?php
                }
                else {
                    echo "invlaid email id";
                    header('index.php');
                }
            }        
        }
        ?>