<?php
    include_once 'indexHeader.php';
    include_once 'styles.php';
    include_once 'footer.php';?>

<body class="body-style-1">
<div style="margin-top:300px;">
<h1 class="no1" style="font-size:50px;margin-top:-90px;">Welcome back to the </h1>
<h1 class="no1"style="font-size:30px;margin-top:-30px;">Plant Management System</h1>
    <div class="loginPopup">
        <div class="formContainer">
        <form action="includes/signUp.inc.php" method="post">
            <input type="text" id="companyName" name="companyName" placeholder="Company Name">
            <input type="text" id="companyEmail" name="companyEmail" placeholder="Company Email">
            <input type="text" id="companyUsername" name="companyUsername" placeholder="Company Username">
            <input type="password" id="password" name="password" placeholder="Password">
            <input type="password" id="repeatPassword" name="repeatPassword" placeholder="Confirm Password">
        
            <input type="submit" value="Create Account" name="submit">
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
                <p class=>Already have a account <a href="signIn.php" style="color:blue;">Sign in</a></p>
    </div>
</div>
