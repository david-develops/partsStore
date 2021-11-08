<?php

if (isset($_POST["submit"])){

    //link to connection file and functions for error functions
    require_once 'dbh.php';
    require_once 'functions.php';
    
    $username = $_POST['userName'];
    $pass = $_POST['pass'];

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