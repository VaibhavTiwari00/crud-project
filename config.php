
 <?php

    define('APPPATH', __DIR__);
    $MODE = "PRO"; // SET "PRO" FROM PRODUCTION MODE


    $ACTUAL_PATH_ARRAY = explode("/", (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

    $APP_PATH = APPPATH;

    $APP_PATH = str_replace("\\", "/", $APP_PATH);



    $APP_DIR_INDEX = array_search(explode("/", $APP_PATH)[count(explode("/", $APP_PATH)) - 1], $ACTUAL_PATH_ARRAY);


    $APP_DOMAIN = "";

    if ($APP_DIR_INDEX == 0) {
        $APP_DOMAIN =  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/";
    } else {

        for ($i = 0; $i < $APP_DIR_INDEX  + 1; $i++) {
            $APP_DOMAIN .= $ACTUAL_PATH_ARRAY[$i] . "/";
        }
    }

    if ($_SERVER['HTTP_HOST'] == "localhost") {
        define('mode', 0);
    } else {
        define('mode', 1);
    }

    define('DOMAIN', $APP_DOMAIN);


    // case 0 for local host work
    // case 1 for production

    if (mode == 1) {

        // Mysqli Db 
        //  this database is use for crud and also use for popup
        $servername = "localhost";
        $username = "id18718728_root";
        $password = "xJK{{*un}/JzPAc0";
        $database = "id18718728_vaibhav";
        // 
        #
        //
    } else {

        #
        // edit this details based on your database info and domain info
        #
        // database info
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "vaibhav";
    }
