<?php
//Database connection file
    include 'dbh.php';
//check that user submitted create account form
if(isset($_POST['submit'])){
    //get input data from form 
    $userName = $_POST['userName'];
    $userPass = $_POST['pass'];
    $userEmail = $_POST['email'];
    $userBdate = $_POST['bDate'];

    //TODO -check for empty/invalid inputs

    //create INSERT statement
    $sql = "INSERT INTO `users` (UserName, UserPass, UserEmail, UserBDate) VALUES ('$userName', '$userPass', '$userEmail', '$userBdate')";
    //run query
    mysqli_query($conn, $sql);
    //redirect to homepage with success message in URL
    header("Location: ../index.php?create=success");
}else{
    header("Location: ../signUp.php?redir=true");
}




