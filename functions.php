<?php
function emptyInput($userName, $userPass, $userEmail, $userBdate){

}

function userNameInvalid($userName){

}

function userNameExists($conn, $userName){

}

function passWordInvalid($userPass, $userRePass){

}

function emailInvalid($userBdate, $userEmail, $userName, $userPass, $userRePass){
    
}
function createUser($conn, $userName, $userPass, $userEmail, $userBdate){
    //create INSERT statement
    $sql = "INSERT INTO `users` (UserName, UserPass, UserEmail, UserBDate) VALUES ('$userName', '$userPass', '$userEmail', '$userBdate')";
    //run query
    mysqli_query($conn, $sql);
    //redirect to homepage with success message in URL
    header("Location: ../index.php?create=success");
}