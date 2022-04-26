<?php

include_once '../init.php';


$conn = mysqli_connect($servername, $username, $password, $database);

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = $_POST['name'];
    $gender = $_POST['inlineRadioOptions'];
    $mail = $_POST['email'];
    $number = $_POST['number'];
    $pass = $_POST['password'];
    $confpass = $_POST['confirmpassowrd'];


    $sql = "INSERT INTO `login_system` ( `name`, `gender`, `email`, `number`, `password`) VALUES ( '$username', '$gender', '$mail', '$number', '$pass');";


    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Welcome to crud";
        header("Location: home.php ");
        die();
    } else {
        echo "your details not submitted" . mysqli_error($conn);
    }
}

?>
<!doctype html>
<html lang="en">


<head>

    <title>Register</title>


    <?php
    include HEAD;
    ?>
    <link rel="stylesheet" href="<?= get_css() ?>register.css">
</head>


<body>
    <?php include POP_UP; ?>
    <?php
    include HEADER;
    ?>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                            <form name="form" id="form" method="post" onsubmit="return Validateform()" action=" <?php echo $_SERVER['PHP_SELF']; ?>">

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="name" name="name" class="form-control form-control-lg" />
                                            <label class="form-label" for="nameame">Name</label>
                                            <p id="name-r" class="err_msg"></p>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <h6 class="mb-2 pb-1">Gender:</h6>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="Female" checked />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="Male" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender" value="Other" />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>

                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input type="text" id="email" name="email" class="form-control form-control-lg" />
                                            <label class="form-label" for="email">Email</label>
                                            <p id="mail-r" class="err_msg"> </p>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input type="number" id="phoneNumber" name="number" class="form-control form-control-lg" />
                                            <label class="form-label" for="phoneNumber">Phone Number</label>
                                            <p id="number-r" class="err_msg"></p>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-outline">
                                            <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                            <label class="form-label" for="password">Password</label>
                                            <p id="pass-r" class="err_msg"></p>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="form-outline">
                                            <input type="password" id="confirmpassword" name="confirmpassowrd" class="form-control form-control-lg" />
                                            <label class="form-label" for="confirmpassword">Confirm Password</label>
                                            <p id="pass-cr" class="err_msg"></p>
                                        </div>

                                    </div>
                                </div>

                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Submit">
                                </div>

                            </form>


                        </div>
                    </div>
                    <p class="text-center mt-2">Already have an account? <a href="<?= home_path() ?>login" class="text-dark">Login here!</a></p>
                </div>
            </div>
        </div>
    </section>

    <script>
        function set_error(id, message) {
            element = document.getElementById(id);
            element.innerHTML = message;
        }

        function Validateform() {

            var ret = false;
            var name = document.forms['form']["name"].value.trim();

            var email = document.forms['form']["email"].value;
            var pass = document.forms['form']["password"].value.trim();
            var number = document.forms['form']["number"].value;
            var pass_c = document.forms['form']["confirmpassowrd"].value.trim();

            if (name.length == 0) {
                set_error("name-r", "Please fill the user name");
            } else {
                set_error("name-r", "");
            }
            if (email.length == 0) {

                set_error("mail-r", "Please fill the your email");
            } else {
                set_error("mail-r", "");

            }
            if (pass.length == 0) {
                set_error("pass-r", "Please fill  your password");

            } else {
                set_error("pass-r", "");

            }
            if (pass_c.length == 0) {
                set_error("pass-cr", "Please fill your password");

            } else {
                set_error("pass-cr", "");
                if (pass != pass_c) {
                    set_error("pass-cr", "Please confirm your pass");
                    ret = false;

                } else {
                    set_error("pass-cr", "");
                    ret = true;
                    if (pass.length > 4) {
                        set_error("pass-r", "");
                        if (/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/.test(email)) {
                            set_error("mail-r", "");
                            ret = true;
                        } else {
                            set_error("mail-r", "Please enter valid email address");
                            ret = false;
                        }
                    } else {
                        set_error("pass-r", "Please choose strong password");
                        ret = false;
                    }
                }
            }
            if (number.length == 0) {
                set_error("number-r", "Please fill the your Number");
            } else {
                set_error("number-r", "");
            }
            if (name.length == 0 || email.length == 0 || pass.length == 0 || pass_c.length == 0 || number.length == 0) {
                ret = false;
            }

            return ret;
        }
    </script>
    <?php
    include SCRIPT;
    ?>


</body>

</html>