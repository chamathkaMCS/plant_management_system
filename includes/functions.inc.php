<?php

function signinEmptyCheck($companyUsername,$password){
    $result;
    if(empty($companyUsername) || empty($password)){
        $result = true;
    }else{
        $result = false;
    }
}
function logUser($conn,$companyUsername,$password){
    $userExists = userExists($conn,$companyUsername,$companyUsername);
    if($userExists === False){
        header("Location:../signIn.php?error=userDosentExists");
        exit;
    }
    $passwordHashed = $userExists["password"];
    $passwordCheck = password_verify($password,$passwordHashed);
    if($passwordCheck === false){
        header("Location:../signIn.php?error=wrongPassword");
        exit;
    }else if($passwordCheck === true){
        header("Location:../home.php");
        session_start();
        $_SESSION["userid"] = $userExists["companyUserId"];
        $_SESSION["username"] =$userExists["companyUsername"];
    }
}
function signUpEmptyCheck($companyName,$companyEmail,$username,$password,$repeatPassword){
    $result;
    if(empty($companyName) || empty($companyEmail) || empty($username) || empty($password) || empty($repeatPassword)){
        $result = true;
    }else{
        $result = false;
    }
}
function invalidEmail($companyEmail){
    $result;
    if(!filter_var($companyEmail,FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
}
function invalidUsername($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }else{
        $result = false;
    }
}
function userExists($conn,$companyEmail,$companyName){
    $sql = "SELECT*FROM companyLogin WHERE companyEmail =? OR companyUsername = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../signUp.php?error=stmtFailed");
        exit;
    }
    mysqli_stmt_bind_param($stmt,"ss",$companyEmail,$companyUsername);
    mysqli_stmt_execute($stmt);

    $resultRow = mysqli_stmt_get_result($stmt);
    
    if($row = mysqli_fetch_assoc($resultRow)){
        return $row;
    }else{
        return false;
    }
    mysqli_stmt_close($stmt);
}
function passwordDosentMatch($password,$repeatPassword){
    $result;
    if($password !== $repeatPassword){
        $result = true;
    }else{
        $result = false;
    }
}
function CreteUser($conn,$companyName,$companyEmail,$companyUsername,$password,$repeatPassword){
    $sql = "INSERT*INTO companyLogin(companyName,companyEmail,comapnyUsername,password) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../signUp.php?error=stmtFailed");
        exit;
    }
    $passwordHashed = password_hashe($password,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"ssss",$companyName,$companyEmail,$companyUsername,$passwordHashed);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Locaion:../home.php");
}
