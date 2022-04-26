<?php

include_once '../init.php';
// single line comments 
# 2nd type comment 

/* multi
line
comment */

// $variable ="vaibhav";
// //$1 ="invalid";

// $_ ="vaild";

// echo " my name is " .$variable. "<br>" ;

// //fixed variable
// define("variable", "value");

// echo variable;



//super global variable


// $_POST;  //most
// $_GET;   //most
// $_FILES;  //most
// $_SESSION;  //most
// $_REQUEST;
// $_SERVER;
// $_ENV;


// html-form
// $_POST;  //most
// $_GET;   //most
// $_FILES;  //most

//-------------------------------------------------------------------------------------
// 1----- we can't print array in echo 
// if you want to print array use this syntax 
// print_r();

// echo "<br>". "hello my name is echo nd i print the value what u want but i'm unable to print array"."<br>";
// print_r("hello i'm print ,peopel call me when they want to print something anything u want") ;

// echo "<pre>";
// print_r($_POST);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";


// print_r($_GET);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";

// print_r($_FILES);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";

// //user identifications (login-form) 
// session_start();
// print_r($_SESSION);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";



// print_r($_REQUEST);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";

// print_r($_SERVER);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";

// print_r($_ENV);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";





// // indexed array
// echo "<pre>";
// $a = [1,2,3,4,5];
// print_r($a);
// echo "<br>";
// print_r($a[3]);
// echo "<br>";

// // associative array

// $v = ["vt" => "hey"];

// print_r($a);
// echo "<br>";
// print_r($v["vt"]);
// echo "<br>";
// // multidimentional array

// $x = ["bt" => $v];
// print_r($x);



// function calc($value1 ,$value2, $operator){
// $result;
//   switch($operator){
//     case "+":
//          $result=$value1+$value2;
//          break;  
//     case "-":
//          $result=$value1-$value2;
//         break;  
//     case "*":
//         $result=$value1*$value2;
//         break;  
//     case "/":
//          $result=$value1/$value2;
//         break;    
//     default :
//         echo "plaese enter valid operator";

//   }
//   return $result;
// }

// echo calc( 5, 3, "*");


// $vaibhav = "my name is vaibhav";
// echo $vaibhav;
// echo "<br>";

// echo "the lenth of mine variable is " .strlen($vaibhav);
// echo "<br>";

// echo "the word count of mine variable is " .str_word_count($vaibhav);
// echo "<br>";

// echo "the revese string of mine variable is " .strrev($vaibhav);
// echo "<br>";

// echo "find the word in my string is " .strpos($vaibhav, "is");
// echo "<br>";


// echo "find the word in my string a " .strpos($vaibhav, "a");
// echo "<br>";

// echo "find the word in my string vaibhav " .strpos($vaibhav, "vaibhav");
// echo "<br>";
// echo "replace word in my string vaibhav " .str_replace("vaibhav", "priyanshu" , $vaibhav);
// echo "<br>";
// echo "repeat the string" .str_repeat($vaibhav , 4);
// echo "<br>";
// echo "<pre>";
// echo trim("   php learnd feekjf  ref     ");
// echo "<br>";
// echo "<pre>";
// echo trim($vaibhav);


// $age = 65;

// if ($age < 20){
//   echo "you can't drive";
// }
// else if ($age >= 20 && $age <= 65 ){
//   echo "you can drive";

// }
// else {
//   echo "you can't drive";
// }


// $arri = array("0","1","2","3","4","5","6","7","8");

// foreach ($arri as $value){
//   echo $value . "<br>";
// }

// $ar1 = array(0,1);
// $ar2 = array(2,3);
// $ar3 = array(4,5);
// $ar4 = array(6,7);


// $arr = array(array($ar1,$ar2),array($ar3,$ar4));

// // echo var_dump($arr[1][0][1]);

// for($i = 0; $i < count($arr); $i++){

//   for($j = 0; $j < count($arr[$i]); $j++){

//    for($q = 0; $q < count($arr[$j]); $q++){
//    echo $arr[$i][$j][$q] ;
//    echo  " " ;

//   }
//   echo "<br>";

//   }
//   echo "<br>";
// }


// this is get post tutorial   
// connencting a database 
// this database is use for login
$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

// create a connection to the server
$conn = mysqli_connect($servername, $username, $password, $database);

// echo "connection is successfully established";

// create a database

// $sql = "CREATE DATABASE vaibhav";
// $sql = "INSERT INTO `details` ( `email`, `pass`) VALUES ( '$mail', '$password');";
// $result = mysqli_query($conn ,$sql);

// echo var_dump($result) . "<br>";


// if connection is not successful
// if (!$conn){
//   die("Connection failed :" .mysqli_connect_error());
// }
// else{
//   echo "connection is successfully established";
// }


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $mail = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `details` ( `email`, `pass`) VALUES ( '$mail', '$password');";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "your details submitted";
    } else {
        echo "your details not submitted" . mysqli_error($conn);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<!-- lg2JUxZ#a%ZGuJRknINl -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn</title>
    <?php include_once HEAD;
    ?>



    <link rel="stylesheet" href="<?= get_css() ?>apna-login.css">

</head>

<body>
    <?php include_once HEADER;
    ?>
    <!-- send a normal mail -->


    <?php
    $to = "vaibhavtiwari647@gmail.com";
    $subject = "This is Subject";

    $message = file_get_contents("./mail-ui.php");

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <vaibhav.growupnext@gmail.com>' . "\r\n";



    $retval = mail($to, $subject, $message, $headers);


    if ($retval == true) {
        echo "Message sent successfully...";
    } else {
        echo "Message could not be sent...";
    }
    ?>


    <section class="main-section">

        <div class="register-section">

            <div class="register-section-img">

                <div class="logo">
                    <img src="<?= get_img() ?>FINAL-lOGO-png-copy.png" alt="logo">
                </div>

                <!--                 
                <div class="heading">
                     <p>Welcome to </p>
                    <p>Apna Cake House</p>
                    <p>Are you ready to join the elite?</p> -->
                <!-- </div>
            -->
                <div class="icons">
                    <ul>
                        <li><i class="fab fa-instagram"></i></li>
                        <li><i class="fab fa-facebook"></i></li>
                        <li><i class="fab fa-youtube"></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                    </ul>
                </div>

            </div>
            <form class="register-section-content" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="input-div">
                    <p>Email</p>
                    <input type="email" placeholder="---" name="email" id="email">
                </div>

                <div class="input-div">
                    <p>Password</p>
                    <input type="password" placeholder="" name="password" id="password">
                </div>


                <div class="button">
                    <button type="submit">Login</button>
                    <!-- <a href="#">Forgot Password</a> -->
                </div>
            </form>
        </div>
    </section>


    </script>
</body>

</html>