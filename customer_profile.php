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

    if (isset($_GET['customerId'])) {
        $customerId = urldecode($_GET['customerId']); // Get the name from URL
        $stmtcustomer = $conn->prepare("SELECT * FROM customer_details WHERE customerId = ? AND companyUserid=$companyUserid");
        $stmtcustomer->bind_param("i", $customerId);
        $stmtcustomer->execute();
        $resultcustomer = $stmtcustomer->get_result();
        $stmtinvoice = $conn->prepare("SELECT * FROM invoice_details WHERE customerId = ? AND companyUserid=$companyUserid");
        $stmtinvoice->bind_param("i", $customerId);
        $stmtinvoice->execute();
        $resultinvoice = $stmtinvoice->get_result();

        if ($rowcustomer = $resultcustomer->fetch_assoc()) {?>
            <div class="Profile_container">
            <div style="background-color:rgba(114, 91, 16, 0);width:20%">
                <div class="inputContainer" style="margin-top:50px;">
                <div style="position:absolute; display:flex;left:10px;flex-wrap:wrap;width:200px;">
                    <p class="ProfileDetails"><strong>Customer Name -</strong></p>
                    <p class="ProfileDetails"><strong>Customer Email -</strong></p>
                    <p class="ProfileDetails"><strong>NId No -</strong></p>
                    <p class="ProfileDetails"><strong>ContactNo -</strong></p>
                    <p class="ProfileDetails"><strong>Address -</strong></p>
                    <p class="ProfileDetails"><strong>Gender -</strong></p>
                </div>
            </div>
            </div>
            <div style="background-color:rgba(187, 153, 40, 0);width:70%">
                <div class="inputContainer" style="margin-top:50px;">
                <div style="position:absolute; display:flex;left:10px;flex-wrap:wrap;width:100%;">
                    <p class="ProfileDetails"><?php echo $rowcustomer["customerName"];?></p>
                    <p class="ProfileDetails"><?php echo $rowcustomer["customerEmail"];?></p>
                    <p class="ProfileDetails"><?php echo $rowcustomer["nId"];?></p>
                    <p class="ProfileDetails"><?php echo $rowcustomer["contactNo"];?></p>
                    <p class="ProfileDetails"><?php echo $rowcustomer["address"];?></p>
                    <p class="ProfileDetails"><?php echo $rowcustomer["gender"];?></p>
                </div>
            </div>
            </div>
            <div style="background-color:rgba(143, 145, 40, 0);width:30%;display:flex;">
                <div class="imageUpload" style="margin-right:20px;";><img src="uploads/200125369258.jpg"></div>
            </div>
            </div>
        <?php
        }
        if(mysqli_num_rows($resultinvoice)==0){
            ?>
                    <h1 style="font-size:50px;color:rgb(178, 192, 180);font-family:Arial;"> No any past Invoices by <?php echo $rowcustomer["customerName"];?></h1>
            <?php
                }elseif(mysqli_num_rows($resultinvoice)>0){?>
                    <div class="invoice_container">
                    <table class="customers">
                    <tr>
                        <th>Invoice Id</th>
                        <th>Date</th>
                        <th>Item Code</th>
                        <th>Amount</th>
                    </tr>
                    <?php
                    while($rowinvoice=mysqli_fetch_array($resultinvoice)){
            ?>
                    <tr>
                        <td><?php echo $rowinvoice["invoiceId"];?></td>
                        <td><?php echo $rowinvoice["InvoiceDate"];?></td>
                        <td>
                            <?php
                            $invoiceId = $rowinvoice["invoiceId"];
                            $stmtItems = $conn->prepare("SELECT * FROM sales_details WHERE invoiceId = ?");
                            $stmtItems->bind_param("i", $invoiceId);
                            $stmtItems->execute();
                            $resultItems = $stmtItems->get_result();
                            while($rowItems=mysqli_fetch_array($resultItems)){
                                echo $rowItems["itemCode"];
                        }?>,</td>
                        <td style="color:red;"><?php echo $rowinvoice["payment"];?>/=</td>
                    </tr>
                    <?php
                }
                ?>
                    </table>
                </div>
            <?php
        }
    }
?>
</body>    