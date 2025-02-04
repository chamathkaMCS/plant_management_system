<?php
    session_start();

if (isset($_POST["create"])){
        $adminEmail = $_POST["adminEmail"];
        $adminUsername = $_POST["adminUsername"];
        $password = $_POST["password"];
        $passwordRepeat = $_POST["passwordRepeat"];
        $companyUserid = $_SESSION["userid"];


        require_once 'conn.inc.php';
        require_once 'functions.inc.php';

        $adminRegisterEmpty = adminRegisterEmptyCheck($adminEmail,$adminUsername,$password,$passwordRepeat);
        $invalidEmail = invalidEmail($adminEmail);
        $invalidUsername = invalidUsername($adminUsername);
        $adminExists = adminExists($conn,$companyUserid,$adminEmail,$adminUsername);
        $passwordDosentMatch = passwordDosentMatch($password,$passwordRepeat);

        if($adminRegisterEmpty !== false){
            header("Location:../adminRegister.php?error=emptyInputs");
            exit;
        }elseif($invalidEmail !== false){
            header("Location:../adminRegister.php?error=invalidEmail");
            exit;
        }elseif($invalidUsername !== false){
            header("Location:../adminRegister.php?error=invalidUsername");
            exit;
        }elseif($adminExists !== false){
            header("Location:../adminRegister.php?error=userExists");
            exit;
        }elseif($passwordDosentMatch !== false){
            header("Location:../adminRegister.php?error=passwordDosentMatch");
            exit;
        }
        createAdmin($conn,$companyUserid,$adminUsername,$password);
}elseif (isset($_POST["delete"])){
    $adminEmail = $_POST["adminEmail"];
    $adminUsername = $_POST["adminUsername"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];
    $companyUserid = $_SESSION["userid"];


    require_once 'conn.inc.php';
    require_once 'functions.inc.php';

    $adminExists = adminExists($conn,$companyUserid,$adminEmail,$adminUsername);
    $adminRegisterEmpty = adminRegisterEmptyCheck($adminEmail,$adminUsername,$password,$passwordRepeat);
    $invalidEmail = invalidEmail($adminEmail);
    $invalidUsername = invalidUsername($adminUsername);
    $passwordDosentMatch = passwordDosentMatch($password,$passwordRepeat);

    if($adminExists === false){
        header("Location:../.php?error=userdoesntExists");
        exit;
    }elseif($adminRegisterEmpty !== false){
        header("Location:../adminRegister.php?error=emptyInputs");
        exit;
    }elseif($invalidEmail !== false){
        header("Location:../adminRegister.php?error=invalidEmail");
        exit;
    }elseif($invalidUsername !== false){
        header("Location:../adminRegister.php?error=invalidUsername");
        exit;
    }elseif($passwordDosentMatch !== false){
        header("Location:../adminRegister.php?error=passwordDosentMatch");
        exit;
    }
    deleteAdmin($conn,$companyUserid,$adminUsername,$password);
}
else{
    header('Location:../adminRegister.php');
    exit;
}