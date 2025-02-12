<?php

        require_once 'includes/conn.inc.php';
        require_once 'includes/functions.inc.php';

        $companyUserid = $_SESSION["userid"];
        $companyAdminExists = companyAdminExists($conn,$companyUserid);

        
     if($companyAdminExists !== false){
        if(isset($_SESSION["adminId"])){
            echo <<<HTML
            <div style="position:absolute;top:130px;right:25px;">
                <a href="includes/adminLogout.inc.php">
                    <button class="adminAction">Close Admin view</button>
                </a>
                </div>
            <div style="position:absolute;top:130px;right:200px">
                <form action="adminRegister.php" method="post">
                    <button type="submit" class="adminAction" name="buttonClicked">Create / Delete Admin</button>
                </form>
            </div>
            HTML;
        }
        else{
            echo <<<HTML
            <div style="position:absolute;top:130px;right:25px;">
                <a href="adminLogin.php">
                    <button class="adminAction">Open Admin view</button>
                </a>
                </div>
            <div style="position:absolute;top:130px;right:200px">
                <a href="includes/logout.inc.php">
                    <button class="adminAction">Logout</button>
                </a>
            </div>
            HTML;
        }
        
    }elseif($companyAdminExists !== true ){
        echo <<<HTML
        <div style="position:absolute;top:130px;right:25px;">
            <form action="adminRegister.php" method="post">
                    <button type="submit" class="adminAction" name="buttonClicked">Create Admin</button>
                </form>
            </div>
        <div style="position:absolute;top:130px;right:200px">
            <a href="includes/logout.inc.php">
                <button class="adminAction">Logout</button>
            </a>
        </div>
        HTML;
    }
    ?>
