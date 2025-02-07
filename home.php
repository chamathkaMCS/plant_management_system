<?php
    include_once 'indexHeader.php';
    include_once 'styles.php';
    include_once 'loginHeader.php';
    include_once 'footer.php';
    include_once 'adminLoginStatus.php';
    include_once 'navigationPanel.php';
    ?>

<body class="body-style-1">
    <div class="homepageContainer04" >
        <h1 id="time"style="font-size:90px;font-family:roboto;color:rgb(21, 143, 7);"><?php date_default_timezone_set("Asia/Colombo"); echo date("H:i")?></h1>
        <h1 style="font-size:20px;font-family:roboto;"><?php echo date("Y.m.d")?></h1>
        <h1 style="font-size:40px;font-family:roboto;"><?php echo date("l")?><h3>
    </div>
    <div class="homepageContainer03" >
        <button class="cards" onclick="window.location.href='plantInventory.php';">
            <h1 class="date">10</h1>
            <h1 class="time">15:30 PM</h1>
            <h1 class="day">Friday<h3>
            <h1 style="width:100%;">Event 01</h1>
            <p style="margin-bottom:10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci cum, quibusdam maxime rem dolorum laboriosam unde incidunt recusandae labore tenetur.</p>
        </button>
        
    </div>

    <h2 class="no5" style="color: blue;" >Watering</h2>
    <div class="homepageContainer02">
        <div class="toWater"><img src="images/to_water.png" class="wateredStatus"><button class="toWatered">Kohomba</button></div>
        <div class="toWater"><img src="images/watered.png" class="wateredStatus"><button class="watered">Mee</button></div>
        
    </div>
