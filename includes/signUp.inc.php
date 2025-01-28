<?php
if (isset($_POST["submit"])){
        $companyName = $_POST["companyName"];
        $companyEmail = $_POST["companyEmail"];
        $username = $_POST["companyUserName"];
        $password = $_POST["password"];
        $repeatPassword = $_POST["repeatPassword"];

        require_once 'conn.inc.php';
        require_once 'functions.inc.php';

        $signUpNotEmpty = signUpEmptyCheck($companyName,$companyEmail,$username,$password,$repeatPassword);
        $invalidEmail = invalidEmail($companyEmail);
        $invalidUsername = invalidUsername($username);
        $invalidPassword = invalidPassword($password);
        $passwordDosentMatch = passwordDosentMatch($password,$repeatPassword);


        if($signUpNotEmpty !== false){
            header("Location:signUp.php?error=emptyInputs");
            exit;
        }elseif($invalidEmail !== false){
            header("Location:signUp.php?error=InvalidEmail");
            exit;
        }elseif($invalidUsername !== false){
            header("Location:signUp.php?error=invalidUsername");
            exit;
        }elseif($invalidPassword !== false){
            header("Location:signUp.php?error=invalidPassword");
            exit;
        }elseif($passwordDosentMatch !== false){
            header("Location:signUp.php?error=passwordDosentMatch");
            exit;
        }



        CreteUser($conn,$companyUsername,$password);
}
else{
    header('Location:../signin.php');
    exit;
}

        

