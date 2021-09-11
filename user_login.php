<!DOCTYPE html>
<html>
    <head>
        <title>User Module</title>
        <link href="css/user_ss.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <form>
            <fieldset>
                <legend>User Login</legend>
                <div>
                    <label for="username">Username: </label>
                    <input type="text" name="username" id="admin" placeholder="Enter username" required>
                </div>
                <br>
                <div>
                    <label for="password">Password: </label>
                    <input type="password" name="password" placeholder="Enter password" required>
                </div>
                <br> <br>
                <button type="buttonS" name="login" id="loginS">Login</button>
                <br>
                <p>
                    Do not have an account yet? Click here to 
                    <a href="user_register.php">Register.</a>
                </p>
                <p>
                    <a href="#">Forgot your password?</a>
                </p>
            </fieldset>
        </form>
        <script>
            $(function(){
                $('#login').click(function(e){
                    var valid = this.form.checkValidity();
                    if(valid){
                        var username = $('#username').val();
                        var password = $('#password').val();
                    }

                    e.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: 'jslogin.php',
                        data: {username: username, password: password},
                        succes:function(data){
                            alert('success');
                        },
                        error: function(data){
                            alert('there were errors while doing operation');
                        }
                    });
                });
            });
        </script>
    </body>
</html>