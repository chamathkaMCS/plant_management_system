<?php
    include_once 'indexHeader.php';
    include_once 'styles.php';
    include_once 'loginHeader.php';
    include_once 'footer.php';
    include_once 'adminLoginStatus.php';
    include_once 'navigationPanel.php';
    include_once 'liveSearch.php';
    $_SESSION['current_page'] = "maintaince";
    ?>

<body class="body-style-1">
<div class="homepageContainer05" >
</div>
<div id="searchresult"class="contentHolder">
<?php
        require_once 'includes/conn.inc.php';
        $companyUserid = $_SESSION["userid"];

        $query = "SELECT*FROM plant_inventory WHERE companyUserid =$companyUserid ORDER BY plantName ASC";
        $result = mysqli_query($conn,$query);
        
                if(mysqli_num_rows($result)==0){
            ?>
                    <h1 style="margin:auto;font-size:50px;color:rgb(178, 192, 180);font-family:Arial;margin-top:30vh"> No Results Available</h1>
                <?php
        }elseif(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
            ?>
            <a class="plantCard" href="plant_profile.php">
            <div class="plantCardImg"><img src="uploads/<?php echo $row["plantImage"];?>.jpg" style="width:200px;height:200px;"></div>
            <h3 class="plantCardName"><?php echo $row["plantName"];?></h3>
            </a>
        <?php
            }
        }
    ?>
</div>
</body>
