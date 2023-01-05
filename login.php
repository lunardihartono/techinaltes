<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login || Instagtram</title>
    <link rel="shortcut icon" href="public/assets/images/favicon/instagram.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/register.css">
</head>
<body>
    <section class="pageContainer">
        <main class="row">
            <article class="col-1">
                <form action="">
                    <div class="siteLogoContainer">
                        <img src="public/assets/images/logo/instagram.png" alt="Instagram Logo">
                    </div>
                    <input type="email" placeholder="Email or Username" class="form--input" name="email_username">
                    <div class="passwordContainer">
                        <input type="password" placeholder="Password" class="form--input" name="password" id="password">
                        <span class="show_hide_text cursor-pointer" id="show_hide_password">Show</span>
                    </div>
                    <button class="button cursor-pointer" type="submit" name="submitButton">Log In</button>
                    <span class="separator">Or</span>
                    <a href="#" class="password_reset">Forgot Password</a>
                </form>
                <footer class="form--footer">
                    Don't have an account? <a href="register.php">Sign Up</a>
                </footer>
            </article>
        </main>
    </section>
    <script src="public/js/common.js"></script>
</body>
</html>