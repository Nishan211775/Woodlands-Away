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
                
                <form action="../../Action/admin/login.php" method="post">
                    <h2>Login here..</h2><hr>
                
                    <div class="element">
                        <label>Username</label>
                    </div>
                    <div class="element">
                        <input name="username" class="size" type="text">
                    </div>
                    <div class="element">
                        <label>Password</label>
                    </div>
                    <div class="element">
                        <input name="password" class="size" type="password">
                    </div>
                    <div class="element">
                        <input name="login" class="btn" type="submit" value="Login">
                    </div>
                </form>
            </div>
            
            <div class="signup">
                
                <form action="../../Action/admin/signup.php" method="post">
                    <h2>Signup here..</h2><hr>
                
                    <div class="element">
                        <label>Username</label>
                    </div>
                    <div class="element">
                        <input name="username" class="size" type="text">
                    </div>
                    
                    <div class="element">
                        <label>Password</label>
                    </div>
                    <div class="element">
                        <input name="password" class="size" type="password">
                    </div>
                    <div class="element">
                        <input name="signup" class="btn" type="submit" value="Signup">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

