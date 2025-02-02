<?php

function signinEmptyCheck($companyUsername,$password){
    $result;
    if(empty($companyUsername) || empty($password)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
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
        $_SESSION["userid"] = $userExists["companyUserid"];
        $_SESSION["username"] =$userExists["companyUsername"];
        $_SESSION["companyName"] =$userExists["companyName"];
    }
}
function signUpEmptyCheck($companyName,$companyEmail,$companyUsername,$password,$repeatPassword){
    $result;
    if(empty($companyName) || empty($companyEmail) || empty($companyUsername) || empty($password) || empty($repeatPassword)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function invalidEmail($companyEmail){
    $result;
    if(!filter_var($companyEmail,FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function invalidUsername($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function userExists($conn,$companyEmail,$companyUsername){
    $sql = "SELECT*FROM company_login WHERE companyEmail =? OR companyUsername = ?;";
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
    return $result;
}
function createUser($conn,$companyName,$companyEmail,$companyUsername,$password,$repeatPassword){
    $sql = "INSERT INTO company_login(companyName,companyEmail,companyUsername,password) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../signUp.php?error=stmtFailed");
        exit;
    }
    $passwordHashed = password_hash($password,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"ssss",$companyName,$companyEmail,$companyUsername,$passwordHashed);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../home.php");
    session_start();
    $_SESSION["userid"] = $userExists["companyUserid"];
    $_SESSION["username"] =$userExists["companyUsername"];
    $_SESSION["companyName"] =$userExists["companyName"];
}
function logAdmin($conn,$adminUsername,$password){
    $userExists = adminExists($conn,$companyUserid,$adminUsername,$adminUsername);
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
        $_SESSION["companyName"] =$userExists["companyName"];
        $_SESSION["adminid"] = $userExists["adminId"];
        $_SESSION["adminEmail"] =$userExists["adminEmail"];
        $_SESSION["adminUsername"] =$userExists["adminUsername"];
        header("Location:../adminRegister.php?error=loginSuccessfully");
    }
}
function adminExists($conn,$companyUserid,$adminEmail,$adminUsername){
    $sql = "SELECT*FROM admin_details WHERE companyUserid=? AND adminEmail =? OR adminUsername = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../adminRegister.php?error=stmtFailed");
        exit;
    }
    mysqli_stmt_bind_param($stmt,"sss",$companyUserid,$adminEmail,$adminUsername);
    mysqli_stmt_execute($stmt);

    $resultRow = mysqli_stmt_get_result($stmt);
    
    if($row = mysqli_fetch_assoc($resultRow)){
        return $row;
    }else{
        return false;
    }
    mysqli_stmt_close($stmt);
}
function isCompanyIdExists($conn,$companyUserid){
    $sql = "SELECT*FROM admin_details WHERE companyUserid =? ;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../adminRegister.php?error=stmtFailed");
        exit;
    }
    mysqli_stmt_bind_param($stmt,"s",$companyUserid);
    mysqli_stmt_execute($stmt);

    $resultRow = mysqli_stmt_get_result($stmt);
    
    if($row = mysqli_fetch_assoc($resultRow)){
        return true;
    }else{
        return false;
    }
    mysqli_stmt_close($stmt);
}
function adminRegisterEmptyCheck($adminEmail,$adminUsername,$password,$passwordRepeat){
    $result;
    if(empty($adminEmail) || empty($adminUsername) || empty($password) || empty($passwordRepeat)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function createAdmin($conn,$companyUserid,$adminUsername,$password){
    $sql = "INSERT INTO admin_details(companyUserid,adminUsername,adminPassword) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../adminRegister.php?error=stmtFailed");
        exit;
    }
    $passwordHashed = password_hash($password,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sss",$companyUserid,$adminUsername,$passwordHashed);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location:../home.php");
}
