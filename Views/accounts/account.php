<?php

?>

<html>
    <head>
        <title>Account</title>
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="account_main">
            <div class="login">
                
                <form action="../../Action/user/login.php" method="post">
                    <h2>Login here..</h2><hr>
                
                    <div class="element">
                        <label>Email</label>
                    </div>
                    <div class="element">
                        <input name="email" class="size" type="email">
                    </div>
                    <div class="element">
                        <label>Password</label>
                    </div>
                    <div class="element">
                        <input name="password" class="size" type="password">
                    </div>
                    <div class="element">
                        <input class="btn" name="login" type="submit" value="Login">
                    </div>
                </form>
            </div>
            
            <div class="signup">
                
                <form action="../../Action/user/signup.php" method="post">
                    <h2>Signup here..</h2><hr>
                
                    <div class="element">
                        <label>First Name</label>
                    </div>
                    <div class="element">
                        <input name="first_name" class="size" type="text" required>
                    </div>
                    <div class="element">
                        <label>Last Name</label>
                    </div>
                    <div class="element">
                        <input name="last_name" class="size" type="text" required>
                    </div>
                    <div class="element">
                        <label>Email</label>
                    </div>
                    <div class="element">
                        <input name="email" class="size" type="email" required>
                    </div>
                    <div class="element">
                        <label style="margin-right: 50px">Gender</label>
                        <input name="gender" type="radio" value="Male" required>Male
                        <input name="gender" type="radio" value="Female" required>Female
                    </div>
                    <div class="element">
                        <label>Address</label>
                        <input name="address" style="width: 42%;height: 40px" type="text" placeholder="address" required>
                        <input name="postcode" style="width: 20%;height: 40px" type="number" placeholder="postcode" required>
                    </div>
                    <div class="element">
                        <label>Password</label>
                    </div>
                    <div class="element">
                        <input name="password" class="size" type="password" required>
                    </div>
                    <div class="element">
                        <input name="signup" class="btn" type="submit" value="Signup" required>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

