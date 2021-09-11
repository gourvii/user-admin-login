<!DOCTYPE html>
<html>
    <head>
        <title>New User Registration</title>
        <link href="css/user_ss.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <form action="connect.php" method="POST">
            <fieldset>
                <legend>New User Registration</legend>
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
                </div>
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
                    <input type="password" name="password" id="password" placeholder="Enter password" required>
                </div> <br>
                <div>
                    <label for="password2">Confirm Password:</label>
                    <input type="password" name="password2" id="password2" placeholder="Enter confirm password" required> 
                </div>
                <br> <br>
                <button type="submit" name="login">Register</button>
                <p>
                    Already registered? Click here to  
                    <a href="user_login.php">Login.</a>
                </p>
            </fieldset>
        </form>
    </body>
</html>