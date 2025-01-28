<?php
    include_once 'indexHeader.php';
    include_once 'styles.php';
    include_once 'footer.php';?>
<body style="background-color:rgba(209, 252, 212, 0.43);">
<div style="margin-top:300px;">
<h1 class="no1" style="font-size:50px;margin-top:-90px;">Welcome back to the </h1>
<h1 class="no1"style="font-size:30px;margin-top:-30px;">Plant Management System</h1>
    <div class="loginPopup">
        <div class="formContainer">
        <form action="include/signUp.inc.php" method="post">

            <input type="text" id="companyName" name="companyName" placeholder="Company Name">
            <input type="text" id="companyEmail" name="companyEmail" placeholder="Company Email">
            <input type="text" id="companyUsername" name="companyUsername" placeholder="Company Username">
            <input type="password" id="password" name="password" placeholder="Password">
            <input type="password" id="repeatPassword" name="repeatPassword" placeholder="Confirm Password">
        
            <input type="submit" value="Submit" name="submit">
        </form>
                <p class=>Already have a account <a href="signIn.php">sign in</a></p>
</div>
    </div>
