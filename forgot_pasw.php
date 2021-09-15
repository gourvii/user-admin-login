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
                            <form action="pasw_email.php" method="POST" id="forgot">
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

        <?php include "footSer.php" ?>