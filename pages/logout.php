<?php

include_once '../init.php';

session_destroy();
echo "<script>alert('You Logout successfully');
                window.location.href='home';</script>";


?>
<!doctype html>
<html lang="en">

<head>

    <title>Logout</title>


    <?php
    include HEAD;
    ?>

</head>


<body>




    <?php
    include SCRIPT;
    ?>
</body>

</html>