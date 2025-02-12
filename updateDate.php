<?php
    require_once 'includes/conn.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['plantId']) && isset($_POST['waterDateTime'])) {
        $plantId = $_POST['plantId'];  
        $waterDateTime = $_POST['waterDateTime'];
        $sql = "UPDATE plant_inventory SET watering = ? WHERE plantId = ?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:../signUp.php?error=stmtFailed");
            exit;
        }
        mysqli_stmt_bind_param($stmt,"si",$waterDateTime, $plantId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    } else {
        echo "Missing plant ID or date-time!";
    }
}
