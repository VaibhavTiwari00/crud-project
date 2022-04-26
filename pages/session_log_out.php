  <?php include_once '../init.php';


    // verify the user login info
    // start the session
    session_start();
    echo "Welcome " . $_SESSION['user'] . "<br>";
    echo "Your mail is " . $_SESSION['mail'] . "<br>";


    session_unset();
    session_destroy();
    echo "session has been logged out";

    ?>