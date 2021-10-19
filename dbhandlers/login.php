<?php

if (isset($_POST["submit"])){

    $username = $_POST['userName'];
    $pass = $_POST['pass'];

    //link to connection file and functions for error functions
    require_once 'dbh.php';
    require_once 'functions.php';

    //check for empty input
    if (emptyInputLogin($userName, $userPass) !== false) {
        header("Location: ../login.php?error=emptyInput");
        exit();
    }
    if (userNameInvalid($userName) !== false) {
        header("Location: ../login.php?error=userNameInvalid");
        exit();
    }
 
}