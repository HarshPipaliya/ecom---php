<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup : Shoppie</title>
    <style>
        <?php include './css/signup.css' ?>
    </style>
</head>

<body>
    <div class="signup_container">
        <div class="signup_main">
            <div class="signup">
                <div class="side_main">
                    <div class="side">
                        <h1 class="side_content">Hello, User</h1>
                        <p class="side_content">Enter your personal details and start your shopping now</p>
                        <p class="side_content">Happy Shopping!</p>
                        <button class="btn-signup" class="side_content">Sign Up</button>
                    </div>
                </div>
                <div class="form_main">
                    <div class="form">
                        <h1>Sign up</h1>
                        <form action="">
                            <div class="name input">
                                <input type="text" name="name" placeholder="Name">
                            </div>
                            <div class="mobile input">
                                <input type="tel" name="mobile" placeholder="Mobile">
                            </div>
                            <div class="email input">
                                <input type="email" name="email" placeholder="Email Address">
                            </div>
                            <div class="password input">
                                <input type="password" name="password" id="" placeholder="Password">
                            </div>
                            <input type="submit" value="Signup" name="signup" class="signup-button">
                            <div class="already_user">
                                <p>Already User? <a href="./login.php">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>