<?php
    include_once 'indexHeader.php';
    include_once 'styles.php';
    include_once 'footer.php';?>
<body class="body-style-1">
<?php
if(isset($_SESSION["adminId"])){
?>
<div style="margin-top:350px;">
    <h1 class="no1" style="font-size:50px;margin-top:-90px;">Enter Your </h1>
    <h1 class="no1"style="font-size:30px;margin-top:-30px;">Company Admin Account Details</h1>
    <div class="loginPopup">
        <div class="formContainer">
        <form action="includes/adminRegister.inc.php" method="post">
            <input type="text" id="adminEmail" name="adminEmail" placeholder="Admin's Email">
            <input type="text" id="adminUsername" name="adminUsername" placeholder="Admin's Username">
            <input type="password" id="password" name="password" placeholder="password">
            <input type="password" id="passwordRepeat" name="passwordRepeat" placeholder="repeat password">
            
            <input type="submit" value="Create Account" name="create">
            <input style="background-color:rgba(255, 0, 0, 0.86);" type="submit" value="Delete Account" name="delete">

            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyInputs"){
                        echo '<div class="error"> Fill all the Fields</div>';
                    }elseif($_GET["error"] == "invalidEmail"){
                        echo '<div class="error"> invalid Email</div>';
                    }elseif($_GET["error"] == "invalidUsername"){
                        echo '<div class="error"> invalid username </div>';
                    }elseif($_GET["error"] == "userExists"){
                        echo '<div class="error"> Email or username already exists</div>';
                    }elseif($_GET["error"] == "passwordDosentMatch"){
                        echo '<div class="error"> password doesn\'t match </div>';
                    }elseif($_GET["error"] == "loginSuccessfully"){
                        echo '<div class="done"> Login Successfully </div>';
                    }elseif($_GET["error"] == "stmtFailed"){
                        echo '<div class="done"> Connection Failed </div>';
                    }
                }
            ?>
        </form>
    </div>
    </div>
</div>
<?php
}else{
    echo'<h1 style="margin:auto;font-size:50px;color:rgb(178, 192, 180);font-family:Arial;margin-top:20vh">!!!</h1>';
    exit();
}
?>