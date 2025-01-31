<?php
if (isset($_POST["submit"])){
        $adminUsername = $_POST["adminUsername"];
        $password = $_POST["password"];
        $companyUserid = $_SESSION["userid"];

        require_once 'conn.inc.php';
        require_once 'functions.inc.php';

        $signInEmpty = signinEmptyCheck($adminUsername,$password);

        if($signInEmpty !== false){
            header("Location:../adminLogin.php?error=emptyInputs");
            exit;
        }
        LogAdmin($conn,$companyUsreid,$adminUsername,$password);
}
else{
    header('Location:../adminLogin.php');
    exit;
}