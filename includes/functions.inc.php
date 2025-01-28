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
    $result;
    $userExists = userExists($companyUsername,$companyUsername);

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
