<?php
    include_once 'indexHeader.php';
    include_once 'styles.php';
    include_once 'loginHeader.php';
    include_once 'footer.php';
    include_once 'adminLoginStatus.php';
    include_once 'navigationPanel.php';
    include_once 'liveSearch.php';
    $_SESSION['current_page'] = "plantInventory";
    ?>


<body class="body-style-1">
<div class="homepageContainer05" >
</div>
<div id="searchresult" class="contentHolder">
<?php
    require_once 'includes/conn.inc.php';
    $companyUserid = $_SESSION["userid"];
    $query = "SELECT*FROM plant_inventory WHERE companyUserid =$companyUserid ORDER BY plantName ASC" ;
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==0){
?>
    <h1 style="margin:auto;font-size:50px;color:rgb(178, 192, 180);font-family:Arial;margin-top:30vh">  No Records Available In your Company</h1>
<?php
    }elseif(mysqli_num_rows($result)>0){?>
        <a class="Card" href="add_plant.php">
        <img src="images/add_icon.png" style="width:150px;height:150px;margin:auto;align-content:center;">
        </a><?php
        while($row=mysqli_fetch_array($result)){
            ?>
            <div class="Card"><a style="width:100%;height:100%;"href="plant_profile.php">
            <div class="CardImg"href="uploads/<?php echo $row["plantImage"];?>.jpg"><img src="uploads/<?php echo $row["plantImage"];?>.jpg" ></div>
            <div href="uploads/<?php echo $row["plantImage"];?>.jpg"><p class="CardName"><?php echo $row["plantName"];?></p></div>
                <div style="position:absolute; display:flex;top:80px;left:10px;flex-wrap:wrap;width:150px;">
                    <p class="custormerDetails"><strong>Scientific Name -</strong></p>
                    <p class="custormerDetails"><strong>Available Stock -</strong></p>
                    <p class="custormerDetails"><strong>Orderd Stock -</strong></p>
                    <p class="custormerDetails"><strong>Unit Price -</strong></p>
                </div>
                <div style="position:absolute; display:flex;top:80px;left:160px;flex-wrap:wrap;width:230px;">
                    <p class="custormerDetails"><?php echo $row["scientificName"];?></P>
                    <p class="custormerDetails"><?php echo $row["availableStock"];?></P>
                    <p class="custormerDetails"><?php echo $row["orderdStock"];?></P>
                    <p class="custormerDetails" style="color:rgb(255, 0, 0);font-weight:400;">Rs.<?php echo $row["unitPrice"];?>/=</P>
                </div>
            </a></div>
        <?php
                }
            }
?>
</div>
</body>
