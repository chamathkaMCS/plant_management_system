<?php
    include_once 'indexHeader.php';
    include_once 'styles.php';
    include_once 'loginHeader.php';
    include_once 'footer.php';
    include_once 'adminLoginStatus.php';
    include_once 'navigationPanel.php';
    ?>
<body class="body-style-1">
<?php
    require_once 'includes/conn.inc.php';
    $companyUserid = $_SESSION["userid"];

    if (isset($_GET['plantId'])) {
        $plantId = urldecode($_GET['plantId']); // Get the name from URL
        $stmtplant = $conn->prepare("SELECT * FROM plant_inventory WHERE plantId = ? AND companyUserid=$companyUserid");
        $stmtplant->bind_param("i", $plantId);
        $stmtplant->execute();
        $resultplant = $stmtplant->get_result();

        if ($rowplant = $resultplant->fetch_assoc()) {?>
            <div class="Profile_container">
            <div style="background-color:rgba(114, 91, 16, 0);width:20%">
                <div class="inputContainer" style="margin-top:50px;">
                <div style="position:absolute; display:flex;left:10px;flex-wrap:wrap;width:200px;">
                    <p class="ProfileDetails"><strong>Plant Name -</strong></p>
                    <p class="ProfileDetails"><strong>Scientific Name -</strong></p>
                    <p class="ProfileDetails"><strong>Plant Code -</strong></p>
                    <p class="ProfileDetails"><strong>Availabele Stock -</strong></p>
                    <p class="ProfileDetails"><strong>Orderd Stock -</strong></p>
                    <p class="ProfileDetails"><strong>Unit Price -</strong></p>
                </div>
            </div>
            </div>
            <div style="background-color:rgba(187, 153, 40, 0);width:70%">
                <div class="inputContainer" style="margin-top:50px;">
                <div style="position:absolute; display:flex;left:10px;flex-wrap:wrap;width:100%;">
                    <p class="ProfileDetails"><?php echo $rowplant["plantName"];?></p>
                    <p class="ProfileDetails"><?php echo $rowplant["scientificName"];?></p>
                    <p class="ProfileDetails"><?php echo $rowplant["plantCode"];?></p>
                    <p class="ProfileDetails"><?php echo $rowplant["availableStock"];?></p>
                    <p class="ProfileDetails"><?php echo $rowplant["orderdStock"];?></p>
                    <p class="ProfileDetails" style="color:red;"><?php echo $rowplant["unitPrice"];?>/=</p>
                </div>
            </div>
            </div>
            <div style="background-color:rgba(143, 145, 40, 0);width:30%;display:flex;">
                <div class="imageUpload" style="margin-right:20px;";><img src="uploads/<?php echo $rowplant["plantImage"];?>.jpg"></div>
            </div>
            </div>
        <?php
        }
        
    }
?>
</body>    