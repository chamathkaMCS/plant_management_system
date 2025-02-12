<?php
    include_once 'indexHeader.php';
    include_once 'styles.php';
    include_once 'loginHeader.php';
    include_once 'footer.php';
    include_once 'adminLoginStatus.php';
    include_once 'navigationPanel.php';
    $_SESSION['current_page'] = "home.php";
    ?>

<body class="body-style-1">
    <div class="homepageContainer04" >
        <h1 id="time"style="font-size:90px;font-family:roboto;color:rgb(21, 143, 7);"><?php date_default_timezone_set("Asia/Colombo"); echo date("H:i")?></h1>
        <h1 style="font-size:20px;font-family:roboto;"><?php echo date("Y.m.d")?></h1>
        <h1 style="font-size:40px;font-family:roboto;"><?php echo date("l")?><h3>
    </div>
    
    <div class="homepageContainer03" >
    <?php
        //fertilization blocks
        require_once 'includes/conn.inc.php';
        $companyUserid = $_SESSION["userid"];

        $query = "SELECT * FROM plant_inventory 
            WHERE companyUserid = $companyUserid 
            AND fertilization IS NOT NULL 
            ORDER BY fertilization ASC 
            LIMIT 2";
        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
            ?>
        <a class="cards" href="plant_profile.php?plantId=<?php echo urlencode($row['plantId']); ?>">
            <h1 class="date"><?php echo date("d", strtotime($row["fertilization"])); ?></h1>
            <h1 class="time"><?php echo date("H:i", strtotime($row["fertilization"])); ?> PM</h1>
            <h1 class="day"><?php echo date("l", strtotime($row["fertilization"])); ?><h3>
            <h1 style="width:100%;">Fertilization</h1>
            <div style="width:100%;height:90px;overflow:scroll;margin-bottom:10px;"><p style="margin-bottom:10px;"><?php echo ($row["fertilization_note"]); ?></p></div>
        </a>
        <?php
            }
        }
        //maintenance blocks
        require_once 'includes/conn.inc.php';
        $companyUserid = $_SESSION["userid"];

        $query = "SELECT * FROM plant_inventory
            WHERE companyUserid = $companyUserid 
            AND maintenance IS NOT NULL 
            ORDER BY maintenance ASC 
            LIMIT 2";
        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result) ){
    ?>
        <a class="cards" href="plant_profile.php?plantId=<?php echo urlencode($row['plantId']); ?>">
            <h1 class="date"><?php echo date("d", strtotime($row["maintenance"])); ?></h1>
            <h1 class="time"><?php echo date("H:i", strtotime($row["maintenance"])); ?> PM</h1>
            <h1 class="day"><?php echo date("l", strtotime($row["maintenance"])); ?><h3>
            <h1 style="width:100%;">Maintenance</h1>
            <div style="width:100%;height:90px;overflow:scroll;margin-bottom:10px;"><p style="margin-bottom:10px;"><?php echo ($row["maintenance_note"]); ?></p></div>
        </a>
    <?php
            }
        }
        //protection blocks
        require_once 'includes/conn.inc.php';
        $companyUserid = $_SESSION["userid"];

        $query = "SELECT * FROM plant_inventory
            WHERE companyUserid = $companyUserid 
            AND protection IS NOT NULL 
            ORDER BY protection ASC 
            LIMIT 2";
        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result) ){
        ?>
        <a class="cards" href="plant_profile.php?plantId=<?php echo urlencode($row['plantId']); ?>">
            <h1 class="date"><?php echo date("d", strtotime($row["protection"])); ?></h1>
            <h1 class="time"><?php echo date("H:i", strtotime($row["protection"])); ?> PM</h1>
            <h1 class="day"><?php echo date("l", strtotime($row["protection"])); ?><h3>
            <h1 style="width:100%;">Protection</h1>
            <div style="width:100%;height:90px;overflow:scroll;margin-bottom:10px;"><p style="margin-bottom:10px;"><?php echo ($row["protection_note"]); ?></p></div>
        </a>
        <?php
            }
        }
        ?>
    </div>

    <!-- watering blocks -->
    <h2 class="no5" style="color: blue;" >Watered Status</h2>
    <div class="homepageContainer02">
        <?php
            $companyUserid = $_SESSION["userid"];
            $query = "SELECT * FROM plant_inventory
            WHERE companyUserid = $companyUserid 
            AND watering IS NOT NULL 
            ORDER BY watering ASC";
            $result = mysqli_query($conn,$query);

            if(mysqli_num_rows($result)==0){
        ?>
                <h1 style="margin:auto;font-size:50px;color:rgb(178, 192, 180);font-family:Arial;margin-top:20vh">  No Records Available In your Company</h1>
        <?php
            }elseif(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){

                    $Watered = $row["watering"];
                    $plantId = $row["plantId"];
                    $currentTime = new DateTime();
                    $lastWateredTime =new DateTime($Watered);
                    $forLocalStorage = date("Y-m-d H:i:s", strtotime($row["watering"]));
                    $interval = $currentTime->diff($lastWateredTime);

                    if ($interval->h >= 24 || $interval->days > 0){
                        ?>
                        <div class="waterDiv"><img src="images/to_water.png" class="wateredStatus"><button class="toWaterbutton" data-previous='<?php echo $forLocalStorage; ?>' data-plantid='<?php echo $row['plantId']; ?>'><?php echo $row["plantName"]; ?></button>
                        </div>
                        <?php   
                    }else{
                        ?>
                        <div class="waterDiv"><img src="images/watered.png" class="wateredStatus"><button  class="wateredButton" data-plantid='<?php echo $row['plantId']; ?>'><?php echo $row["plantName"];?></button></div>
                        <?php 
                    }
                }
            }
        ?>
    </div>
