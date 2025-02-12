<body>
<div class="header">
    <div class="backButton" onclick="history.back()"><img class="fill-div"src="images/back_icon.png"></div>
    <h1 class="no1"><?php 
        if(isset($_SESSION["username"])){
            echo 'OPM System of '; echo $_SESSION["username"];
            }
        else{
            echo 'Online Plant Management System ';
        }
        ?></h1>
</div>
</body>
