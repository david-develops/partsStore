<?php
function emptyInput($userName, $userPass, $userEmail, $userBdate){
    $res=null;
    if(empty($userName)||empty($userPass)||empty($userEmail)||empty($userBdate)){
        $res=true;
    }else{
        $res=false;
    }
    return $res;
}
function emptyInputLogin($userName, $userPass){
    $res=null;
    if(empty($userName)||empty($userPass)){
        $res=true;
    }else{
        $res=false;
    }
    return $res;
}
function userNameInvalid($userName){
    $res=null;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $userName)){
        $res=true;
    }else{
        $res=false;
    }
    return $res;
}
function emailInvalid($userEmail){
    $res=null;
    if(!(filter_var($userEmail, FILTER_VALIDATE_EMAIL))){
        $res=true;
    }else{
        $res=false;
    }
    return $res;
}
function passWordMismatch($userPass, $userRePass){
    $res=null;
    if($userPass !== $userRePass){
        $res=true;
    }else{
        $res=false;
    }
    return $res;
}
function userNameExists($conn, $userName, $userEmail){
    //create outline of SQL statement to be passed to DB
    $sql = "SELECT * FROM users WHERE UserName = ? OR UserEmail = ?;";
    //use built in function to init a statement for the existing DB connection
    $stmt = mysqli_stmt_init($conn);
    //Check for fail of stmt
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signUp.php?error=failStmt");
        exit();
    }
    //Bind user input to the stmt
    mysqli_stmt_bind_param($stmt, "ss", $userName, $userEmail);
    //execute stmt
    mysqli_stmt_execute($stmt);
    //fetch result of stmt
    $resultData = mysqli_stmt_get_result($stmt);

    //return results
    //get result as assoc array
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        return false;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $userName, $userPass, $userEmail, $userBdate){
    //create hashWord
    $hashWord = password_hash($userPass, PASSWORD_DEFAULT);
    //create INSERT statement
    $sql = "INSERT INTO `users` (UserName, UserPass, UserEmail, UserBDate) VALUES (?,?,?,?)";
    //init prepared statement
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signUp.php?error=failStmt");
        exit();
    }
    //Bind user input to the stmt
    mysqli_stmt_bind_param($stmt, "ssss", $userName, $hashWord, $userEmail, $userBdate);
    //execute stmt and close
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    //redirect to homepage with success message in URL
    header("Location: ../index.php?create=success");
}