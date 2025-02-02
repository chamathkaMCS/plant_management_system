<?php
    include_once 'indexHeader.php';
    include_once 'styles.php';
    include_once 'loginHeader.php';
    include_once 'footer.php';?>


<div style="position:absolute;top:130px;right:25px;">
  <a href="includes/adminRegister.inc.php">
    <button class="adminViewIcon"><img style="width:65%;height:65%;"src="images/tools.png"></button>
  </a>
</div>
 <div style="position:absolute;top:130px;right:25px;">
  <a href="includes/adminRegister.inc.php">
    <button class="adminViewLabel">Acsess As Admin</button>
  </a>
</div>

<div style="position:absolute;top:130px;right:25px;">
  <a href="#">
    <button class="adminAction">Exit Admin View</button>
  </a>
</div>
<div style="position:absolute;top:130px;right:200px">
  <a href="#">
    <button class="adminAction">Create/Delete Admin</button>
  </a>
</div>


<?php
        if(isset($_SESSION["adminid"])){
            echo <<<HTML
            <div style="position:absolute;top:130px;right:25px;">
                    <button class="adminViewIcon"><img style="width:65%;height:65%;" src="images/tools.png"></button>
            </div>
            <div style="position:absolute;top:130px;right:25px;">
                <a href="includes/adminLogin.inc.php">
                    <button class="adminViewLabel">Access As Admin</button>
                </a>
            </div>
            HTML;
        }
        else{
            echo <<<HTML
            <div style="position:absolute;top:130px;right:25px;">
                <a href="includes/adminRegister.inc.php">
                    <button class="adminAction">Exit Admin View</button>
                </a>
                </div>
            <div style="position:absolute;top:130px;right:200px">
                <a href="#">
                    <button class="adminAction">Create/Delete Admin</button>
                </a>
            </div>
            HTML;
        }
        ?>