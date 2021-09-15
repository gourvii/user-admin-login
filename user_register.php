<?php include "header.php"; ?>

        <title>User Registrtation</title>
    </head>
    <body>
    <div class="container">
    <div class="row justify-content-center" id="register-form">
                <div class="col-lg-10 my-auto">
                    <div class="card-group">
                        <div class="card rounded-left p-4" style="flex-grow:1.4;">
                            <h1 class="text-center font-weight-bold text-primary">New User Registration</h1>
                            <hr class="my-3">
                            <form action="connect.php" method="POST">
                                <fieldset>
                            <div>
                                <label for="fullname">Full Name: </label>
                                <input type="text" name="fullname" id="fullname" placeholder="Enter your full name" required>
                            </div> <br>
                            <div>
                                <label for="username">Username:</label>
                                <input type="text" name="username" id="username" placeholder="Enter username" required>
                            </div> <br>
                            <div>
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" placeholder="Enter your email" required>
                            </div> <br>
                            <div>
                                <label for="phone">Contact no:</label>
                                <input type="number" name="phone" id="phone" placeholder="Enter phone no" required>
                            </div> <br>
                            <div>
                                <label for="gender">Gender:</label>
                                <select name="gender" id="gender"> 
                                    <option value="female">female</option>
                                    <option value="male">male</option>
                                    <option value="other">other</option>
                                </select>
                            </div> <br>
                            <div>
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" placeholder="Enter password" required minlength="5">
                            </div> <br>
                            <button type="submit" name="register" id="register-btn">Register</button>
                            <br> <br> 
                            <p>
                                Already registered? Click here to  
                                <a href="index.php">Login.</a>
                            </p>
                            </fieldset>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php"; ?>