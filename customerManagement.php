<?php
    include_once 'indexHeader.php';
    include_once 'styles.php';
    include_once 'loginHeader.php';
    include_once 'footer.php';
    include_once 'adminLoginStatus.php';
    include_once 'navigationPanel.php';
    include_once 'liveSearch.php';
    $_SESSION['current_page'] = "customerManagement";
    ?>

<body class="body-style-1">
<div class="homepageContainer05" >
</div>
<div id="searchresult" class="contentHolder">
<?php
        require_once 'includes/conn.inc.php';
        $companyUserid = $_SESSION["userid"];

        $query = "SELECT*FROM customer_details WHERE companyUserid =$companyUserid ORDER BY customerName ASC";
        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result)==0){
    ?>
            <h1 style="margin:auto;font-size:50px;color:rgb(178, 192, 180);font-family:Arial;margin-top:30vh"> No Records Available In your Company</h1>
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
    ?>
</div>
</body>
