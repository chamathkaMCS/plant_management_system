</style>
</head>
<body class="body-style-1">
  <button class="navigationButton" onclick="openPanel()"><img class="fill-div"src="images/Hamburger_icon.svg.png"></button>
    <div id="navigationPanel" class="form-popup" >
      <div class="form-container">
        <button class="navigationButton" onclick="closePanel()"><img class="fill-div"src="images/tools.png"></button>
      <div style="margin-top:100px;width:100%;height:50px;border-size:5px;border-color: rgb(255, 255, 255);border-style: solid;">
         maintaince
      </div>
    </div>
  </div>
<script>
function openPanel() {
  document.getElementById("navigationPanel").style.display = "block";
}

function closePanel() {
  document.getElementById("navigationPanel").style.display = "none";
}
</script>