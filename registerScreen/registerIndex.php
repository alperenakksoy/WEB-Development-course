<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="registerStyle.css">
</head>
<body>

    <header>
        <div class="header-container">
            <div class="header-right">
                <button class="login-btn">Log in</button>
                <button class="signup-btn">Sign Up</button>
            </div>
        </div>
    </header>

    <div class="wrapper">
    <form action="includes/formhandler.inc.php" method="post">
            <h1>Register</h1>

            <div class="name">
                <input type="text" name="fname" placeholder="First Name"  id="fname">
                <input type="text" name="lname" placeholder="Last Name"  id="lname">
            </div>

            <div class="input-box">
                <input type="email" name="email" placeholder="Email" >
            </div>

            <div class="input-box">
                <input type="password" name="pwd" placeholder="Password" >
            </div>

           

            <button type="submit" id="loginBtn">Join</button>

            <div class="login-link">
                <p>Have an Account? <a href="loginIndex.php">Login</a></p>
            </div>
        </form>
    </div>

    <script src="registerApp.js"></script>
</body>
</html>
