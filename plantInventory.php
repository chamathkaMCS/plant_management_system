<?php
    include_once 'indexHeader.php';
    include_once 'styles.php';
    include_once 'loginHeader.php';
    include_once 'footer.php';
    include_once 'adminLoginStatus.php';
    include_once 'navigationPanel.php';

    ?>

<body class="body-style-1">
<div class="homepageContainer05" >
</div>
<div class="contentHolder">
    <?php
        require_once 'includes/conn.inc.php';
        $quary = "SELECT*FROM plant_inventory ORDER BY plantName ASC";
        $result = mysqli_query($conn,$quary);

        if(mysqli_num_rows($result)==0){
    ?>
            <h1 style="margin:auto;font-size:50px;color:rgb(178, 192, 180);font-family:Arial;margin-top:30vh"> No Results Available In your Database</h1>
    <?php
        }elseif(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
    ?>
                <div class="customerCard" href="hacked.php">
                <a class="customerCardImg"href="hacked.php"><img class="imageHoder" src="uploads/<?php echo $row["plantImage"];?>.jpg" ></a>
                <a href="hacked.php"><p class="customerCardName"><?php echo $row["plantName"];?></p></a>
                <div style="position:absolute; display:flex;top:80px;left:10px;flex-wrap:wrap;width:150px;">
                    <p class="custormerDetails"><strong>Scientific Name -</strong></p>
                    <p class="custormerDetails"><strong>Available Stock -</strong></p>
                    <p class="custormerDetails"><strong>Orderd Stock -</strong></p>
                    <p class="custormerDetails"><strong>Unit Price -</strong></p>
                </div>
                <div style="position:absolute; display:flex;top:80px;left:160px;flex-wrap:wrap;width:230px;">
                    <p class="custormerDetails"><a href="images/tools.svg"><?php echo $row["scientificName"];?></a></P>
                    <p class="custormerDetails"><a href="images/tools.svg"><?php echo $row["availableStock"];?></a></P>
                    <p class="custormerDetails"><a href="images/tools.svg"><?php echo $row["orderdStock"];?></a></P>
                    <p class="custormerDetails" ><a href="images/tools.svg" style="color:rgb(255, 0, 0);font-weight:400;">Rs.<?php echo $row["unitPrice"];?>/=</a></P>
                </div>
            </div>
    <?php
            }
        }
    ?>
</div>
</body>
