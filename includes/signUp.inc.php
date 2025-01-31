<?php
if (isset($_POST["submit"])){
        $companyName = $_POST["companyName"];
        $companyEmail = $_POST["companyEmail"];
        $companyUsername = $_POST["companyUsername"];
        $password = $_POST["password"];
        $repeatPassword = $_POST["repeatPassword"];

        require_once 'conn.inc.php';
        require_once 'functions.inc.php';

        $signUpEmpty = signUpEmptyCheck($companyName,$companyEmail,$companyUsername,$password,$repeatPassword);
        $invalidEmail = invalidEmail($companyEmail);
        $invalidUsername = invalidUsername($companyUsername);
        $userExists = userExists($conn,$companyEmail,$companyUsername);
        $passwordDosentMatch = passwordDosentMatch($password,$repeatPassword);


        if($signUpEmpty !== false){
            header("Location:../signUp.php?error=emptyInputs");
            exit;
        }elseif($invalidEmail !== false){
            header("Location:../signUp.php?error=invalidEmail");
            exit;
        }elseif($invalidUsername !== false){
            header("Location:../signUp.php?error=invalidUsername");
            exit;
        }elseif($userExists !== false){
            header("Location:../signUp.php?error=userExists");
            exit;
        }elseif($passwordDosentMatch !== false){
            header("Location:../signUp.php?error=passwordDosentMatch");
            exit;
        }
        CreateUser($conn,$companyName,$companyEmail,$username,$password,$repeatPassword);
}
else{
    header('Location:../signIn.php');
    exit;
} 