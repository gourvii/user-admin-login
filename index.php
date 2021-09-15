<?php include "header.php" ?>
<title>User Module</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/css/bootstrap.min.css">
    </head>
    
    <body>
        <div class="container">
            <!-- Login for start -->
            <div class="row justify-content-center" id="login-box">
                <div class="col-lg-10 my-auto">
                    <div class="card-group">
                        <div class="card rounded-left p-4" style="flex-grow:1.4;">
                            <h1 class="text-center font-weight-bold text-primary">User Login</h1>
                            <hr class="my-3">
                            <form action="user_login.php" method="post" class="px-3" id="login-form">
                                <fieldset>
                                        <div>
                                            <label for="username">Username: </label>
                                            <input type="text" name="username" id="admin" placeholder="Enter username" required>
                                        </div>
                                        <br>
                                        <div>
                                            <label for="password">Password: </label>
                                            <input type="password" name="password" placeholder="Enter password" required>
                                        </div>
                                        <br>
                                        <button type="submit" name="login" id="login" background-color="blue">Login</button>
                                        <br> <br>
                                        <p>
                                            <a href="forgot_pasw.php">Forgot your password?</a>
                                        </p>
                                        <p>
                                        Do not have an account yet? Click here to 
                                        <a href="user_register.php">Register.</a>
                                        </p>
                                        
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login form end -->
        </div>

        <?php include "footer.php"; ?>