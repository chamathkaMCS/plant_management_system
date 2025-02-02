<?php
    session_start();
    $companyUserid = $_SESSION["userid"];
    $adminEmail = $_SESSION["adminEmail"];
    $adminUsername = $_SESSION["adminUsername"];

    require_once 'conn.inc.php';
    require_once 'functions.inc.php';

    $adminExists = adminExists($conn,$companyUserid,$adminEmail,$adminUsername)

    if($adminExists !== false){
        header("Location:../home.php?admin=newCompany");
        exit;
    }else{
        header("Location:../home.php?admin=exitingCompany");
        exit;
    }