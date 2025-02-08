function updateTime() {
    fetch("time.php") // Fetch the time from time.php
    .then(response => response.text())
    .then(data => {
        document.getElementById("time").innerHTML = data;
    });
}

// Update the time every second without refreshing the entire page
setInterval(updateTime, 1000);

function openPanel() {
    document.getElementById("navigationPanel").className= "form-popup";
  }
  
function closePanel() {
    document.getElementById("navigationPanel").className = "form-closed";
  }

function readText(element) {
    alert("Clicked name: " + element.innerText);
}