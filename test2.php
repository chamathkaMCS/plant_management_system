<?php
session_start();
include 'includes/conn.inc.php'; // Make sure this includes your DB connection file

// Check if session variables are set
if (!isset($_SESSION['companyUserid'])) {
    // Handle the case when session variables are not set (e.g., redirect to login)
    header('Location: login.php');
    exit();
}

$companyUserid = $_SESSION['companyUserid']; 
$adminEmail = $_SESSION['adminEmail']; 
$adminUsername = $_SESSION['adminUsername']; 

// Declare and initialize $adminExists before using it
$adminExists = adminExists($conn, $companyUserid, $adminEmail, $adminUsername); 

// Example of using $adminExists
if ($adminExists) {
    echo "Admin exists!";
} else {
    echo "No admin found!";
}

// Function to check if admin exists (define it above or in an included file)
function adminExists($conn, $companyUserid, $adminEmail, $adminUsername) {
    $sql = "SELECT * FROM admin_details WHERE companyUserid = ? AND (adminEmail = ? OR adminUsername = ?)";
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die("Database query failed.");
    }

    mysqli_stmt_bind_param($stmt, "sss", $companyUserid, $adminEmail, $adminUsername);
    mysqli_stmt_execute($stmt);
    $resultRow = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultRow)) {
        return $row; // Admin exists
    } else {
        return false; // No admin found
    }

    mysqli_stmt_close($stmt);
}
?>

function deleteAdmin($conn,$companyUserid,$adminUsername,$password){
    $sql = "DELETE FROM admin_details WHERE adminUsername =?";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../adminRegister.php?error=stmtFailed");
        exit;
    }
    
    mysqli_stmt_bind_param($stmt,"s",$adminUsername);
    mysqli_stmt_execute($stmt);
    header("Location:../includes/adminLogout.inc.php");
    mysqli_stmt_close($stmt);
}
