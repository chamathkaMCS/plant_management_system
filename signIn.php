<?php
    include_once 'indexHeader.php';
    include_once 'styles.php';
    include_once 'footer.php';?>

<body class="body-style-1">
<div style="margin-top:350px;">
    <h1 class="no1" style="font-size:50px;margin-top:-90px;">Welcome to the </h1>
    <h1 class="no1"style="font-size:30px;margin-top:-30px;">Plant Management System</h1>
    <div class="loginPopup">
        <div class="formContainer">
        <form action="includes/signIn.inc.php" method="post">
            <input type="text" id="username" name="companyUsername" placeholder="Email/Username">
            <input type="password" id="password" name="password" placeholder="password">
            
            <input type="submit" value="Login" name="submit">

        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyInputs"){
                    echo '<div class="error"> Fill all the Fields</div>';
                }elseif($_GET["error"] == "wrongPassword"){
                    echo '<div class="error"> Wrong Password</div>';
                }elseif($_GET["error"] == "userDosentExists"){
                    echo '<div class="error"> Invalid Email or Username</div>';
            }
        }
        ?>
        </form>
                <p>New to here <a href="signUp.php">Register</a></p>
</div>
    </div>
</div>