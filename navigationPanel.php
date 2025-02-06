</style>
</head>
<body class="body-style-1">
  <div class="navigationButton" onclick="openPanel()"><img class="fill-div"src="images/menu_icon.png"></div>
    <div id="navigationPanel" class="form-closed" >
      <div class="form-container">
        <div class="navigationButton" onclick="closePanel()"><img class="fill-div"src="images/close_icon.png" style="width:25px;height:25px;"></div>
        <a class="no-hover-effect" href="maintaince.php">
          <div style="display:flex;align-items:center;margin-top:50px;width:100%;height:50px;border-bottom: 1px solid white;">
          <h2 class="no2" style="color:rgb(28, 255, 8);margin-left:0px;">Home</h2>
          </div>
        </a>
        <a class="no-hover-effect" href="maintaince.php">
          <div style="display:flex;width:100%;height:50px;border-bottom: 1px solid white;">
          <h2 class="no2" style="color:white;margin-left:0px;">Maintaince</h2>
          </div>
        </a>
        <a class="no-hover-effect" href="maintaince.php">
          <div style="display:flex;width:100%;height:50px;border-bottom: 1px solid white;">
          <h2 class="no2" style="color:white;margin-left:0px;">Plants</h2>
          </div>
        </a><a class="no-hover-effect" href="maintaince.php">
          <div style="display:flex;awidth:100%;height:50px;border-bottom: 1px solid white;">
          <h2 class="no2" style="color:white;margin-left:0px;">Customers</h2>
          </div>
        </a><a class="no-hover-effect" href="maintaince.php">
          <div style="display:flex;margin-top:500px;width:100%;height:50px;border-top: 1px solid white;">
          <h2 class="no2" style="color:white;margin-left:0px;">Create Invoice</h2>
          </div>
        </a>
    </div>
  </div>
<script>
function openPanel() {
  document.getElementById("navigationPanel").className= "form-popup";
}

function closePanel() {
  document.getElementById("navigationPanel").className = "form-closed";
}
</script>