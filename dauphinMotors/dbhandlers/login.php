<?php
    include 'dbh.php';
    require_once 'functions.php';

if (isset($_POST["submit"])){

    //link to connection file and functions for error functions
    require_once 'dbh.php';
    require_once 'functions.php';
    
    $username = $_POST['userName'];
    $pass = $_POST['pass'];

    //check for empty input
    if (emptyInputLogin($username, $pass) !== false) {
        header("Location: ../site-pages/signIn.php?error=emptyInput");
        exit();
    }
    if (userNameInvalid($username) !== false) {
        header("Location: ../site-pages/signIn.php?error=userNameInvalid");
        exit();
    }
    login($conn, $username, $pass);
}else{
    header("Location: ../signUp.php?redir=true");
    exit();
}