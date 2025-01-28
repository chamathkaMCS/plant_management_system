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
        $userExists = userExists($companyEmail,$companyUsername);
        $passwordDosentMatch = passwordDosentMatch($password,$repeatPassword);


        if($signUpNotEmpty !== false){
            header("Location:../signUp.php?error=emptyInputs");
            exit;
        }elseif($invalidEmail !== false){
            header("Location:../signUp.php?error=InvalidEmail");
            exit;
        }elseif($invalidUsername !== false){
            header("Location:../signUp.php?error=invalidUsername");
            exit;
        }elseif($invalidPassword !== false){
            header("Location:../signUp.php?error=invalidPassword");
            exit;
        }elseif($userExists !== false){
            header("Location:../signUp.php?error=userExists");
            exit;
        }elseif($passwordDosentMatch !== false){
            header("Location:../signUp.php?error=passwordDosentMatch");
            exit;
        }



        CreteUser($conn,$companyName,$companyEmail,$username,$password,$repeatPassword);
}
else{
    header('Location:../signIn.php');
    exit;
} 