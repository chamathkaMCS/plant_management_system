<?php
if (isset($_POST["submit"])){
        $adminId = $_SESSION["adminId"];
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
            header("Location:../add_customer.php?error=invalidEmail");
            exit;
        }
        createCustomer($conn,$companyUserid,$adminId,$customerName,$customerEmail,$contactNo,$address,$nId,$gender);
}
else{
    header('Location: ../' . $_SESSION["current_page"] . '.php');
    exit;
} 