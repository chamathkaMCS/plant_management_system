<?php
    include_once 'indexHeader.php';
    require_once 'includes/conn.inc.php';
    $companyUserid = $_SESSION["userid"];
    $currentPage = $_SESSION['current_page'];
    
    if($currentPage=="plantInventory")
        if(isset($_POST['input'])){
            $input = $_POST['input'];
            $query = "SELECT*FROM plant_inventory WHERE companyUserid =$companyUserid AND plantName LIKE '{$input}%'";
            $result = mysqli_query($conn,$query);
        
                if(mysqli_num_rows($result)==0){
                ?>
                    <h1 style="margin:auto;font-size:50px;color:rgb(178, 192, 180);font-family:Arial;margin-top:30vh"> No Results Available</h1>
                <?php
                }elseif(mysqli_num_rows($result)>0){?>
                <a class="Card" href="add_plant.php">
                    <img src="images/add_icon.png" style="width:150px;height:150px;margin:auto;align-content:center;">
                </a>
                <?php
                    while($row=mysqli_fetch_array($result)){
                ?>
                
                    <div class="Card"><a style="width:100%;height:100%;"href="plant_profile.php">
                    <div class="CardImg"><img src="uploads/<?php echo $row["plantImage"];?>.jpg" ></div>
                    <div ><p class="CardName"><?php echo $row["plantName"];?></p></div>
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
        }
    if($currentPage=="maintaince")
        if(isset($_POST['input'])){
            $input = $_POST['input'];
            $query = "SELECT*FROM plant_inventory WHERE companyUserid =$companyUserid AND plantName LIKE '{$input}%'";
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
        }}
    if($currentPage=="customerManagement")
        if(isset($_POST['input'])){
            $input = $_POST['input'];
            $query = "SELECT*FROM customer_details WHERE companyUserid =$companyUserid AND customerName LIKE '{$input}%'";
            $result = mysqli_query($conn,$query);
        
                if(mysqli_num_rows($result)==0){
        ?>
                    <h1 style="margin:auto;font-size:50px;color:rgb(178, 192, 180);font-family:Arial;margin-top:30vh"> No Results Available</h1>
        <?php
        }elseif (mysqli_num_rows($result)>0) { 
            if (isset($_SESSION["adminId"])) {
            ?>
            <a class="Card" href="add_customer.php">
            <img src="images/add_icon.png" style="width:150px;height:150px;margin:auto;align-content:center;">
            </a><?php
            }
            while($row=mysqli_fetch_array($result)){
            ?>
            <div class="Card"><a style="width:100%;height:100%;"href="customer_profile.php?customerId=<?php echo urlencode($row['customerId']); ?>">
                <div class="CardImg"><img src="uploads/<?php echo $row["customerImg"];?>.jpg" ></div>
                <div><p class="CardName"><?php echo $row["customerName"];?></p></div>
                <div style="position:absolute; display:flex;top:80px;left:10px;flex-wrap:wrap;width:100px;">
                    <p class="custormerDetails"><strong>Email -</strong></p>
                    <p class="custormerDetails"><strong>Contact No -</strong></p>
                    <p class="custormerDetails"><strong>NId No -</strong></p>
                    <p class="custormerDetails"><strong>Address -</strong></p>
                </div>
                <div style="position:absolute; display:flex;top:80px;left:120px;flex-wrap:wrap;width:270px;overflow:hidden;">
                    <p class="custormerDetails"><?php echo $row["customerEmail"];?></P>
                    <p class="custormerDetails"><?php echo $row["contactNo"];?></P>
                    <p class="custormerDetails"><?php echo $row["nId"];?></P>
                    <p class="custormerDetails"><?php echo $row["address"];?></P>
                </div>
            </a></div>
            <?php
            }
        }
    }
    ?>
