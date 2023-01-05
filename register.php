<?php
    require_once("init.php");
    if (Input::exists()){
        if(isset($_POST['submitButton'])){
            $rules=[
                'email'=>array('unique'=>'users'),
                'username'=>array('unique'=>'users'),
                'password'=>array('max'=>30)
            ];

            $account->check($_POST,$rules);

            if($account->passed()){
                if(empty($form_errors)){

                } 
            }else{
                $form_errors=array_merge($form_errors,$account->errors());
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register || Instagtram</title>
    <link rel="shortcut icon" href="public/assets/images/favicon/instagram.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/register.css">
</head>
<body>
    <section class="pageContainer">
        <main class="row">
            <article class="col-1">
                <form action="<?= h($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="siteLogoContainer">
                        <img src="public/assets/images/logo/instagram.png" alt="Instagram Logo">
                    </div>
                    <input type="email" placeholder="Email" class="form--input" name="email" autocomplete="off" value=<?= escape(Input::get('email'));?>>
                    <input type="text" placeholder="Full Name" class="form--input" name="fullname" autocomplete="off" value=<?= escape(Input::get('full_name'));?>>
                    <input type="text" placeholder="Username" class="form--input" name="username" autocomplete="off" value=<?= escape(Input::get('username'));?>>
                    <div class="passwordContainer">
                        <input type="password" placeholder="Password" class="form--input" name="password" id="password" autocomplete="new-password">
                        <span class="show_hide_text cursor-pointer" id="show_hide_password">Show</span>
                    </div>
                    <button class="button cursor-pointer" type="submit" name="submitButton">Register</button>
                </form>
                <footer class="form--footer">
                   have an account? <a href="login.php">Log In</a>
                </footer>
            </article>
        </main>
    </section>
    <script src="public/js/common.js"></script>
</body>
</html>