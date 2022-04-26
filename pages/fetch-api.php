<?php

include_once '../init.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <?php include_once HEAD ;
?>
    

    <link rel="stylesheet" href="<?= get_css() ?>apna-login.css">

</head>

<body>
<?php include_once HEADER ;
?>
<div class="buttons">
    
<button class="button-about" id="fetch">Fetch</button>


</div>

<div class="list">
    <h1>list:</h1>
    <ul id="list">
        
    </ul>
</div>
    

    <script src="<?= get_js() ?>fetch.js">

    </script>
</body>

</html>