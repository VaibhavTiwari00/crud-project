<?php

// $conn = mysqli_connect($servername, $username, $password, $database);

// $error_form = "";


// if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//     $fname = $_POST['fname'];
//     $email = $_POST['email'];
//     $number = $_POST['number'];
//     $address = $_POST['address'];

//     $sql = "INSERT INTO `popup` ( `name`, `email`, `number`, `address`) VALUES ('$fname', '$email', '$number', '$address');";

//     $reso = mysqli_query($conn, $sql);
//     if ($reso) {
//         $error_form = "Thank You";
//     } else {
//         $error_form = "Check your connection with Server";
//     }
// }

?>


<div class="pop-backgroud" id="pop-up-login">




    <section class="profile-details-section" id="form">

        <div class="profile-details-heading">
            <p>Profile Details</p>
            <i class="fas fa-times" id="cross"></i>
        </div>


        <form class="profile-details-input" name="form" action="<?= home_path() ?>" method="post" onsubmit="return validateform()">
            <?php
            if (!$conn) {
                die("Connection failed :" . mysqli_connect_error());
            }
            ?>
            <div class="profile-details-input-name">
                <p>Full Name</p>
                <input type="text" placeholder="Update Name" name="fname">
            </div>
            <span id="name"></span>

            <div class="profile-details-input-number">
                <p>Number</p>
                <input type="number" placeholder="9554330895" name="number">
            </div>
            <span id="number"></span>

            <div class="profile-details-input-mail">
                <p>Email ID</p>
                <input type="mail" placeholder="Example@gmail.com" name="email">
            </div>
            <span id="email"></span>
            <div class="profile-details-input-location">
                <p>Location</p>
                <input type="text" placeholder="Kanpur" name="address" id="address">
            </div>
            <span id="address"></span>
            <?php
            echo  $error_form;
            ?>
            <div class="button-00">
                <button type="submit" class="update-button" id="submit">Update Profile</button>
            </div>

        </form>
        <div class="profile-details-heading">

        </div>

    </section>



</div>