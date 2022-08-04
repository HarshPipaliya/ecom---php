<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login : Shoppie</title>
    <style>
        <?php include './css/login.css' ?>
    </style>
</head>

<body>
    <div class="login_main">
        <div class="login">
            <h1 class="shoppie_logo">Shoppie</h1>
            <form action="./login.php" method="POST">
                <div class="email">
                    <input type="email" placeholder="Email" name="email" id="email" autocomplete="off">
                </div>
                <div class="password">
                    <input type="password" placeholder="Password" name="email" id="password">
                </div>
                <div class="submit">
                    <input type="submit" value="Login" name="login" id="login">
                </div>
                <a class="forgot_password" href="">Forgot Password?</a>
                <p class="new_user">New User? <a href="./signup.php">Signup Now</a></p>

            </form>
        </div>
    </div>
</body>

</html>