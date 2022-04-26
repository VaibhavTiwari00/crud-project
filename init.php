<?php
session_start();

include_once 'config.php';
include_once 'include/db.inc.php';

define('COMPONENT', '../include/view/');


define('HEAD', COMPONENT . 'head.php');
define('HEADER', COMPONENT . 'header.php');
define('POP_UP', COMPONENT . 'pop-up.php');
define('SCRIPT', COMPONENT . 'script.php');




function home_path()
{
    return DOMAIN;
}


function get_img()
{
    return  DOMAIN . 'assets/images/';
}


function get_css()
{
    return DOMAIN . 'assets/css/';
}


function get_js()
{
    return DOMAIN . 'assets/js/';
}


function isAuthorised()
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $user_email = (isset($_SESSION['user_email'])) ? $_SESSION['user_email'] : "";

    if (empty($user_email)) {
        header("location:" . home_path() . "login");
    }
}
