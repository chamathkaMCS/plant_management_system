<?php
if (isset($_POST["submit"])){
        $companyUsername = $_POST["companyUsername"];
        $password = $_POST["password"];

        require_once 'conn.inc.php';
        require_once 'functions.inc.php';

        $signinEmpty = signinEmptyCheck($companyUsername,$password);

        if($signinEmpty !== false){
            header("Location:../signIn.php?error=emptyInputs");
            exit;
        }
        LogUser($conn,$companyUsername,$password);
}
else{
    header('Location:../signin.php');
    exit;
}