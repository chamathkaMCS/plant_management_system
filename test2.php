<?php
    include_once 'indexHeader.php';
    include_once 'styles.php';
    include_once 'loginHeader.php';
    include_once 'footer.php';
    include_once 'adminLoginStatus.php'?>
<style>
.navigationButton {
    width:30px;
    height:30px;
    background-color:rgba(241, 241, 241, 0);
    color: white;
    border: none;
    cursor: pointer;
    opacity: 1;
    position: fixed;
    top: 130px;
    left: 25px;
    z-index:3:
}

.form-popup {
    display: none;
    position: fixed;
    height:100vh;
    bottom: 0;
    left: 0px;
    z-index:1;
    transform: translateX(0);
    background-color:#19741e;
}

.form-container {
    max-width: 300px;
    min-width:300px;
    height:100%;
    margin-top:110px;
    padding:10px;
}

</style>
</head>
<body class="body-style-1">
<button class="navigationButton" onclick="openPanel()"><img class="fill-div"src="images/Hamburger_icon.svg.png"></button>
<div id="navigationPanel" class="form-popup" >
  <form action="/action_page.php" class="form-container">
    <button type="button" class="btn cancel" onclick="closePanel()">Close</button>
  </form>
</div>
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
        <button class="cards" onclick="window.location.href='plantInventory.php';">
            <h1 class="date">12</h1>
            <h1 class="time">15:50 PM</h1>
            <h1 class="day">Monday<h3>
            <h1 style="width:100%;">Event 01</h1>
            <p style="margin-bottom:10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci cum, quibusdam maxime rem dolorum laboriosam unde incidunt recusandae labore tenetur.</p>
        </button>
        <button class="cards">
            <h1 class="date">15</h1>
            <h1 class="time">14:30 PM</h1>
            <h1 class="day">Thuesday<h3>
            <h1 style="width:100%;">Event 01</h1>
            <p style="margin-bottom:10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci cum, quibusdam maxime rem dolorum laboriosam unde incidunt recusandae labore tenetur.</p>
        </button>
        <button class="cards">
            <h1 class="date">17</h1>
            <h1 class="time">12:30 PM</h1>
            <h1 class="day">Saturday<h3>
            <h1 style="width:100%;">Event 01</h1>
            <p style="margin-bottom:10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci cum, quibusdam maxime rem dolorum laboriosam unde incidunt recusandae labore tenetur.</p>
        </button>
        <button class="cards">
            <h1 class="date">21</h1>
            <h1 class="time">15:30 PM</h1>
            <h1 class="day">Sunday<h3>
            <h1 style="width:100%;">Event 01</h1>
            <p style="margin-bottom:10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci cum, quibusdam maxime rem dolorum laboriosam unde incidunt recusandae labore tenetur.</p>
        </button>
        <button class="cards">
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
        <div class="toWater"><img src="images/to_water.png" class="wateredStatus"><button class="toWatered">Nuga</button></div>
        <div class="toWater"><img src="images/watered.png" class="wateredStatus"><button class="watered">Beli</button></div>
        <div class="toWater"><img src="images/to_water.png" class="wateredStatus"><button class="toWatered">Kumbuk</button></div>
        <div class="toWater"><img src="images/watered.png" class="wateredStatus"><button class="watered">Bo</button></div>
        <div class="toWater"><img src="images/to_water.png" class="wateredStatus"><button class="toWatered">Karanda</button></div>
        <div class="toWater"><img src="images/watered.png" class="wateredStatus"><button class="watered">Amba</button></div>
        <div class="toWater"><img src="images/to_water.png" class="wateredStatus"><button class="toWatered">Ehela</button></div>
        <div class="toWater"><img src="images/watered.png" class="wateredStatus"><button class="watered">Thal</button></div>
        <div class="toWater"><img src="images/to_water.png" class="wateredStatus"><button class="toWatered">Mango</button></div>
        <div class="toWater"><img src="images/watered.png" class="wateredStatus"><button class="watered">Palu</button></div>
        <div class="toWater"><img src="images/to_water.png" class="wateredStatus"><button class="toWatered">Weera</button></div>
        <div class="toWater"><img src="images/watered.png" class="wateredStatus"><button class="watered">Dawata</button></div>
        <div class="toWater"><img src="images/to_water.png" class="wateredStatus"><button class="toWatered">Nelli</button></div>
        <div class="toWater"><img src="images/watered.png" class="wateredStatus"><button class="watered">Mora</button></div>
        <div class="toWater"><img src="images/to_water.png" class="wateredStatus"><button class="toWatered">Madan</button></div>
        <div class="toWater"><img src="images/watered.png" class="wateredStatus"><button class="watered">Bakmee</button></div>
        <div class="toWater"><img src="images/to_water.png" class="wateredStatus"><button class="toWatered">Ehela</button></div>
        <div class="toWater"><img src="images/watered.png" class="wateredStatus"><button class="watered">Thal</button></div>
        <div class="toWater"><img src="images/to_water.png" class="wateredStatus"><button class="toWatered">Mango</button></div>
        <div class="toWater"><img src="images/watered.png" class="wateredStatus"><button class="watered">Palu</button></div>
        <div class="toWater"><img src="images/to_water.png" class="wateredStatus"><button class="toWatered">Weera</button></div>
        <div class="toWater"><img src="images/watered.png" class="wateredStatus"><button class="watered">Dawata</button></div>
        <div class="toWater"><img src="images/to_water.png" class="wateredStatus"><button class="toWatered">Nelli</button></div>
        <div class="toWater"><img src="images/watered.png" class="wateredStatus"><button class="watered">Mora</button></div>
        <div class="toWater"><img src="images/to_water.png" class="wateredStatus"><button class="toWatered">Madan</button></div>
        <div class="toWater"><img src="images/watered.png" class="wateredStatus"><button class="watered">Bakmee</button></div>
    </div>

</body>
<script>
function openPanel() {
  document.getElementById("navigationPanel").style.display = "block";
}

function closePanel() {
  document.getElementById("navigationPanel").style.display = "none";
}
</script>
</html>
