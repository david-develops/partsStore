<?php
//Database connection file
    include 'dbh.php';
    require_once '../functions.php';
//check that user submitted create account form
if(isset($_POST['submit'])){
    //get input data from form 
    $userName = $_POST['userName'];
    $userPass = $_POST['pass'];
    $userRePass = $_POST['passRepeat'];
    $userEmail = $_POST['email'];
    $userBdate = $_POST['bDate'];

    //TODO -check for empty/invalid inputs
    if (emptyInput($userName, $userPass, $userEmail, $userBdate) !== false) {
        header("Location: ../signUp.php?error=emptyInput");
        exit();
    }
    if (userNameInvalid($userName) !== false) {
        header("Location: ../signUp.php?error=userNameInvalid");
        exit();
    }
    if (userNameExists($conn, $userName, $userEmail) !== false) {
        header("Location: ../signUp.php?error=userNameTaken");
        exit();
    }
    if (passWordMismatch($userPass, $userRePass) !== false) {
        header("Location: ../signUp.php?error=passwordsDoNotMatch");
        exit();
    }
    if (emailInvalid($userBdate, $userEmail, $userName, $userPass, $userRePass) !== false) {
        header("Location: ../signUp.php?error=emailInvalid");
        exit();
    }
    createUser($conn, $userName, $userPass, $userEmail, $userBdate);
    
}else{
    header("Location: ../signUp.php?redir=true");
    exit();
}




