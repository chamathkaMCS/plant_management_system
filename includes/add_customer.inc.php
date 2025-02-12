<?php
if (isset($_POST["submit"])){
        $companyUserid = $_SESSION["userid"];
        $customerName = $_POST["customerName"];
        $customerEmail = $_POST["customerEmail"];
        $contactNo = $_POST["contactNo"];
        $address = $_POST["address"];
        $nId = $_POST["nId"];
        $gender = $_POST["gender"];

        require_once 'conn.inc.php';
        require_once 'functions.inc.php';

        $detailsEmpty = detailsEmptyCheck($customerName,$customerEmail,$contactNo,$address,$nId,$gender);
        $invalidEmail = invalidEmail($customerEmail);


        if($detailsEmpty !== false){
            header("Location:../add_customer.php?error=emptyInputs");
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
        // createCustomer($conn,$companyName,$companyEmail,$companyUsername,$password,$repeatPassword);
}
else{
    header('Location: ../' . $_SESSION["current_page"] . '.php');
    exit;
} 