<?php include "header.php" ?>
<title>Admin Panel</title>
    </head>
    <body>
    <div class="container">
            <!-- Login for start -->
            <div class="row justify-content-center" id="login-box">
                <div class="col-lg-10 my-auto">
                    <div class="card-group">
                        <div class="card rounded-left p-4" style="flex-grow:1.4;">
                            <h1 class="text-center font-weight-bold text-primary">Admin Login</h1>
                            <hr class="my-3">
        <form method="POST" action="admin_login.php" id="admin-login-form">
            <fieldset>
                <div>
                    <label for="adminname">Username: </label>
                    <input type="text" name="adminname" id="admin" placeholder="Enter username" required>
                </div>
                <br>
                <div>
                    <label for="password">Password: </label>
                    <input type="password" name="password" placeholder="Enter password" required>
                </div>
                <br>
                <button type="submit" name="login">Login</button>
                <br>
            </fieldset>
        </form>
        </div>
                    </div>
                </div>
            </div>
            <!-- Login form end -->
        </div>
        <?php include "footer.php" ?>