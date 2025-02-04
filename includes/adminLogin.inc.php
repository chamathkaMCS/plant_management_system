<?php
if (isset($_POST["submit"])){
        $adminUsername = $_POST["adminUsername"];
        $password = $_POST["password"];
        $companyUserid = $_SESSION["userid"];

        require_once 'conn.inc.php';
        require_once 'functions.inc.php';

        $adminLoginEmptyCheck = adminLoginEmptyCheck($adminUsername,$password);

        if($adminLoginEmptyCheck !== false){
            header("Location:../adminLogin.php?error=emptyInputs");
            exit;
        }
        LogAdmin($conn,$companyUsreid,$adminUsername,$password);
}
else{
    header('Location:../home.php');
    exit;
}