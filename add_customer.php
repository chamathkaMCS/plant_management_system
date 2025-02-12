<?php
    include_once 'indexHeader.php';
    include_once 'styles.php';
    include_once 'footer.php';
    ?>
<body style="background-color:rgba(0, 0, 0, 0.27);">
    <form action="includes/add_customer.inc.php" method="post" class="popUpFormContainer">
            <div style="background-color:rgba(211, 167, 22, 0);width:70%">
                <div class="inputContainer" style="margin-top:50px;">
                    <label>Customer Name</label>
                    <input type="text" id="customerName" name="customerName" placeholder="Customer Name">
                </div>
                <div class="inputContainer">
                    <label>Customer Email</label>
                    <input type="text" id="customerEmail" name="customerEmail" placeholder="Customer@email.com">
                </div>
                <div class="inputContainer">
                    <label>Contact Number</label>
                    <input type="text" id="contactNo" name="contactNo" placeholder="0XX XX XXX XX">

                </div>
                <div class="inputContainer">
                    <label>Address</label>
                    <input type="text" id="address" name="address" placeholder="No XX, XXXXXXXXXXXXX , XXXXXXXXXXXXX , XXXXXXXXXXX.">
                </div>
                <div class="inputContainer">
                    <label>National Identity Card</label>
                    <input type="text" id="nId" name="nId" placeholder="XXXXXXXXXXXXX">
                </div>
                <div class="inputContainer">
                    <label>Gender</label>
                    <select id="gender" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </div>
                <div class="inputContainer">
                    <input type="submit" value="Add customer" name="submit" style="margin-bottom:50px;">
                </div>
            </div>
            <div style="background-color:rgba(30, 211, 75, 0);width:30%;display:flex;flex-direction:column;">
                <div style="width:100%;height:500px;flex-wrap:wrap;overflow:hidden;background-color:rgba(211, 178, 30, 0);">
                    <div class="imageUpload" style="background-color:rgba(211, 30, 30, 0);">
                        <img id="imagePreview" src="images/customer image.png" alt="Image Preview" style=" height:100%;display: block;">
                        <img id="imagePreview" src="" alt="Image Preview" style=" height:100%;display: none;"></div>
                </div>
                <div style="width:100%;background-color:rgba(211, 30, 30, 0);padding-left:40px;">
                <input type="file" id="imageUpload" name="image" accept="image/*" onchange="previewImage(event)">
                </div>
                <script>
                    function previewImage(event) {
                        var reader = new FileReader();
                        reader.onload = function() {
                            var output = document.getElementById('imagePreview');
                            output.src = reader.result;
                            output.style.display = "block"; // Show the image preview
                        };
                        reader.readAsDataURL(event.target.files[0]);
                    }
                </script>
            </div>
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyInputs"){
                        echo '<div class="error"> Fill all the Fields</div>';
                    }elseif($_GET["error"] == "invalidEmail"){
                        echo '<div class="error"> invalid Email</div>';
                    }elseif($_GET["error"] == "invalidUsername"){
                        echo '<div class="error"> invalid username </div>';
                    }elseif($_GET["error"] == "userExists"){
                        echo '<div class="error"> Email or username already exists</div>';
                    }elseif($_GET["error"] == "passwordDosentMatch"){
                        echo '<div class="error"> password doesn\'t match </div>';
                    }elseif($_GET["error"] == "loginSuccessfully"){
                        echo '<div class="done"> Login Successfully </div>';
                    }elseif($_GET["error"] == "stmtFailed"){
                        echo '<div class="done"> Connection Failed </div>';
                    }
                }
            ?>
        </form>
</body>