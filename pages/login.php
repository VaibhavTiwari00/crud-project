<?php

include_once '../init.php';


$conn = mysqli_connect($servername, $username, $password, $database);

if (isset($_POST['mail']) && isset($_POST['pass']) && !empty($_POST['mail']) && !empty($_POST['pass'])) {

    $email = $_POST['mail'];
    $pass = $_POST['pass'];

    $email = mysqli_real_escape_string($conn, $email);
    $pass = mysqli_real_escape_string($conn, $pass);


    $sql = "SELECT * FROM `login_system` WHERE `email` = '$email' ";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
            $dPass = $data['password'];
            if ($pass == $dPass) {
                $error = "";
                echo "<script>alert('You Logged in successfully');
                window.location.href='..';</script>";
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }

                $_SESSION['user_email'] = $data['email'];
                $_SESSION['user_name'] = $data['name'];
                $_SESSION['user_mobile'] = $data['number'];
            } else {
                $error = "You entered a wrong password.";
            }
        } else {
            $error = "You did not have an account with this email address";
        }
    } else {
        $error = "Somthing went wrong.";
    }
} else {
    $error =  "Please fill all the information";
}

?>
<!doctype html>
<html lang="en">

<head>

    <title>Login</title>

    <link rel="stylesheet" href="<?= get_css() ?>login.css">
    <?php
    include HEAD;
    ?>

</head>


<body>
    <?php include POP_UP; ?>
    <?php
    include HEADER;
    ?>
    <div class="login-form">
        <form action=" <?= $_SERVER['PHP_SELF']; ?>" method="post">
            <h2 class="text-center">Login</h2>
            <div class="form-group has-error">
                <input type="mail" class="form-control" name="mail" placeholder="email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="pass" placeholder="Password">
            </div>
            <div class="form-group">
                <p class="text-danger"><?= (isset($error) && !empty($error)) ? $error : '' ?></p>
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
            </div>
            <p><a href="#">Forgot your Password?</a></p>
        </form>
        <p class="text-center small">Don't have an account? <a href="<?= home_path() ?>register">Sign up here!</a></p>
    </div>
    <?php
    include SCRIPT;
    ?>
</body>

</html>