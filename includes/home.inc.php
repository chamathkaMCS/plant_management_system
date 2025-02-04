<?php
    session_start();
    include 'conn.inc.php';
    $companyUserid = $_SESSION["userid"];
    $adminEmail = $_SESSION["adminEmail"];
    $adminUsername = $_SESSION["adminUsername"];

    require_once 'conn.inc.php';
    require_once 'functions.inc.php';

    $adminExists = adminExists($conn,$companyUserid,$adminEmail,$adminUsername);

   